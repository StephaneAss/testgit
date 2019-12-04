<?php 
/**
 * 
 */
class Stephane extends 
{
	$nom='';
	function __construct($nom)
	{
		$this->nom=$nom;
	}

	public function presentation()
	{
		return "Salut à tous. Je suis $this->nom. Un Homme humble";
	}

	public function perimetreCarree($cote)
	{
		return $cote*4;
	}
}
 ?>