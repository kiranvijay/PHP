<?php
$dir = "C:/Users/kiranvijaykumar/Desktop/images";
echo  $dir , "<br>hey";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";

$files= fopen("test.txt","w");
fwrite($files,$file);
fclose($files);
    }
    closedir($dh);
  }
}
?>