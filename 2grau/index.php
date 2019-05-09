<!doctype html>
<html lang="en">
<?php
include 'views/head.php';
?>

<body style="background-color:#2ecc71;font-family:overpass;">
  <nav class="navbar navbar-dark bg-dark">
    <span class="fa-stack fa-1x">
      <a href="../index.html">
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
    <div class="vertical-center">
      <div class="container-fluid h-100" style="color:white">
        <div class="row h-100 justify-content-center align-items-center">
          <h4 class="text-center" style="font-weight:300"> Resolução de Equações do segundo grau</h2>
          </div>
          <div class="row h-100 justify-content-center align-items-center">
            <h4 class="text-center" style="font-weight:200">Essa calculadora permite a resolução de equações do segundo grau.</h4>
          </div>
          <div class="row h-100 justify-content-center align-items-center">
            <h3 class="text-center" style="font-family: overpass-mono;font-weight:100;margin-top:10px;">ax² + bx + c = 0</h4>
            </div>

            <br>
            <center>
              <form action="valida.php" method="post">
                <div class="row h-100 justify-content-center align-items-center ">

                  <div class="form-group col-lg-3">
                    <input type="number" class="form-control" name="a" id="a"  value="" placeholder="Insira o valor de a">
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="number" class="form-control" name="b" id="b" value="" placeholder="Insira o valor de b">
                  </div>
                  <div class="form-group col-lg-3">
                    <input type="number" class="form-control" name="c" id="c" value="" placeholder="Insira o valor de c">
                  </div>
                </div>
                <div class="row h-100 justify-content-center align-items-center">
                  <button class="btn btn-danger btn-lg btn-xl text-uppercase" onclick="exec()">Calcular</button>
                </form>
              </div>
            </div>
            <br><br>
            <hr color="white" class="col-xs-12">








          </div>
        </div>
        <center>
          <div class="card bg-dark text-light">
            <div class="card-header"><button id="ex" class="link text-white"><b>Exemplo de sistema para entrada</b></button></div>
            <div class="card-body">2x²-x+8=0</div>
            <div class="card-footer">
              Essa aplicação está em testes, problemas são recorrentes<br>
              Caso encontre problemas ou tenha alguma sugestão contate (contato@rafaelfaustini.com.br)
            </div>
          </center>

          <script>
          var button = document.getElementById("ex");
          button.onclick = function(){
            document.getElementById("a").value = "2";
            document.getElementById("b").value = "-1";
            document.getElementById("c").value = "8";
          }
        </script>

      </div>
  </body>
  </html>
