<?php

class form {

    private $data;
    public $surround ='p';

    public function __construct($data = array()){
    $this->data = $data;
     }

    private function surround($html){
        return"<{$this->surround}>$html</{$this->surround}>";
    }
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    
    }

    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '"value="' . $this->getValue($name) . '">'
        );

   }

    public function submit(){
         return $this->surround( '<button type="submit">Envoyer</button>');

   }

   public function select(){
        return $this->surround( '<select name="Choix">
                                                  <option value="choix1">option1</option>
                                                 <option value="choix2">option2</option>
                                                 <option value="choix3">option3</option></select>');
   }

   public function textarea($value,$name){
       return ('<textarea type="text" name="' .$name . '"value="' . $this->getValue($value) .'">'
       );
   }

   }

//   class html{
//       public function css()
//       {
//           return ('<link rel="stylesheet" href="style.css">');
//       }
//
//
//   }
