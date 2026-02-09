<?php

if (isset($_GET['file'])) {

    $file = basename($_GET['file']); // security
    $path = "payment_screenshots/" . $file;

    if (file_exists($path)) {
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . basename($path) . "\"");
        header("Content-Length: " . filesize($path));
        readfile($path);
        exit;
    } else {
        echo "File not found ❌";
    }
}
