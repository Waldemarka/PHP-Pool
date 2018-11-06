<?php

class Color
{
  public $red = 0;
  public $green = 0;
  public $blue = 0;
  public static $verbose = false;
  function __construct(array $arr_col)
  {
    if (array_key_exists('red', $arr_col) && array_key_exists('green', $arr_col) && array_key_exists('blue', $arr_col))
    {
      $this->red = $arr_col['red'] % 256;
      $this->green = $arr_col['green'] % 256;
      $this->blue = $arr_col['blue'] % 256;
    }
    else if (array_key_exists('rgb', $arr_col))
    {
      $this->red = ($arr_col['rgb'] >> 16) % 256;
      $this->green = ($arr_col['rgb'] >> 8) % 256;
      $this->blue = $arr_col['rgb'] % 256;
    }
    if (self::$verbose == true)
      printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    return;
  }
  function __toString()
  {
    return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
  }
  function doc()
  {
    echo "\n";
    echo file_get_contents("Color.doc.txt");
    echo "\n";
  }
  function add($col)
  {
    $arr = array(
      'red' => $this->red + $col->red,
      'green' => $this->green + $col->green,
      'blue' => $this->blue + $col->blue);
    return (new Color($arr));
  }
  function sub($col)
  {
      $arr = array(
      'red' => $this->red - $col->red,
      'green' => $this->green - $col->green,
      'blue' => $this->blue - $col->blue);
    return (new Color($arr));
  }
  function mult($mul)
  {
      $arr = array(
      'red' => $this->red * $mul,
      'green' => $this->green * $mul,
      'blue' => $this->blue * $mul);
    return (new Color($arr));
  }
  function __destruct()
  {
    if (Self::$verbose)    
      printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
  }
}

?>