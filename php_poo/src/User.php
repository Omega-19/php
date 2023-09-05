<?php
namespace app;

class User{
    ////Méthode sans la promotion du constructur
    // public string $nom;
    // public string $prenom;
    // public int $age;

    // public function __construct(string $nom, string $prenom, int $age){
    //     echo "constructeur user <br>";
    //     $this->nom=$nom;
    //     $this->prenom=$prenom;
    //     $this->age=$age;
    //     echo "<br>";
    //     echo "fin constructeur user <br>";
    //     echo "<br>";
    // }

    //Méthode avec la promotion du constructeur

    public Const PIEDS = 2;
    public function __construct(
         public string $nom,
         public string $prenom,
         public int $age
    ){}
}

?>