<?php
$dir = opendir("./Espanol/");
while ($file = readdir($dir)) {
    if ($file != "." && $file != "..") {
        echo "<a href='$file'>$file</a><br>";
    }
}
closedir($dir);
?>