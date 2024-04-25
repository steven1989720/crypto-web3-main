<?php
$directory = 'C:/xampp/htdocs/inc/';
$files = scandir($directory);

if ($files !== false) {
    echo "Directory contents:<br>";
    foreach ($files as $file) {
        echo $file . "<br>";
    }
} else {
    echo "Unable to read directory.";
}
?>
