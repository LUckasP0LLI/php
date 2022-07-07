<?php
class Verificar{
     public $a;

     public function verifica($number){
          $this->a = $number;
           if($this->a%2 == 0){
               echo "<h2>Par</h2>";
          }
          else{
               echo "<h2>Impar</h2>";
          }
     }
}

$obj = new Verificar;
$obj->verifica(15);


?>