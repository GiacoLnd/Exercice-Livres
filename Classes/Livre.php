<?php

class Livre{
    private string $titre;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;
    private Auteur $auteur;

    public  function __construct($titre, $anneeParution, $nbPages, $prix, Auteur $auteur){
        $this-> titre = $titre;
        $this-> anneeParution = $anneeParution;
        $this-> nbPages = $nbPages;
        $this-> prix = $prix;
        $this-> auteur = $auteur;
        $this -> auteur -> integrerLivre($this);
        
    }


    public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function getNbPages()
    {
        return $this->nbPages;
    }


    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;
    }


    public function getAnneeParution()
    {
        return $this->anneeParution;
    }


    public function setAnneeParution($anneeParution)
    {
        $this->anneeParution = $anneeParution;
    }


    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function __toString() {
        return $this -> titre." (".$this-> anneeParution.") : ".$this -> nbPages." pages / ".$this->prix."€ <br>";
    }
}

?>