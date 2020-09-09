<?php
 

 echo "<br><b>Llista de cotxes</b>";
$cotxes = array
  (
  array("BMW","stock"=>25,8),
  array("marca"=>"Renault",19,3),
  array("marca"=>"Volvo",6,4,100,78),
  array("marca"=>"Audi",13,1)
  );


foreach($cotxes as $posicio=>$cotxe)
{
   echo "<br>".$posicio.":";
   foreach($cotxe as $posicio2=>$valor)
   {
      echo $posicio2."=".$valor." ";
   }
}



echo $cotxes[2]['marca'];

 $marca = array(
 'software' => array(
                   'cercador' => array('Google','Yahoo','Baidu','Bing'),
                   'CMS' => array('Wordpress','Joomla','Blogger')
                   ),
 'hardware' => array(
                   'PC' => 'Mac',
                   'movil' => array('Black Berry','Iphone')
                   )
 );
 
 echo $marca['software']['cercador'][0];
 
 // i per mostrar-lo tot?? intenta-ho !!
 // ...
 


  
 ?> 
