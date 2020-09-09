<?php

   // definició arrays en php

   $a[0]=15;
   $a[1]=65;
   $a[2]=43;

   // contingut d'una posició
   echo "Mostro el contingut d'una posició del vector: ";
   echo $a[1];
   echo "<br>";

   $b[0]="hola";
   $b[1]="adeu";
   $b[2]="bye";
   $b[3]="hi";
   $b[4]=39;

   echo "Mostro el contingut d'una posició del vector: ";
   echo $b[2];
   echo " ";
   echo $b[4];
   echo "<br>";
   
   $c[]=15;
   $c[]=65;
   $c[]=43;
   echo "Mostro el contingut d'una posició del vector: ";
   echo $c[1];
   echo "<br>";

   $d = array(23,45,89,34,78,5,4,7,87);
   // count($d) => 9
   echo "Mostro el contingut d'una posició del vector: ";
   echo $d[5];
   echo "<br>";


   // recorregut vector 1
   $i = 0;
   while($i < count($d))
   {
        echo " ".$d[$i];
	$i++;
   }
   echo "<br>";

    // recorregut vector 2
   for($i=0;$i<count($d);$i++)
	echo " ".$d[$i];

   echo "<br>";

    // recorregut vector 3
   foreach($d as $element)
	echo " ".$element;

   
   echo "<br>";

   $e[0]=45;
   $e[5]=80;
   $e[7]=23;
   echo $e[5];
   echo $e[19];  // Error!!!
   echo "<br>";
  
   // recorregut vector 4: com no té totes les posicions ens donarà errors!
   for($i=0;$i<count($e);$i++)
	  echo " ".$e[$i];
   echo "<br>";
  
   // recorregut vector 5
   foreach($e as $element)
	echo " ".$element;	

   echo "<br>";
   $f[5]=45;
   $f[0]=80;
   $f[7]=23;
   foreach($f as $element)
	echo " ".$element;
   
   // array associatiu
   echo "<br>";
   $g["hola"]=45;
   $g["adeu"]=90;
   echo $g["hola"];
   foreach($g as $element)
	echo " ".$element;
   echo "<br>";
   foreach($g as $posicio=>$element)
	echo $posicio." conté ".$element."<br>";
 


     $notes["I"]="Insuficient";
     $notes["S"]="Suficient";
     $notes["B"]="Bé";
     $notes["N"]="Notable";
     $notes["E"]="Excel·lent";
     echo "<br>";
     echo  $notes["N"];
     echo "<br>";
     foreach($notes as $index=>$element)
     {
	echo $index." ".$element."<br>";
     }

     $notes2 = array("S"=>"Suspés","Apr"=>"Aprovat","Not"=>"Notable");
     foreach($notes2 as $index=>$element)
     {
	echo $index." ".$element."<br>";
     }


     // echo phpinfo();
     echo "<br>".$_SERVER['SERVER_ADDR'];
     echo "<br>".$_SERVER['PHP_SELF'];

     //foreach($_SERVER as $ele)
	//	echo $ele."<br>";

     $m = array(array(1,2,3),array(4,5,6),array(7,8,9,10));
     echo $m[1][2];
     
     $dades = array(
	array("nom"=>"Josep",
              "email"=>"josep@exemple.com",
              "telefon"=>"977121213"),
	array("nom"=>"Maria",
              "email"=>"maria@exemple.com",
              "telefon"=>"977151515",
              "dept"=>"vendes"),
	array("nom"=>"Esther",
              "email"=>"esther@exemple.com",
              "telefon"=>"977676767")
     );

    echo "<br>".$dades[1]['email'];
     echo "<br>".$dades[2]['telefon'];
     echo "<br>".$dades[1]['dept'];

     // echo $dades[0]['dept']; // Error !! no té posició 'dept'
     echo "<br>";
     //foreach($dades as $empleat)
     //{

	//echo $empleat['nom']." ".$empleat['telefon']."<br>";
     //}

     
     echo "<br>";
     foreach($dades as $empleat)
     {
        foreach($empleat as $pos=>$info)
	{
		echo $pos." es ".$info.", ";
        }
        echo "<br>";
     }


     // visualitzar continguts de variables de forma rapida

     print_r($a);
     
     echo "<br>";
     print_r($dades);




?>