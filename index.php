<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    background-color:pink;
       }
    </style>
<body>
    

<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php

//Question 1

$a="123456";
$b=(str_split($a,1)); 
echo implode('-', $b);
echo"<hr>";

//Question 2
$sum=0;
for($k=1;$k<=30;$k++){ 
  $sum=$sum+$k;
  
 }
echo $sum;
echo"<hr>";

//Question 3
$aseel="A";
		for ($i = 1; $i <= 5; $i++) 
                { 
        for ($j = 1; $j <= 5; $j++)
			{
        echo $aseel;
        
      }
      echo"<br>";
			// for ($k = 1; $k <= $i; $k++)
			// {
      //   // 
      // }
        $aseel++;
			
	}

echo"<hr>";
////////////////////////// question 12
$num=1;
$n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     echo $num.$count;
    //  printf("%4s", $count);
     $count++;
   }  
   $num++;
	echo "<br>";
   }
//Question 7

$text="Orange coding Academy";
$search_char="c";
$count=0;
for($x=0; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
echo "<hr>";
//Question 16
$x="A";
for($i=1;$i<=5;$i++){  
  for($k=5;$k>=$i;$k--){  
  echo " ";  
  }  
  for($j=1;$j<=$i;$j++){  
  echo $x; 
    // echo str_repeat($x, $i);

  }  
   $y=$x++;

  echo "<br>";  
  } 
  for($i=4;$i>=1;$i--){  
  for($k=5;$k>=$i;$k--){  
  echo "  ";  
  }  
  for($j=1;$j<=$i;$j++){  
  echo $x; 

  } 
    $x--;
 
  echo "<br>";  
  }  
  echo "<hr>";
  //Question 8
  for($i=1;$i<=6;$i++)
  {
  echo "<tr>";
  for ($j=1;$j<=5;$j++)
    {
    echo "<td>$i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
    }
  ?>
?>
</table>
</body>
</html>