<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP AJAX DISCHI</title>
</head>
<body>

    <div class="bg-fluid">
        <div class="container">
            <div class="row">

                <?php

                    require_once __DIR__ . "/database/dischiDB.php";

                    foreach($dischiDB as $disco) { ?>

                        <div class="custom-col">

                            <div class="album-content">

                                <img src="<?php echo $disco['poster'] ?>" alt="Copertina <?php echo $disco['title'] ?>">
                                <h4><?php echo $disco['title'] ?></h4>
                                <div class="info"><?php echo $disco['author'] ?></div>
                                <div class="info"><?php echo $disco['year'] ?></div>

                            </div>
                        </div>

                    <?php }

                ?>
            </div>
        </div>  
    </div>    
</body>
</html>