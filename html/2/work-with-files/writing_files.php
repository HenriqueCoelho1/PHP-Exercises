<?php
$file = "example.txt";
if($handle = fopen($file, 'w')){
    fwrite($handle, 'I love PHP and this really good stuff, Hello World');
    fclose($handle);
}else{
    echo "We are not opening it";

}

?>