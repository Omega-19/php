## PHP-POO

-Classes et objets 
-Espaces de noms
-Standards de codage & PSR4
-Constantes de classes
-Propriétés et Méthodes Statiques
-Interfaces & Polymorphisme
-Méthodes Magiques
-Traits
-Classes Anonymes
-Stockage de Variables & Comparaison d'objets
-DocBlock PHP
-Clonage d'objets
-Sérialisation des objets
-Gestion des Erreurs & try...catch
-Entêtes HTTP

## self
C'est un mot clé qui est suceptible de remplacer Users dans la classe.
Autrement dit self représente la classe

## L'autoloading
C'est le fait de laisser une classe s'autocharger de lui même

## Espace de noms
Un espace de nom est une technique de gestion de portée et d'isolation des noms de variables, de fonctions et de classes. On l'utilise en programmation pour éviter les conflits des noms et organiser de manière logique les éléments d'un programme.

## Exercice

Créez deux classes ` Calculator ` dans deux fichiers différents: `math_operations.php` et  `string_operations.php`.
Créez une méthode `add` dans la classe du fichier `math_operations.php`. 
Créez une méthode `concatenate` dans la classe du fichier ` string_operations.php`. Elle joint deux chaînes de caractères.
Dans votre fichier `index.php` créez 2 nombres, 2 strings que vous additionnez et concatenez respectivement avec les classes appropriés.

## Opération de Résolution de Porté (::)

Le Scope Resolution Operator aussi connu sous le nom (Paamayim Nekudotayim) ou en terme simple les 2 points, est un opérateur permettant d'accéder aux constantes, aux propriétés et méthodes statiques d'une classe.

## Propriétés et Méthodes Statiques

En php, une propriété ou une méthode statique est associée à la classe elle-même plutôt qu'à une instance particulière de cette classe. Cela signifie que vous pouvez accéder à des propriétés et des méthodes statiques sans créer une instance de la classe. Les propriétés et méthodes statiques sont déclarées en utilisant  le mot clé `static`.

````php

class Maclass{
    public static int $proprieteStatique = 0;
    public static function increment(){
        self::$proprieteStatique;
    }
}
echo Maclass::$proprieteStatique;

````
## Les traits en php

- Créez une class `Personne`; elle a une méthode `present` qui affiche "On m'appelle ... " 
- Créez une class `Employee`;elle a une méthode `Work` qui affiche "Je travaille" 
- Créez une class `Programmer`; elle a une méthode `code` qui affiche "Je suis une programmer";
 
Faites en sorte que les 3 méthodes present(), work(), et code(), soient accessibles depuis une instance de la classe Programmer;
