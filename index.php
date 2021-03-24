<?php

ini_set('display_errors', 'on');

spl_autoload_register(function ($className) {
    require 'classes/' . $className . '.php';
});

var_dump($_POST);

if (!empty($_POST) && $_POST['shape']=='Rectangle' && isset($_POST['width'])){
    $rectangle = new Rectangle($_POST["x"], $_POST["y"], $_POST["color"], $_POST["opacity"], $_POST["width"], $_POST["height"]);
}

if (!empty($_POST) && $_POST['shape']=='Cercle' && isset($_POST['rx'])){
    $circle = new Circle($_POST["x"], $_POST["y"], $_POST["color"], $_POST["opacity"], $_POST["rx"], $_POST["ry"],);
}

if (!empty($_POST) && $_POST['shape']=='Triangle' && isset($_POST['t1'])){
    $triangle = new Triangle ($_POST["x"], $_POST["y"], $_POST["color"], $_POST["opacity"], $_POST["t1"], $_POST["t2"]);
}


require 'index.phtml';