<?php  

class bucket 
{ 
    public Colour = " "; 
    public SecondColour = " "; 
    public Brand = " "; 
    public Handle = "right"; 
    public MaxVolume = 10; 


 public function __construct($Brand, $Color, $SecondColor, $Handle,$MaxVolume) 
 
     $this->Brand = $Brand;
     $this->Color = $Color;
     $this->SecondColor = $SecondColor;
     $this->Handle = $Handle;
     $this->MaxVolume = $MaxVolume;
 }
public function setHandle($action)
{ 
    $this->Handle = $action;
}

public function setColor($action)
{ 
    $this->Color = $Color;

}

public function setMaxVolume($action)
{ 
    $this->MaxVolume = $color;

}

 echo "<pre>"; 
 $blokkerbucket = new bucket("blokker"); 

 $blokkerbucket->setHandle("left");
 $blokkerbucket->setColor("orange");
 $blokkerbucket->setMaxVolume(5);

 var_dumb($blokkerbucket)