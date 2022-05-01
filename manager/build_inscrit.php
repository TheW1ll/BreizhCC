<?php



class build_inscrit{ 
    protected $_id, $_nom, $_prenom, $_mdp, $_mail, $_rue, $_ville;

    private $_PDO=null;

 
function __construct($id, $nom, $prenom, $mail, $mdp, $rue, $ville){
    $this->_id=$id;
    $this->_nom=$nom; 
    $this->_prenom=$prenom; 
    $this->_mail=$mail;
    $this->_mdp=$mdp; 
    $this->_rue=$rue; 
    $this->_ville=$ville; 
    $this->_PDO=null;
}

//Accesseur Id
function getId () {return  $this->_id; }

//Accesseur Nom
function getNom () {return  $this->_nom; }

//Accesseur Prenom
function getPrenom () {return  $this->_prenom; }

//Accesseur Mot de Passe
function getMdp () {return  $this->_mdp; }

//Accesseur Mail
function getMail () {return  $this->_mail; }

//Setteur Nom
function setId($id) {$this->_id=$id; }

//Setteur Nom
function setNom($nom) {$this->_nom=$nom; }

//Setteur Prenom
function setPrenom($prenom) { $this->_prenom=$prenom; }

//Setteur Mail
function setMail($mail) {$this->_mail=$mail; }

//Setteur Mot de Passe
function setMdp($mdp) {$this->_mdp=$mdp; }

// Fonction connexion 
public function getConnexion(){		
    require 'inc/db_config.php';
}

    
// fonction enregistrer
function enregister() {
    
    $this->getConnexion() ;  
$enregistrer=$this->_PDO->prepare('INSERT INTO clients (id, nom, prenom, mail, mdp, rue, ville) VALUES (:id, :prenom, :nom, :mail, :mdp, :rue, :ville)');
$enregistrer->bindvalue(':nom', $this->getNom());
$enregistrer->bindValue(':id', $this->_id);
$enregistrer->bindValue(':prenom', $this->_prenom);
$enregistrer->bindValue(':nom', $this->_nom);
$enregistrer->bindValue(':mail', $this->_mail);
$enregistrer->bindValue(':mdp', $this->_mdp);
$enregistrer->bindValue(':rue', $this->_rue);
$enregistrer->bindValue(':ville', $this->_ville);
$enregistrer->execute(); 

//$this->_id= $this->_PDO->lastInsertId(); 

// select * from compte where login='$login' and motdepasse='$mdp' limit 1
// select * from compte where login='$login' and motdepasse='\' or true!=\'' limit 1
}


function supprimer (){
    $this->getConnexion();
    $supprimer=$this->_PDO->prepare("DELETE FROM clients where nom='".$this->getNom()."'");
    echo 'Attention ça va chauffer'.$this->getNom();
    $supprimer->execute();
}

function update (){
    $this->getConnexion();
    $update=$this->_PDO->prepare
    ("UPDATE clients set  nom=:nom 
    where id=:id");
    echo $this->getID();
    $update->bindvalue(':id', $this->getID()); 
    $update->bindvalue(':nom', $this->getNom());
    $update->execute();
}



}

$client=new build_inscrit('0', 'testeur','Anonym', 'ta@testeur.com','1234', '', '');
$client->enregister();
echo $client->getNom().'<br>';
//$client=new build_inscit('0', 'der','homm','1234','ta@testeur.com','0');
//$client->update();
//$client->supprimer();



include("inc/bottom.php");

?>