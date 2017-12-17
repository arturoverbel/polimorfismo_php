<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 17/12/2017
 * Time: 1:34 PM
 */

class Triangulo extends Figura_equilatero{

    public function perimetro(){
        return "Triángulo, perímetro: " . ( 3*$this->lado );
    }

    public function area(){
        return "Triángulo, área: " . ( (sqrt(3)/4) * pow($this->lado,2) );
    }

}