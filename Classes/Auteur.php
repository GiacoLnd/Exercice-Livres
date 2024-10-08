<?php

class Auteur{
    private string $nom;
    private string $prenom;
    private array $livres;
    

    public function  __construct(string $nom, string $prenom){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> livres = [];
    }


    public function getNom() : string
    {
        return $this->nom;
    }


    public function setNom(string $nom) : string
    {
        $this->nom = $nom;
    }


    public function getPrenom() : string
    {
        return $this->prenom;
    }


    public function setPrenom(string $prénom) : string
    {
        $this->prénom = $prenom;
    }


    public function getLivres() : array
    {
        return $this->livres;
    }

   
    public function setLivres(array $livres) : array
    {
        $this->livres = $livre;
    }

    public function integrerLivre(Livre $livre){
        $this -> livres[] = $livre;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom."<br>";
    }

    public function afficherBibliographie(){
        $result = "<h2>Livres de $this</h2>";
        foreach ($this->livres as $livre){
            $result .= $livre; 
        }
        return $result;
    }

}





?>