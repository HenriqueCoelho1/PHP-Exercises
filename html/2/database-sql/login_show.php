<?php  include "db.php"; ?>
<?php include "functions.php";?>




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
    <section class="hero has-background-white-ter is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="is-5-tablet is-4-desktop is-3-widescreen">
                        <pre>
                            <?php showAllInformation(); ?>
                        </pre>
                    </div>
                </div>
            </div>
        
        </div>

    </section>

    
</body>
</html>