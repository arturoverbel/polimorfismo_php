<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 17/12/2017
 * Time: 1:34 PM
 */

class Cuadrado extends Figura_equilatero{

    public function perimetro(){
        return "Cuadrado, perímetro: " . (4*$this->lado);
    }

    public function area(){
        return "Cuadrado, área: " . ( pow($this->lado,2) );
    }

}