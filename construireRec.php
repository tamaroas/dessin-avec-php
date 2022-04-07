<?php 
//require_once "Cercle.php";

$long= $_POST['long'];
$larg= $_POST['larg'];
$couleur= $_POST['color'];

header("content-type:image/png");
$x=1000;
$y=800;
$img = imagecreatetruecolor($x,$y);
$bleu=imagecolorallocate($img, 0, 0, 200);
$rouge=imagecolorallocate($img, 255, 0, 42);
$verte=imagecolorallocate($img, 0, 255, 42);
$blanc=imagecolorallocate($img, 255, 255, 255);
$jaune=imagecolorallocate($img, 255, 255, 0);

if ($couleur=="bleu") {
	imagefilledrectangle($img,25,25,37.7953*$long-25,37.7953*$larg-25,$bleu);
    imagepng($img);
}
elseif ($couleur=="white") {
    imagefilledrectangle($img,25,25,37.7953*$long-25,37.7953*$larg-25,$blanc);
    imagepng($img);
}
elseif ($couleur=="green") {
	imagefilledrectangle($img,25,25,37.7953*$long-25,37.7953*$larg-25,$verte);
    imagepng($img);
}
elseif ($couleur=="yellow") {
	imagefilledrectangle($img,25,25,37.7953*$long-25,37.7953*$larg-25,$jaune);
    imagepng($img);
}
elseif ($couleur=="red") {
	imagefilledrectangle($img,25,25,37.7953*$long-25,37.7953*$larg-25,$rouge);
    imagepng($img);
}
//imagerectangle($img,25,25,$x/2-25,$y/2-25,$bleu);

?>