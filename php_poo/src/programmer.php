<?php
namespace app;
class Programmer {
    use Personne, Employee;
    public function code(){
        echo "Je suis une programmer";
    }
}

