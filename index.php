<?php
$foot = 0;
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice5</title>
   </head>
   <body>
     <p>
<?php
//on avance de 1 pas à la fois jusqu'a 15
while($foot < 15){
  $foot++;
  echo $foot . ' On y arrive presque'. '<br/>';
}
 ?>
     </p>
   </body>
 </html>
