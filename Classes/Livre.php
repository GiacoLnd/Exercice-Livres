<?php

class Livre{
    private string $titre;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;
    private Auteur $auteur;

    public  function __construct(string $titre, int $anneeParution, int $nbPages, float $prix, Auteur $auteur){
        $this-> titre = $titre;
        $this-> anneeParution = $anneeParution;
        $this-> nbPages = $nbPages;
        $this-> prix = $prix;
        $this-> auteur = $auteur;
        $this -> auteur -> integrerLivre($this);
        
    }


    public function getTitre() : string
    {
        return $this->titre;
    }


    public function setTitre(string $titre) : string
    {
        $this->titre = $titre;
    }


    public function getNbPages() : int 
    {
        return $this->nbPages;
    }


    public function setNbPages(int $nbPages) : int
    {
        $this->nbPages = $nbPages;
    }


    public function getAnneeParution() : int
    {
        return $this->anneeParution;
    }


    public function setAnneeParution(int $anneeParution) : int
    {
        $this->anneeParution = $anneeParution;
    }


    public function getPrix() : float
    {
        return $this->prix;
    }


    public function setPrix(float $prix) : float
    {
        $this->prix = $prix;
    }


    public function getAuteur() : string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur) : string
    {
        $this->auteur = $auteur;
    }

    public function __toString() {
        return $this -> titre." (".$this-> anneeParution.") : ".$this -> nbPages." pages / ".$this->prix."€ <br>";
    }
}

?>