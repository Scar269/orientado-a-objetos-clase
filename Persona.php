<?php
class Persona {

    public function ojos($color, $nOjos){
        echo "la persona tiene $nOjos ojo(s)";
        echo "<br>la persona tiene ojos color $color";
    }

}

$p = new Persona();