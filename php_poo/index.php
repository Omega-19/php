<?php
declare(strict_types=1);
use app\Programmer;
// use app\Rectangle;

require __DIR__ . "/vendor/autoload.php";

// var_dump(new User());


// $u1 = new Programmers("Rojas", "Doe", 24, ["JS", "CSS","JAVA", "WORDPRESS","LARAVEL"]);
// echo "<pre>";
// // var_dump($u1);
// print_r($u1);
// echo "</pre>";

// // echo User::PIEDS;

// class Maclass{
//     private static $instance = null;
//     private $pdo;
//     private $id;
//     private function __construct(){
//        self::$id = rand(1000, 9999);
//         //Initialisation de la connexion à la BD
//         $this->pdo = new PDO("mysql:host=localhost;dbname=album_app_mvc;", "root", "");
//     }
//     public static function getInstance(){
//         if (self::$instance === null) {
//             self::$instance = new self();//c'est comme si on écrivait new ConnectionDB
//         }
//         echo "ConnexionDB is " . self::$id;
//         return self::$instance;
//     }

// }
// $rect1 = new Rectangle();
// $rect1->present();
// // $db = new ConnexionDB::getInstance();

// // :::::::::::::::::Les traits en php::::::::::::::::


// trait Montrait{
//     public function methodA(){}
//     public function methodB(){}
// }

// class SousClasseC{
//     //Qd use est dans une class il s'agit d'un trait mais hors de la class il s'agit d'un namespace et autre
//     use Montrait;
// }



$u = new Programmer();
$u->code();
$u->Work();
$u->present();

?>