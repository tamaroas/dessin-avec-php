<?php 
//require_once "Cercle.php";

$rayon= $_POST['r'];
$couleur= $_POST['color'];

header("content-type:image/png");
$x=400;
$y=300;
$img = imagecreatetruecolor($x,$y);
$bleu=imagecolorallocate($img, 0, 0, 200);
$rouge=imagecolorallocate($img, 255, 0, 42);
$verte=imagecolorallocate($img, 0, 255, 42);
$blanc=imagecolorallocate($img, 255, 255, 255);
$jaune=imagecolorallocate($img, 255, 255, 0);


if ($couleur=="bleu") {
	imagefilledellipse($img, 2*$x/4, $y/2, $rayon/2-25, $rayon/2-25, $bleu);
    imagepng($img);
}
elseif ($couleur=="white") {
	imagefilledellipse($img, 2*$x/4, $y/2, $rayon/2-25, $rayon/2-25, $blanc);
    imagepng($img);
}
elseif ($couleur=="green") {
	imagefilledellipse($img, 2*$x/4, $y/2, $rayon/2-25, $rayon/2-25, $verte);
    imagepng($img);
}
elseif ($couleur=="yellow") {
	imagefilledellipse($img, 2*$x/4, $y/2, $rayon/2-25, $rayon/2-25, $jaune);
    imagepng($img);
}
elseif ($couleur=="red") {
	imagefilledellipse($img, 2*$x/4, $y/2, $rayon/2-25, $rayon/2-25, $rouge);
    imagepng($img);
}

?>