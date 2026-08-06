<?php
header('Content-Type: text/plain; charset=utf-8');

$columns = 4;

$inputFile = __DIR__ . '/cells-source.txt';
$outputFile = __DIR__ . '/cells-reordered.txt';

/*
  Si false : le showreel est retiré du fichier final.
  Si true : le showreel est gardé à la fin.
*/
$keepShowreel = true;

$html = file_get_contents($inputFile);

/*
  Supprime tous les commentaires HTML :
  <!-- grid wrapper -->
  <!-- <a href="" class="full-link"></a> -->
  <!-- — graphisme — -->
*/
$html = removeHtmlComments($html);

$blocks = extractCellBlocks($html);

$motionBlocks = [];
$graphismBlocks = [];
$showreelBlocks = [];
$otherBlocks = [];

foreach ($blocks as $block) {
    if (hasClass($block, 'showreel')) {
        $showreelBlocks[] = $block;
    } elseif (hasClass($block, 'motion')) {
        $motionBlocks[] = $block;
    } elseif (hasClass($block, 'graphisme')) {
        $graphismBlocks[] = $block;
    } else {
        $otherBlocks[] = $block;
    }
}

/*
  Ordre visuel voulu sur 4 colonnes :

  ligne 1 : motion 1, graphisme 1, motion 2, graphisme 2
  ligne 2 : graphisme 3, motion 3, graphisme 4, motion 4
  ligne 3 : motion 5, graphisme 5, motion 6, graphisme 6
*/
$visualOrder = buildAlternatingVisualOrder($motionBlocks, $graphismBlocks, $columns);

/*
  Ajoute les blocs sans catégorie à la fin.
*/
$visualOrder = array_merge($visualOrder, $otherBlocks);

/*
  Garde ou retire le showreel.
*/
if ($keepShowreel) {
    $visualOrder = array_merge($visualOrder, $showreelBlocks);
}

/*
  Conversion pour CSS columns.
  Comme CSS columns remplit haut → bas,
  le DOM doit être réécrit dans un ordre spécial.
*/
$domOrder = convertVisualOrderToColumnDomOrder($visualOrder, $columns);

$result = '<div class="grid-wrapper">' . "\n";
$result .= indentBlocks($domOrder);
$result .= "\n" . '</div>';

file_put_contents($outputFile, $result);

echo $result;


/* -------------------- fonctions -------------------- */

function removeHtmlComments($html) {
    return preg_replace('/<!--[\s\S]*?-->/', '', $html);
}


function hasClass($htmlBlock, $className) {
    if (!preg_match('/class="([^"]*)"/i', $htmlBlock, $matches)) {
        return false;
    }

    $classes = preg_split('/\s+/', trim($matches[1]));

    return in_array($className, $classes);
}


function extractCellBlocks($html) {
    $blocks = [];
    $needle = '<div class="cell-wrapper';
    $offset = 0;
    $htmlLength = strlen($html);

    while (($start = stripos($html, $needle, $offset)) !== false) {
        $position = $start;
        $level = 0;
        $end = null;

        while ($position < $htmlLength) {
            $nextOpen = stripos($html, '<div', $position);
            $nextClose = stripos($html, '</div>', $position);

            if ($nextClose === false) {
                break;
            }

            if ($nextOpen !== false && $nextOpen < $nextClose) {
                $level++;
                $position = $nextOpen + 4;
            } else {
                $level--;
                $position = $nextClose + 6;

                if ($level === 0) {
                    $end = $position;
                    break;
                }
            }
        }

        if ($end === null) {
            break;
        }

        $blocks[] = trim(substr($html, $start, $end - $start));
        $offset = $end;
    }

    return $blocks;
}


function buildAlternatingVisualOrder($motionBlocks, $graphismBlocks, $columns) {
    $visualOrder = [];

    $motionIndex = 0;
    $graphismIndex = 0;

    $total = count($motionBlocks) + count($graphismBlocks);
    $row = 0;

    while (count($visualOrder) < $total) {
        for ($col = 0; $col < $columns; $col++) {
            $rowStartsWithMotion = ($row % 2 === 0);

            if ($rowStartsWithMotion) {
                $wantedCategory = ($col % 2 === 0) ? 'motion' : 'graphisme';
            } else {
                $wantedCategory = ($col % 2 === 0) ? 'graphisme' : 'motion';
            }

            if ($wantedCategory === 'motion') {
                if (isset($motionBlocks[$motionIndex])) {
                    $visualOrder[] = $motionBlocks[$motionIndex];
                    $motionIndex++;
                } elseif (isset($graphismBlocks[$graphismIndex])) {
                    $visualOrder[] = $graphismBlocks[$graphismIndex];
                    $graphismIndex++;
                }
            }

            if ($wantedCategory === 'graphisme') {
                if (isset($graphismBlocks[$graphismIndex])) {
                    $visualOrder[] = $graphismBlocks[$graphismIndex];
                    $graphismIndex++;
                } elseif (isset($motionBlocks[$motionIndex])) {
                    $visualOrder[] = $motionBlocks[$motionIndex];
                    $motionIndex++;
                }
            }

            if (count($visualOrder) >= $total) {
                break;
            }
        }

        $row++;
    }

    return $visualOrder;
}


function convertVisualOrderToColumnDomOrder($items, $columns) {
    $total = count($items);
    $rows = ceil($total / $columns);

    $result = [];

    for ($column = 0; $column < $columns; $column++) {
        for ($row = 0; $row < $rows; $row++) {
            $index = ($row * $columns) + $column;

            if (isset($items[$index])) {
                $result[] = $items[$index];
            }
        }
    }

    return $result;
}


function indentBlocks($blocks) {
    $indentedBlocks = array_map(function($block) {
        $lines = explode("\n", $block);

        $lines = array_map(function($line) {
            return '    ' . rtrim($line);
        }, $lines);

        return implode("\n", $lines);
    }, $blocks);

    return implode("\n\n", $indentedBlocks);
}