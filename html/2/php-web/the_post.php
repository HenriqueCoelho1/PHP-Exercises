<?php
echo $_POST["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <form action="the_post.php" method="post">
        <div class="field">
            <input type="text" class="label" name="name" />
        </div>
        <div class="field">
            <button class="button is-primary" type="submit" value="">Submit</button>
        </div>

    </form>
    
</body>
</html>