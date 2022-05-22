<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100mm" height="100mm" >
<style>
.track {
  fill: none; 
}

.round {
  stroke-linejoin: round;
}

</style>
 <!-- <rect width="100mm" height="100mm"  / -->
 
 <?php
/*
 Cable is 21mm wide, then flares out in diagonals to 38.87mm (pins) / 41.02 (plastic)
 so the plastic "header" for a single pin is 2.5638mm
 
 pins should be 2.54 mm apart on center (so pin 0 starts @ 1.252)
 
 formatted like so:
 
 -| \ 
 -|  \======
 -|  /======
 -| /
 
 
*/
 $pinSpacing = 2.54;
 $fanLength = 30.0;
 $width = 40.64;
 
 
 
  ?>
<!--  
  <rect x="0mm" y="0mm" height="100mm" width="100mm" stroke="black" fill="transparent" stroke-width="1"/>
  -->
  <g transform="scale(3.77,3.77)" >
     <polygon class="track round" points="   10,10 10,54 20,54 30,44 40,44 40,20 30,20 20,10 10,10 " stroke="green" fill="transparent" stroke-width="1"/>   

<!--
     <polygon points="   0,0 0,50 50,50 50,0 0,0" stroke="green" fill="transparent" stroke-width="1"/>   
     <polygon points="   100,100 100,50 50,50 50,100 100,100" stroke-width="1" fill="transparent" stroke-width="1"/>   
-->
  </g>
  <g>
   <rect x="9.9mm" y="11.5mm" width="3mm" height="41mm" stroke="purple" fill="purple"  />
  </g>
  <g>
  <rect x="30mm" y="21mm" width="10mm" height="22mm" stroke="blue" fill="black" />
  </g>  
  <g>
    <?php
   for($i=0;$i<16;$i++){
   ?>
   <rect x="10mm" y="<?php echo 12 + ($i * 2.54) ?>mm" width="9mm" height="2mm" />
   <?php   
   }
  
  ?>
  </g>  
  <g transform="scale(3.77,3.77)" >
    <?php
   for($i=0;$i<16;$i++){
   ?>
   <polygon points="   
   18.5,<?php echo 12.5 + ($i * 2.54) ?> 
   
   30.5,<?php echo 21.5 + ($i * 1.25) ?>
   30.5,<?php echo 23 + ($i * 1.25) ?>
   
   18.5,<?php echo 14 + ($i * 2.54) ?>
   18.5,<?php echo 12.5 + ($i * 2.54) ?> 
   " stroke="red" stroke-width="1" fill="orange" stroke="orange" /> 
    
   <?php   
   }
  
  ?>
  </g>  
     
  
  <!--
 <g transform="scale(3.77,3.77) translate(40,0)" >  
 <polygon points="   10,10 10,54 20,54 30,44 40,44 40,20 30,20 20,10 10,10 " stroke="green" fill="transparent" stroke-width="1"/> 
 </g>
 -->
</svg>
