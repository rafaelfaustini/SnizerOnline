

  <?php
  require '../include/Equacao2Grau.php';

  $equacao = new Equacao2Grau();
  
  echo'<img src="img/snizer.svg"style="width:192px;height:108px;">';
  echo'<br><b>Regra de Cramer Online By Rafael Faustini</b><br>';
  $d = date("d/m/Y");
  echo'<br><b>'.$d.'</b><br><br>';
  echo'<b>Equação do Segundo Grau</b><br>';
  echo'1: Checando os coeficientes a='.$a.' b='.$b.' c='.$c.'<br><br>';
  echo'2: Na fórmula de Bhaskara: Δ = b² - 4*a*c logo Substituindo os Coeficientes:<br>';
  echo'Δ = '.$b.'² - 4*'.$a.'*'.$c.'<br>';
  echo'Δ = '.$delta.'<br><br>';
  echo'3: Sendo x= -b ± √Δ/ 2*a | Substituindo Termos: <br>' ;
  echo'x= '.($b*-1).' ± √'.$delta.'/ '. 2*$a.'<br>';
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




</body>
