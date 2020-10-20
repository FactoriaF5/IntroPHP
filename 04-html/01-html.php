<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP-Intro</title>
</head>
<body class="container">
    <h1>Intro PHP</h1>
    <hr>
    <section>
        <h3>Variable</h3>
        <?php
        $saludo = "Hello World";
        echo $saludo;
        ?>
    </section>
    <hr>
    <?php require_once("simpleArray.php");?>

    <hr>
    <section>
        <h3>Key-Value Arrays</h3>
         <div class="row">
        <?php
        $card = [
            "text" => "Some quick example text to build on the card title and make up the bulk of the cards content.",
            "image" => "https://ctl.s6img.com/society6/img/adgMtuCCB4Q3p5TcRpPI-pQoHfo/w_700/prints/~artwork/s6-0051/a/21951570_1688689/~~/abstract-music-u68-prints.jpg"
        ];
            for ($i=0; $i<4; $i++) {
                echo <<<TAG

                <div class="col-lg-3 col-md-6">
                    <article class='card' >
                        <img class='card-img-top' src=${card["image"]}>
                        <main class='card-body'>
                            <p class='card-text'>${card['text']}</p>
                        </main>
                    </article>
                </div>
                
TAG;
            }
        ?>
        </div>
    </section>
</body>
</html>
