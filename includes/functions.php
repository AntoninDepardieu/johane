<?php
function asset($path) {
    $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/' . $path;
    // DEBUG
    // echo "<!-- DEBUG: cherche $fullPath -->";
    if (file_exists($fullPath)) {
        return $path . '?v=' . filemtime($fullPath);
    }

    return $path;
}
