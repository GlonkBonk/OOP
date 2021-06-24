<?php 

include_once 'vierkant.class.php'
include_once 'cillinder.class.php'
include_once 'figuur.class.php'

$vierkant = new vierkant(5); 
echo $vierkant->oppervlaktevierkant 
echo "<br>"; 

$cilinder = new cilinder(3,10); 
echo $cilinder -> inhoudcilinder; 


?> 