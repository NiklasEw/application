<?php
defined('BASEPATH') OR exit();
class Testcontroller extends CI_Controller {
    public function index(){
        echo "Hello Wrld!";
    }
    public function day($day){
        echo $day[0] . $day[1];
    }
    public function add($int_1, $int_2){
        echo $int_1+$int_2;
    }

}

/*
Controller sind Klassen, die über die im Browser eingegebene URL aufgerufen werden können.
Sie können wie andere Klassen auch Funktionen enthalten, welche ebenfalls über die URL aufgerufen werden können und Parameter übergeben bekommen können.
Die Parameter werden von den Funktionensbezeichnungen durch Querstriche getrennt.

*/