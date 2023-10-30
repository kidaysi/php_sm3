<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <title>php_sm3</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php
    class Animal
    {
        public $weight, $color, $age;

        function info()
        {
            echo 'Weight:' . $this->weight . '<br>' .
'Color:' . $this->color . '<br>' .
'Age:' . $this->age;
}
}



class Lion extends Animal
{
public $arial;
function info()
{
echo  '<span class="color">Родом из: </span>' . $this->arial . '<br><br>' .
'<span class="color">Вес: </span>' . $this->weight . '<br><br>' .
'<span class="color">Окрас: </span>' . $this->color . '<br><br>' .
'<span class="color">Возраст: </span>' . $this->age;
}
}


class Rabbit extends Animal
{
public $speed;
function info()
{
echo '<span class="color">Скорость: </span>' . $this->speed . '<br><br>' .
'<span class="color">Вес: </span>' . $this->weight . '<br><br>' .
'<span class="color">Окрас: </span>' . $this->color . '<br><br>' .
'<span class="color">Возраст: </span>' . $this->age;
}
}

class Wolf extends Animal
{
public $length;
function info()
{
echo '<span class="color">Рост: </span>' . $this->length . '<br><br>' .
'<span class="color">Вес: </span>' . $this->weight . '<br><br>' .
'<span class="color">Окрас: </span>' . $this->color . '<br><br>' .
'<span class="color">Возраст: </span>' . $this->age;
}
}


$lion = new Lion();
$lion->weight = '100';
$lion->color = 'песочный';
$lion->age = '12';
$lion->arial = 'Африканкидс';


$rabbit = new Rabbit();
$rabbit->weight = '9.5';
$rabbit->color = 'белый-белый';
$rabbit->age = '1.5';
$rabbit->speed = '25';


$wolf = new Wolf();
$wolf->weight = '45';
$wolf->color = 'серый';
$wolf->age = '8';
$wolf->length = '1.5';

?>


<section>
    <div class="container">
        <h2 class="title">Animals</h2>
        <div class="information">
            <div class="info_animal">
                <img src="assets/image/lion.jpg" alt="lion" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Lion
                    </h2>
                    <p class="text">
                        <?php
                        $lion->info();
                        ?>
                    </p>
                </div>

            </div>
            <div class="info_animal">
                <img src="assets/image/rabbit.jpg" alt="rabbit" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Rabbit
                    </h2>
                    <p class="text">
                        <?php
                        $rabbit->info();
                        ?>
                    </p>
                </div>

            </div>
            <div class="info_animal">
                <img src="assets/image/wolf.jpg" alt="wolf" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Wolf
                    </h2>
                    <p class="text">
                        <?php
                        $wolf->info();
                        ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


</body>

</html>