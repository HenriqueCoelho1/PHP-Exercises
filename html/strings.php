<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $phrase1 = 'a phrase with no uppercase ';
    $phrase2 = 'another phrase with no uppercase in any letter';
    $combination = $phrase1;
    $combination .= $phrase2;
    echo "The full $combination <br />";
?>
    <hr />

<p>Uppercase first: <?php echo ucfirst($phrase1); ?> <br /></p>
<p>Uppercase all words: <?php echo ucwords($phrase2); ?> <br /></p>
<p>Lowercase: <?php echo strtolower($combination); ?> <br /></p>
<p>Uppercase: <?php echo strtoupper($combination); ?> <br /></p>
<hr />

<p>Repeat: <?php echo str_repeat($combination, 4); ?> <br /></p>
<p>Make substring to one point to another: <?php echo substr($combination, 5, 10); ?> <br /></p>
<p>Find position of any specific word: <?php echo strpos($combination, "with"); ?> <br /></p>
<p>Find character: <?php echo strchr($combination, "n"); ?> <br /></p>

<hr />
<p>Total length of string: <?php echo strlen($combination); ?> <br /></p>
<p>trim: <?php echo "A" . trim("B C D"). "E"; ?> <br /></p>
<p>Find a specific and show after: <?php echo strstr($combination, "with"); ?> <br /></p>
<p>Replace word with a new: <?php echo str_replace("another", "mad", $combination); ?> <br /></p>
<?php
    echo 'My name is HC <br />';
    $color = 'red';
    $shirt = 'Sleev-less';
    $combination = $color." ".$shirt;
    echo $combination;
    echo "$color is my favorite color <br />";
    echo '$color is my favorite color <br />';
    echo "{$color}is my favorite color <br />";
?>
<hr />
    
</body>
</html>