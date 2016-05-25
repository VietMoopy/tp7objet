<?php
class Personne {
	protected $id;
	protected $nom;
	protected $prenom;
  
  function __construct($id,$nom,$prenom){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
  }
  
  public function getNom(){
    return $this->nom;
  }
  
  public function getPrenom(){
    return $this->prenom;
  }
  
  public function setNom($nom){
    $this->nom = $nom;
  }
  
  public function setPrenom($prenom){
    $this->prenom = $prenom;
  }
  
  function __toString(){
    return "id = ".$this->id." nom = ".$this->nom." prenom = ".$this->prenom;
  }
  
}

$personnage = new Personne(1234,"Nguyen","Alex");
echo $personnage->__toString();
?>