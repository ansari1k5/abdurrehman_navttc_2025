<?php
$movie = [
['title' => 'Attack on titain','About' => 'Eren Jaeger, along with his sister and friends, joins the military in order to destroy the Titans, gigantic humanoids who live off human flesh.', 'Dor' => 'April 7, 2013', 'IMDB' => '9.1'],

['title' => 'Batman','About' => 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.', 'Dor' => '12/13/2026', 'IMDB' => '7.8'],

['title' => 'All OF are dead', 'About' => 'Trapped students must escape their high school which has become ground zero for a zombie virus outbreak.','Dor' => 'January 28, 2022', 'IMDB' => '7.6'],

['title' => 'All OF are dead', 'About' => '','Dor' => '12/13/2026', 'IMDB' => '8.9'],
];

    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movie as $movie) :  ?>
            <div class="col-sm-4 border border-1 m-2">
                <div class="card-title">
                    <h3><?=  $movie['title'] ?></h3>
                </div>
                <div class="card-body">
                <span>About</span>
                <p><?=  $movie['About'] ?></p>
                    <span>Date</span>
                    <p><?=  $movie['Dor'] ?></p>
                    <span>IMDB Rating</span>

                    <p><?=  $movie['IMDB'] ?></p>

                </div>
            </div>
            <?php endforeach;  ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>