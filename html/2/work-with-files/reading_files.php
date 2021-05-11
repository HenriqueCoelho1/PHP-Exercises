<?php
$file = "example.txt";
if($handle = fopen($file, 'r')){
    echo $content = fread($handle, filesize($file)); //Each bite equals a character 
    fclose($handle);
}else{
    echo "We are not opening it";

}

?>