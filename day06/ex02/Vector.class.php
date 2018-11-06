<?php
require_once 'Vertex.class.php';
class Vector{
    static $verbose = False;
    private $_x;
    private $_y;
    private $_z;
    private $_w = 0;

    public function __construct($array){
        if (isset($array['dest']) && !empty($array['dest']) && $array['dest'] instanceof Vertex){
            if (isset($array['orig']) && !empty($array['orig']) && $array['orig'] instanceof Vertex){
                $orig = new Vertex( array( 'x' => $array['orig']->getX(), 'y' => $array['orig']->getY(), 'z' => $array['orig']->getZ() ) );
            }
            else{
                $orig = new Vertex(array('x'=> 0, 'y'=> 0, 'z'=>0));
            }
            $this->_x = $array['dest']->getX() - $orig->getX();
            $this->_y = $array['dest']->getY() - $orig->getY();
            $this->_z = $array['dest']->getZ() - $orig->getZ();
            $this->_w = 0;
        }
        if (self::$verbose){
            echo $this->__toString()." constructed\n";
        }
    }

    public function __toString(){
        return (vsprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
    }

    public function __destruct()
    {
        if  (self::$verbose){
            echo $this->__toString()." destructed\n";
        }
    }

    public function doc(){
        echo file_get_contents('Vector.doc.txt')."\n";
    }

    public function normalize(){
        $long = $this->magnitude();
        if ($long == 1){
            return clone $this;
        }
        return (new Vector(array('dest'=> new Vertex(array('x' => $this->_x/$long, 'y' => $this->_y/$long, 'z' => $this->_z/$long)))));
    }

    public function magnitude(){
        return ((float)(sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z))));
    }

    public function opposite(){
        return (new Vector(array('dest'=> new Vertex(array('x' => $this->_x * -1, 'y' => $this->_y * -1, 'z' => $this->_z * -1)))));
    }

    public function scalarProduct($k){
        return (new Vector(array('dest'=> new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k)))));
    }

    public function add(Vector $v){
        return new Vector(array('dest'=>new Vertex(array('x'=>$this->_x + $v->_x, 'y'=> $this->_y + $v->_y, 'z'=>$this->_z + $v->_z))));
    }

    public function sub(Vector $v){
        return new Vector(array('dest'=>new Vertex(array('x'=>$this->_x - $v->_x, 'y'=> $this->_y - $v->_y, 'z'=>$this->_z - $v->_z))));
    }

    public function dotProduct(Vector $v){
        return ((float)$this->_x * $v->_x + $this->_y * $v->_y + $this->_z * $v->_z);
    }

    public function crossProduct(Vector $rhs){
        return new Vector(array(
           'dest'=>new Vertex(array(
               'x'=>$this->_y * $rhs->getZ() - $this->_z * $rhs->getY(), 'y'=>$this->_z * $rhs->getX() - $this->_x * $rhs->getZ(),
                   'z'=>$this->_x * $rhs->getY() - $this->_y * $rhs->getX())
           ))
        );
    }

    public function cos(Vector $v){
        return (($this->_x * $v->_x + $this->_y * $v->_y + $this->_z * $v->_z)/sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z,2)+
            pow($v->_x, 2) + pow($v->_y,2) + pow($v->_z,2)));
    }

    public function getX(){
        return $this->_x;
    }
    public function getY(){
        return $this->_y;
    }
    public function getZ(){
        return $this->_z;
    }
    public function getW(){
        return $this->_w;
    }
}