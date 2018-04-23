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

  try{
    if(!$a){
      throw new Exception('Divisão por zero.');

    }
  $x = ($c-$b)/$a;


}
catch(Exception $err){

echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
echo'<br><b>Snizer Cramer Online</b><br>';
$data = date("d/m/Y");
echo'<br><b>'.$data.'</b><br><br>';
echo'<b>Equação linear de 1 variável</b><br>';
echo'a é igual a zero, logo x não é um número real';

echo'<br><br><br><br><b>Essa aplicação foi feita por Rafael Faustini e ainda está em fase de testes</b>';
echo'<br><b>Caso algum problema tenha sido encontrado, favor contatar: contato@rafaelfaustini.com.br</b>';

exit();
//Sistema Impossível
}


echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
echo'<br><b>Regra de Cramer Online By Rafael Faustini</b><br>';
$data = date("d/m/Y");
echo'<br><b>'.$data.'</b><br><br>';
echo'<b>Equação linear de 1 variável</b><br>';
echo $a.'x + '.$b.'= '.$c.'<br>';
echo $a.'x = '.$c.'-'.$b.'<br>';
echo $a.'x = '.($c-$b).'<br>';
echo 'x = '.($c-$b).'/'.$a.'<br>';
echo 'x = '.$x;


?>
</center>
</header>
</div>
</div>
</body>
