<?php
class Equacao2Grau{
  private $a;
  private $b;
  private $c;
  private $delta;
  private $x1;
  private $x2;

// Getters
  public function getA(){
    return $this->a;
  }
  public function getB(){
    return $this->b;
  }
  public function getC(){
    return $this->c;
  }
  public function getDelta(){
    return $this->delta;
  }
  public function getx1(){
    return $this->x1;
  }
  public function getx2(){
    return $this->x2;
  }

// Setters
  public function setA($a){
    $this->a = $a;
  }
  public function setB($b){
    $this->b = $b;
  }
  public function setC($c){
    $this->c = $c;
  }
  public function setX1($x1){
    $this->x1 = $x1;
  }
  public function setX2($x2){
    $this->x2 = $x2;
  }

  private function calculaDelta(){
    $this->delta = ($b*$b)-(4*$a*$c);
  }
  public function calcular(){
    $delta = $this->getDelta();
    $a = $this->getA();
    $b = $this->getB();
    $c = $this->getC();
    if($delta > 0){
      $x1= ((($b*-1)+$delta2)/2*$a);
      $x2= ((($b*-1)-$delta2)/2*$a);
      $this->setX1($x1);
      $this->setX2($x2);

      return true;
    } else{
      return false;
    }
  }

  public function __construct ( $a, $b, $c ) {
    $this->setA($a);
    $this->setB($b);
    $this->setC($c);
  }
}
