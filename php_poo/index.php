<?php
// declare(strict_types=1);

// require __DIR__ . "/vendor/autoload.php";
// //Ne plus afficher d 'erreur
// error_reporting();

// //Afficher toutes les erreurs
// error_reporting(-1);

// use app\Programmer;

// // use app\Rectangle;

// // die("une erreur est survenue");
// //throw new Exception("<strong>Erreur</strong>: une erreur est survenue");

// function inverser(int $num)
// {
//   if ($num === 0) {
//     throw new Exception("Division par le chiffre 0");
//   }
//   return 1 / $num;
// }

// //try ... catch....finally On ne peut avoir de try sans catch mais on peut en avoir sans finally

// try {
//   echo inverser(5) . "<br>";
//   echo inverser(10) . "<br>";
//   echo inverser(15) . "<br>";
//   echo inverser(0) . "<br>";
// } catch (\Exception $e) {
//   echo "Impossible de diviser un nombre par 0 🙄";
// }finally{
//   echo"<br> Finally";
// }

// echo "<br>";
// echo "<br>";
// // var_dump(new User());


// // $u1 = new Programmers("Rojas", "Doe", 24, ["JS", "CSS","JAVA", "WORDPRESS","LARAVEL"]);
// // echo "<pre>";
// // // var_dump($u1);
// // print_r($u1);
// // echo "</pre>";

// // // echo User::PIEDS;

// // class Maclass{
// //     private static $instance = null;
// //     private $pdo;
// //     private $id;
// //     private function __construct(){
// //        self::$id = rand(1000, 9999);
// //         //Initialisation de la connexion à la BD
// //         $this->pdo = new PDO("mysql:host=localhost;dbname=album_app_mvc;", "root", "");
// //     }
// //     public static function getInstance(){
// //         if (self::$instance === null) {
// //             self::$instance = new self();//c'est comme si on écrivait new ConnectionDB
// //         }
// //         echo "ConnexionDB is " . self::$id;
// //         return self::$instance;
// //     }

// // }
// // $rect1 = new Rectangle();
// // $rect1->present();
// // // $db = new ConnexionDB::getInstance();

// // // :::::::::::::::::Les traits en php::::::::::::::::


// // trait Montrait{
// //     public function methodA(){}
// //     public function methodB(){}
// // }

// // class SousClasseC{
// //     //Qd use est dans une class il s'agit d'un trait mais hors de la class il s'agit d'un namespace et autre
// //     use Montrait;
// // }



// $u =  Programmer();
// $u->code();
// $u->Work();
// $u->present();

// echo "<br>";

function calcul(&$var)
{
  $var++;
}

$a = 5;
$b = & $a;
calcul($a);
unset($a);
echo "b vaut maintenant $b";

$user = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => 50
];

var_dump($user);

function add($num1, $num2){
    return (string) $num1 + (string) $num2;
}
echo add(50, 23);
echo add("abc", "def");
?>