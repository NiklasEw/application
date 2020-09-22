<?php
defined('BASEPATH') OR exit();
class catalog extends CI_Controller{
    public function product_lookup($name){
        echo $name;
    }
    public function product_lookup_by_id($id){
        switch($id){
            case 0:
                echo "Tisch";
            break;
            case 1: 
                echo "Stuhl";
            break;
            default:
                echo "Unbekanntes Produkt";
        }
    }
}