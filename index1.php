<?php

// Get real path for our folder
$rootPath = realpath('/var/www/html/hitabs.com/');

// Initialize archive object
$zip = new ZipArchive();
$date = time();
$archive = "backup-$date.zip";
$zip->open($archive, ZipArchive::CREATE | ZipArchive::OVERWRITE);


$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $dir = dirname($filePath);
        //$relativePath = substr($filePath, strlen($rootPath) + 1);
        if(strpos($filePath,"backup-") === false && strpos($filePath,".zip") === false && strpos($filePath,"old") === false){
            $relativePath = substr($filePath, strlen($rootPath) + 1);
            $zip->addFile($filePath, $relativePath);
        }
        // Add current file to archive
        //$zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();
