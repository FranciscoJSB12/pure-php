<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * @param string $name
 * @return void
 */

function loadView($name)
{
    $path = basePath("views/{$name}.view.php");

    checkFileBeforePrint($path, "View");
}

/**
 * @param string $name
 * @return void
 */

function loadPartial($name)
{
    $path = basePath("views/partials/{$name}.php");

    checkFileBeforePrint($path, "Partial");
}

/**
 * @param string $filePath
 * @param string $fileType
 * @return void
 */
function checkFileBeforePrint($filePath, $fileType)
{
    if (file_exists($filePath)) {
        require $filePath;
    } else {
        echo "{$fileType} not found";
    }
}
