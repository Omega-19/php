<?php
namespace app;

abstract class Shape{
    //Force les sous-classes à définir la méthode area()
    
    public function present(){
        echo "Je suis une forme";
    }
}

?>