<?php

header('Content-Type: application/json');

$nzy = $_GET['project'] ?? '';

$folder = $_SERVER['DOCUMENT_ROOT'] . "/assets/projects/$nzy/vignette/";
$url = "/assets/projects/$nzy/vignette/";

$files = [];

if (is_dir($folder)) {
    foreach (scandir($folder) as $file) {
        if (is_file($folder . $file)) {
            $files[] = $url . $file;
        }
    }
}

echo json_encode($files);