<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="js/main.js"></script>
<link rel= "stylesheet" type="text/css" href="css/2grau.css"/>
<link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass.css" />
<link rel="stylesheet" type="text/css" href="http://overpass-30e2.kxcdn.com/overpass-mono.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body style="background-color:#2ecc71">
  <nav class="navbar navbar-dark bg-dark">
  <span class="fa-stack fa-1x">
    <a href="index.html">
      <i class="fa fa-chevron-circle-left fa-stack-2x fa-inverse">
</i>
</a>
            </span>
<ul class="nav navbar-nav mx-auto">
  <li class="nav-item"><a class="nav-link" href="#">
Cramer Online</a>
  </li>
</ul>

</nav>
<header class="masthead" style="margin-top:10px;">
  <div class="vertical-center">
      <div class="container-fluid h-100" style="color:white">
<?php
date_default_timezone_set('America/Sao_Paulo');
  $a1 = $_POST["a"];
	$a2 = $_POST["d"];
	$a3 = $_POST["g"];
	$b1 = $_POST["b"];
	$b2 = $_POST["e"];
	$b3 = $_POST["h"];
	$c1 = $_POST["c"];
	$c2 = $_POST["f"];
	$c3 = $_POST["i"];
	$r1 = $_POST["j"];
	$r2 = $_POST["k"];
	$r3 = $_POST["l"];

$d1 = ($a1*$b2*$c3)+($b1*$c2*$a3)+($c1*$a2*$b3);
$d2= ($a3*$b2*$c1)+($b3*$c2*$a1)+($c3*$a2*$b1);
$d3= $d1-($d2);
$dx1= ($r1*$b2*$c3)+($b1*$c2*$r3)+($c1*$r2*$b3);
$dx2= ($r3*$b2*$c1)+($b3*$c2*$r1)+($c3*$r2*$b1);
$dx3= $dx1-($dx2);
try {
  if(!$d3){
    throw new Exception('Divisão por zero.');
  }
 $dx=$dx3/$d3;
}

 catch(Exception $err) {
    $dx=0;
}
$dy1= ($a1*$r2*$c3)+($r1*$c2*$a3)+($c1*$a2*$r3);
$dy2= ($a3*$r2*$c1)+($r3*$c2*$a1)+($c3*$a2*$r1);
$dy3= $dy1-($dy2);
try{
  if(!$d3){
    throw new Exception('Divisão por zero.');
  }
	$dy=$dy3/$d3;
}
 catch(Exception $err) {
	 $dy=0;
 }




$dz1= ($a1*$b2*$r3)+($b1*$r2*$a3)+($r1*$a2*$b3);
$dz2= ($a3*$b2*$r1)+($b3*$r2*$a1)+($r3*$a2*$b1);
$dz3= $dz1-($dz2);
try{
  if(!$d3){
    throw new Exception('Divisão por zero.');
  }
	$dz=$dz3/$d3;
}
catch(Exception $err){
	$dz=0;
}

if ($a1==null || $a1==""||$a2==null || $a2==""||$a3==null || $a3==""||$b1==null ||
 $b1==""||$b2==null || $b2==""||$b3==null || $b3==""||$c1==null || $c1==""||$c2==null ||
  $c2==""||$c3==null || $c3==""||$r1==null || $r1==""||$r2==null || $r2==""||$r3==null || $r3=="")
{
echo"Por favor preencha todos os campos corretamente (Em caso de vazio preencha o coeficiente como 0)";
}
else
{
echo'<center>';
echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
echo'<br><b>Regra de Cramer Online By Rafael Faustini</b><br>';
$d = date("d/m/Y");
echo'<br><b>'.$d.'</b><br><br>';
echo'<b>Sistema lineares 3x3</b><br>';
echo"<hr color=white>";
echo'A diagonal principal D é '.$d1.'<br>';
echo'A diagonal secundária D é '.$d2.'<br>';
echo'O valor de D é '.$d3.'<br>';
echo"<hr color=white>";

echo'A diagonal principal Dx é '.$dx1.'<br>';
echo'A diagonal secundária Dx é '.$dx2.'<br>';
echo'O valor de Dx é '.$dx3.'<br>';
echo'O valor de X é '.$dx.'<br>';
echo"<hr color=white>";

echo'A diagonal principal de Dy é '.$dy1.'<br>';
echo'A diagonal secundária de Dy é '.$dy2.'<br>';
echo'O valor de Dy é '.$dy3.'<br>';
echo'O valor de Y é '.$dy.'<br>';
echo"<hr color=white>";

echo'A diagonal principal de Dz é '.$dz1.'<br>';
echo'A diagonal secundária de Dz é '.$dz2.'<br>';
echo'O valor de Dz é '.$dz3.'<br>';
echo'O valor de Z é '.$dz.'<br>';
echo"<hr color=white>";
echo'&#x25CB Esta versão está em testes, caso encontre algum problema contatar(contato@rafaelfaustini.com.br)<br><br><br>';
echo'</center>';
}
?>
</header>
</div>
</div>
</body>
