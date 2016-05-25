<?php
class Contact {
	protected $id;
	protected $nom;
	protected $prenom;
  protected $email;
  
  function __construct($id,$nom,$prenom,$email){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
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
    return "id = ".$this->id." nom = ".$this->nom." prenom = ".$this->prenom." email = ".$this->email;
  }
  
}

$moi = new Contact(1234,"Nguyen","Alex","alex@gmail.com");
echo $moi;
$moi->setPrenom("Maxime");
$moi->setNom("Faivre");
echo "<br>";
echo $moi;
?>