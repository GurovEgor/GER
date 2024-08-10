<?php
$array = [[' . ',' . ',' . '],[' . ',' . ',' . '],[' . ',' . ',' . ']];
foreach ($array as $row){
           $sep='|';
          echo '|'.implode($sep, $row).'|'.PHP_EOL;
    
}
//amogus
$user=readline("Ход Х, введите кординаты в формате: 1.1 - " );

//echo $user;
$cordination=explode('.' , $user);
$y=--$cordination[0];
$x=--$cordination[1];
//echo'X= '.$x.PHP_EOL.'Y= '.$y;
if ($array[$x][$y]==' . '){
    $array[$x][$y]=' X ';
}
else{
echo 'Место ('.$array[$x][$y].') занято, выберите другое'.PHP_EOL;
}
foreach ($array as $row){
    $sep='|';
   echo '|'.implode($sep, $row).'|'.PHP_EOL;

}

$user=readline("Ход O, введите кординаты в формате: 1.1 - " );

//echo $user;
$cordination=explode('.' , $user);
$y=$cordination[0]-1;
$x=$cordination[1]-1;
//echo'X= '.$x.PHP_EOL.'Y= '.$y;
if ($array[$x][$y]==' . '){
    $array[$x][$y]=' O ';}
else{
echo 'Место ('.$array[$x][$y].') занято, выберите другое'.PHP_EOL;
}
foreach ($array as $row){
    $sep='|';
   echo '|'.implode($sep, $row).'|'.PHP_EOL;

}
?> 