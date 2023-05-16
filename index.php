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
    $movies = array($movie1, $movie2, $movie3, $movie4);
    ?>

<section class="container">
    <div class="row">
        <?php foreach ($movies as $movie) {?>
            <div class="col-sm-12 col-md-4 col-lg-3 pt-2 pb-2">
                <div class="card p-2">
                    <?php echo "<h2>" . $movie->title . "</h2>" ?>
                    <?php echo "<p>" . $movie->description . "</p>" ?>
                    <?php echo "<p>" . $movie->state . "</p>" ?>
                </div>
            </div>
        <?php } ?>   
    </div>
</section>

    
</body>
</html>