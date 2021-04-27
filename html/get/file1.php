<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File 1</title>
</head>
<body>
<?php $Name="Alex Morth"; ?>
<?php $Position = "Support Coordinator & Manager"; ?>
<a href="file2.php?Name=<?php echo $Name; ?>">Click</a>
<br />
<a href="file2.php?Name=<?php echo $Name; ?>&<?php echo $Position; ?>">Click</a>
<br />
<a href="file2.php?Name=<?php echo $Name; ?>&Position=<?php echo rawurlencode($Position); ?>">Click</a>
<!-- rawurlencode is more used in string that use &, ", >, < -->
</body>
</html>