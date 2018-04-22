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
        <center>
<?php
date_default_timezone_set('America/Sao_Paulo');
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];


$delta = ($b*$b)-4*$a*$c;
$delta2 = sqrt($delta);
try{
  if(!2*$a){
    throw new Exception('Divisão por zero.');
  }
$x1= ((($b*-1)+$delta2)/2*$a);
$x2= ((($b*-1)-$delta2)/2*$a);
}
catch(Exception $err){

	$x1=0;
  $x2=0;

}



  if ($a==null || $a==""||$b==null || $b==""||$c==null || $c=="")
  {
  echo"Por favor preencha todos os campos corretamente (Em caso de vazio preencha o coeficiente como 0)";
  }
  else
  {
  if (!is_nan($delta2))
  {
  echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
  echo'<br><b>Regra de Cramer Online By Rafael Faustini</b><br>';
  $d = date("d/m/Y");
  echo'<br><b>'.$d.'</b><br><br>';
  echo'<b>Equação do Segundo Grau</b><br>';
  echo'Delta é menor que zero, logo não há raizes reais';

  echo'<br><br><br><br><b>Essa aplicação foi feita por Rafael Faustini e ainda está em fase de testes</b>';
  echo'<br><b>Caso algum problema tenha sido encontrado, favor contatar: contato@rafaelfaustini.com.br</b>';
  }
  else
  {
    echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
    echo'<br><b>Regra de Cramer Online By Rafael Faustini</b><br>';
    $d = date("d/m/Y");
    echo'<br><b>'.$d.'</b><br><br>';
    echo'<b>Equação do Segundo Grau</b><br>';
  echo'1: Checando os coeficientes a='.$a.' b='.$b.' c='.$c.'<br><br>';
  echo'2: Na fórmula de Bhaskara: Δ = b² - 4*a*c logo Substituindo os Coeficientes:<br>';
  echo'Δ = '.$b.'² - 4*'.$a.'*'.$c.'<br>';
  echo'Δ = '.$b*$b.'-4*'.$a*$c.'<br>';
  echo'Δ = '.$delta.'<br><br>';
  echo'3: Sendo x= -b ± √Δ/ 2*a | Substituindo Termos: <br>' ;
  echo'x= '.($b*-1).' ± '.$delta2.'/ '. 2*$a.'<br>';
  echo'x1= '.$x1.'<br>';
  echo'x2= '.$x2.'<br><br>';

  if($a>0)
  {
    echo'O coeficiente <b>a</b> é maior que 0, logo a função é <b>crescente</b>';
  }
  if($a<0)
  {
    echo'O coeficiente <b>a</b> é menor que 0, logo a função é <b>decrescente</b>';
  }
    echo'<br><br><br><br><b>Essa aplicação foi feita por Rafael Faustini e ainda está em fase de testes</b>';
    echo'<br><b>Caso algum problema tenha sido encontrado, favor contatar: contato@rafaelfaustini.com.br</b>';
  }
  }
?>
</center>
</header>
</div>
</div>
</body>
