<?php

class Calculadora {
    public $total;


    public function add($n){
        $this->total+=$n;
    }
    public function sub($n){
        $this->total-=$n;
    }
    public function mult($n){
        $this->total*=$n;
    }
    public function divide($n){
        $this->total/=$n;
    }
    public function clear(){
        $this->total="";
    }
    public function total(){
        return $this->total;
    }
    


}