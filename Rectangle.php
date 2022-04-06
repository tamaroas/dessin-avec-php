<?php 
 
require_once "Figure.php";

class Rectangle extends Figure{
	private $long;
	private $larg;

	public function __construct($nom, $couleur, $longeur, $largeur){
		$this->nom=$nom;
		$this->couleur=$couleur;
		$this->long=$longeur;
		$this->larg=$largeur;
	}

	public function afichage(){
		echo "Figure de type:".$this->nom."de couleur".$this->couleur."de longeur".$this->long."et de largeur".$this->larg."";
	}

	
}

$r = new Rectangle("rectangle","red",18,13);
	$r->afichage();
?>