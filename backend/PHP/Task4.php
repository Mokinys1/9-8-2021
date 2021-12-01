<?php
$k=1;
for($i=0;$i<10;$i++){
    for($j=1;$j<=$i;$j++){
        echo $k."&nbsp;";
        $k++;
    }
    echo "<br>";
} 

echo"<br";

?>

<?
for($i=0;$i<=9;$i++){
 
    for ($d=10-$i; $d > 0; $d--)  {
 
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
 
        echo "&nbsp;".$i."&nbsp;";
    }
 
    echo "<br>";
 
}
?>