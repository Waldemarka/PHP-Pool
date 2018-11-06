<?php
require_once 'Color.class.php';
	class Vertex
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w = 1.0;
		private $_color;
		static $verbose  = false;


		function __construct($arr)
		{
			if (array_key_exists('x', $arr) && array_key_exists('y', $arr) && array_key_exists('z', $arr))
			{
				$this->_x = $arr['x'];
				$this->_y = $arr['y'];
				$this->_z = $arr['z'];
				if (array_key_exists('w', $arr) && !empty($arr['w']))
					$this->_w = $arr['w'];
				if (array_key_exists('color', $arr) && !empty($arr['color']) && $arr['color'] instanceof Color)
					$this->_color = $arr['color'];
				else
				{
					$arr_col = array(
     				'red' => 255,
     				'green' => 255,
  				    'blue' => 255);
					$this->_color = new Color($arr_col);
				}
			}
			if (self::$verbose == true)
		      printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
   			return;
		}
		function __toString()
		{
    		if (self::$verbose == true)
		       return(vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
			return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
    	}
    	
        function doc()
        {
        	echo "\n";
    		echo file_get_contents("Vertex.doc.txt");
    		echo "\n";
        }
                public function getX()
        {
            return $this->_x;
        }
        public function setX($x)
        {
            $this->_x = $x;
        }
        public function getY()
        {
            return $this->_y;
        }
        public function setY($y)
        {
            $this->_y = $y;
        }
        public function getZ()
        {
            return $this->_z;
        }
        public function setZ($z)
        {
            $this->_z = $z;
        }
        public function getW()
        {
            return $this->_w;
        }
        public function setW($w)
        {
            $this->_w = $w;
        }
        public function getColor()
        {
            return $this->_color;
        }
        public function setColor($color)
        {
            $this->_color = $color;
        }
                function __destruct()
        {
            if (Self::$verbose)
                printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
        }
	}

?>