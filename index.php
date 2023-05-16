<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP-OOP-1</title>
</head>
<body>
    <?php
    include __DIR__ . '/Models/Movie.php';
    include __DIR__ . '/partials/settings.php';
    ?>

<section class="container">
    <div class="row">
        <?php foreach ($movies as $movie) {?>
            <div class="col-sm-12 col-md-4 col-lg-3 pt-2 pb-2">
                <div class="card">
                    <?php echo "<img src='$movie->image' alt=''>" ?>
                    <div class="p-2">
                        <?php echo "<h3>" . $movie->title . "</h3>" ?>
                        <?php echo "<p>" . $movie->nationality . "</p>" ?>
                        <?php echo "<p>" . $movie->date . "</p>" ?>
                        <?php echo "<p>" . $movie->vote . "</p>" ?>
                    </div>
                </div>
            </div>
        <?php } ?>   
    </div>
   
</section>

    
</body>
</html>