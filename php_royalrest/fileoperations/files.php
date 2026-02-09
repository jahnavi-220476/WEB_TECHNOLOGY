<!-- reading the entire file -->
<!-- <?php  
$file = fopen("file.txt","r");
$content = fread($file,filesize("file.txt"));  //fread must contain two arguments::one is file variable and the other is no of bytes 

echo $content;
?>  -->


<!-- reading file line by line -->
<!-- <?php
$file = fopen("file.txt","r");

if ($file) {
    while (($line = fgets($file))!== false){
        echo $line ;
    }
    fclose($file);
}
?>  -->

<!-- writes to a file -->

<!-- <?php
$file = fopen("sample.txt", "w");
$fwrite="hello world\n";
echo $fwrite;
fwrite($file, $fwrite);
fclose($file);


?> -->

<!-- <?php
$content = file_get_contents("sample.txt");
echo $content;
?> -->

<!-- <?php
$file=file_put_contents("file.txt", "Written using file_put_contents()");
echo $file;

?> -->

<!-- <?php
$lines = file("super.txt");
foreach ($lines as $line) {
    echo $line . "<br>";
}
?> -->

<!-- <?php
echo filesize("sample.txt") . " bytes";
?> -->

<!-- <?php
 echo "last accessed: ";
echo date("d-m-Y H:i:s", fileatime("sample.txt"));
?>
 -->

 <!-- <?php
 echo "last modified: ";
echo date("d-m-Y H:i:s", filemtime("sample.txt"));
?> -->


<!-- <?php
$files = scandir(".");
print_r($files);
?> -->


<?php
$dir = opendir(".");
while ($file = readdir($dir)) {
    echo $file . "<br>";
}
closedir($dir);
?>

