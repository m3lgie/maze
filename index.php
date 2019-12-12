<?php

class Maze
{
    protected $width;
    protected $height;
    protected $grid;
    protected $path;
    protected $horWalls;
    protected $vertWalls;
    protected $dirs;
    protected $isDebug;

    public function __construct($x, $y, $debug = false)
    {
        $this->width = $x;
        $this->height = $y;
        $this->path = [];
        $this->dirs = [ [0, -1], [0, 1], [-1, 0], [1, 0]]; // array of coordinates of N,S,W,E
        $this->horWalls = []; // list of removed horizontal walls (---+)
        $this->vertWalls = [];// list of removed vertical walls (|)
    }




    public function printOut()
    {


        $northDoor = 1;
        $eastDoor = $this->width-2;


        $str ='';

        echo "<pre>";

        for ($j=0; $j<$this->width; $j++) {


          $str.= ($northDoor == $j) ? ' ' : '@';


        }
        echo $str;
        echo "<br/>";

        $x= ($this->height%2==0) ? 3 : 2;

        for ($i=0; $i<($this->height-$x); $i++) {


          if($i%2==0)
          {
            for ($j=0; $j<$this->width; $j++) {


                if($j==0 or $j==$this->width-1) {
                 echo  '@' ;
                }
                else {
                  echo '&nbsp;';
                }

            }
          }
          else{
            $str = strrev($str);
              echo $str;

          }

  echo "<br/>";
        }

        $str = strrev($str);
        echo $str;

    }



}

$maze = new Maze(15,15);
$maze->printOut();


?>
