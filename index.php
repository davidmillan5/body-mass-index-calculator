<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">
  <title>Calculadora del índice de masa corporal (IMC)</title>
</head>
<body>
  <!-- Header -->
  <header>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#"><img class="pe-3" src="img/calculator.png" alt="">Calculadora del índice de masa corporal (IMC)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#calcular">Calcular</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>

  <!-- End Header -->

<!--Main Section -->
<section id="main">
      <div class="container-fluid">
      <div class="container text-center">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Calculadora del índice de masa corporal (IMC)</h1>
      <p class="mt-4">El sobrepeso puede causar la elevación de la concentración de colesterol total y de la presión arterial, y aumentar el riesgo de sufrir la enfermedad arterial coronaria. La obesidad aumenta las probabilidades de que se presenten otros factores de riesgo cardiovascular, en especial, presión arterial alta, colesterol elevado y diabetes.</p>
    </div>
  </div>
</div>
      </div>
</section>
<!--End Main Section-->

<!--Second Section-->

<div class="container-fluid">
  <div class="container text-center">
    <div class="row">
      <p class="mt-4">
      Una medida de la obesidad se determina mediante el índice de masa corporal (IMC), que se calcula dividiendo los kilogramos de peso por el cuadrado de la estatura en metros (IMC = peso (kg)/ [estatura (m)]2. Según el Instituto Nacional del Corazón, los Pulmones y la Sangre de los Estados Unidos (NHLBI), el sobrepeso se define como un IMC de más de 25. Se considera que una persona es obesa si su IMC es superior a 30. Usted puede determinar su IMC con la calculadora que se encuentra a continuación. Con la cifra del IMC puede averiguar su composición corporal en la tabla que aparece debajo de la calculadora.
      </p>
    </div>
  </div>
</div>

<!--Second Section End -->

<!--Form Section -->

<div class="container-fluid">
  <div class="container text-center">
    <div class="row">
      <fieldset id="calcular">
        <form action="" method="post">
          <h2>Para calcular su índice de masa corporal, ingrese su estatura y peso.</h2>
          <div class="mb-3 mt-3">
    <label for="peso" class="form-label">Ingrese su Peso: </label>
    <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso en Kilogramos">
  </div>
  <div class="mb-3">
    <label for="altura" class="form-label">Ingrese su Altura: </label>
    <input type="text" class="form-control" id="altura" name="altura" placeholder="Altura en Metros">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" class="btn btn-secondary mb-3">Calcular</button>
        </form>
      </fieldset>
    </div>
  </div>
</div>



<!--End Form Section-->


<div class="container text-center mt-1 mb-4 fs-2 text border border-dark border-2 rounded-pill">
  <div class="row">
    <div class="col">
     




<?php


if(isset($_POST['peso']) and isset($_POST['altura'])){
  if(!empty($_POST['peso']) and !empty($_POST['altura'])){

    $peso=(double)$_POST['peso'];
    $altura=(double)$_POST['altura'];

    $porcentajeMasaCorporal=$peso/pow($altura,2);

    switch($porcentajeMasaCorporal){
      case($porcentajeMasaCorporal < 18.5):
        echo"Tu Porcentaje de Masa Corporal es {$porcentajeMasaCorporal} y es una Insuficiencia Ponderal.";
        break;
      case($porcentajeMasaCorporal < 24.9):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes peso normal.";
        break;  
      case($porcentajeMasaCorporal>=25.00):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes sobrepeso.";
        break;
      case($porcentajeMasaCorporal>25.00):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes preobesidad.";
        break;
      case($porcentajeMasaCorporal>=30):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes obesidad.";
        break;
      case($porcentajeMasaCorporal>30):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes obesidad de clase I.";
        break;
      case($porcentajeMasaCorporal>35):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes obesidad de clase II.";
        break;      
      case($porcentajeMasaCorporal>=40):
        echo "Tu Porcentajes de Masa Corporal es {$porcentajeMasaCorporal} y tienes obesidad de clase III.";
        break;      
      default:
      echo 'Ha sucedido un error vuelve a intentarlo una vez más...';  
    }


  }
}


?>
    </div>
  </div>
</div>


<!--PHP Logic -->




<!-- End PHP Logic-->




<script src="https://kit.fontawesome.com/66d7605f7b.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>