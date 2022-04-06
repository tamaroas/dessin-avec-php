<?php 
 require_once "Figure.php";

 /**
  * 
  */
 class Cercle extends Figure
 {
 	private $rayon;
 	function __construct($nom, $couleur, $rayon)
 	{
 		$this->nom=$nom;
 		$this->couleur= $couleur;
 		$this->rayon= $rayon;
 	}

 	public function affichage(){ echo "Figure:".$this->nom."de couleur".$this->couleur."de rayon".$this->rayon."";}
 }
 $c= new Cercle("cercle",'blue',5);
 $c->affichage();
?>