<?php 
Class figure_geo {
    public $Nom;
    public $couleur1;
    public $couleur2;
    public $image;
    public $x,$y,$z,$t;
    public function __construct($Nom,$couleur1){
        $this->Nom = $Nom;
        $this->couleur1 = $couleur1;
        echo "Je suis la classe mere {$this->Nom} et {$this->couleur1}";
    }
}

class Circle extends figure_geo {
    public $linecolor;
    
    public function circle($Nom,$couleur1,$couleur2,$x,$y,$z,$t){
        $this->Nom = $Nom;
        $this->couleur1 = $couleur1;
        $this->couleur2 = $couleur2;
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $this->t = $t;
        $this->image = ImageCreateTrueColor($couleur1,$couleur2);
        $this->linecolor = imagecolorallocate($this->image,255,255,255);
        imageellipse($this->image,$this->x,$this->y,$this->z,$this->t,$this->linecolor);
        //header('Content-type:image/png');
        imagepng($this->image,"circle-filled.png");
        imagedestroy($this->image);
    }
}

class Rectangle extends figure_geo {
    public $linecolor;
    
    public function rectangle($Nom,$couleur1,$couleur2,$x,$y,$z,$t){
        $this->Nom = $Nom;
        $this->couleur1 = $couleur1;
        $this->couleur2 = $couleur2;
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $this->t = $t;
        $this->image = ImageCreateTrueColor($couleur1,$couleur2);
        $this->linecolor = imagecolorallocate($this->image,255,255,255);
        imagerectangle($this->image,$this->x,$this->y,$this->z,$this->t,$this->linecolor);
        //header('Content-type: image/png');
        imagepng($this->image,"rectangle-filled.png");
        imagedestroy($this->image);
    }
}

$cirlce = new Circle("Circle","255");
$cirlce->circle("Circle",255,255,128,128,200,200);
$rect = new Rectangle("Rectangle","10");
$rect->rectangle("Rect",400,400,100,100,300,300);
?> 