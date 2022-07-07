<?php
class Media{
     public $nota1;
     public $nota2;
     public $media;
 
          public function calculaMedia(){
               if(isset($_POST['send'])){
               $this->nota1 = $_POST['Nota1'];
               $this->nota2 = $_POST['Nota2'];
               $this->media = ($this->nota1 + $this->nota2)/2;
               echo "<h1>A sua media foi:  $this->media</h1>";
          }
          }
          }
?>