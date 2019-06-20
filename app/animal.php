
<?php



session_start();
if(!isset($_SESSION['id_roles'])){


}

require('./head.php');
?>
<?php

require('./nav.php');

?>
 <?php
       include_once('../codex/codex.php');
       $con=new conexiones();
       ob_end_flush();
       ?>
<body>

<div class="row">
  <div class="container">
    <form>
      <div class="col-sm-4">
        <div class="form-group row">
          <div class="col-xs-12">
            <input name="numero" id="numero" type="text"  class="form-control" placeholder="Numero ">
          </div>
          <br>
          <br>
          <br>
          <div class="col-xs-12">
            <input name="nombre" id="nombre" type="text" required class="form-control" placeholder="Nombre del Animal">
          </div>
          <br>
          <br>
          <br>
          <div class="col-xs-12">
            <input name="nombre" id="nombre" type="text" required class="form-control" placeholder="Nombre del Animal">
          </div>
          <br>
          <br>
          <br>
          <div class="col-xs-12">
            <input name="nombre" id="nombre" type="text" required class="form-control" placeholder="Nombre del Animal">
          </div>
          <br>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group row">
          <div class="col-xs-12">
           
            <div class="col-xs-12">
            <input name="nombre" id="nombre" type="text" required class="form-control" placeholder="Nombre del Animal">
          </div>
          <br>
          <br>
          <br>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="conteiner">
<div class="rows">
<div class="col-md-2"></div>

<div class="col-md-8">
<!--- contenido --->
<div class="panel panel-info">
      <div class="panel-heading">Registrar Animales</div>
      <div class="panel-body">
      <form action="" method="post">
      <div id="_MSG_">

</div>

<?php 
if (isset($_POST['AnimalR'])) {
  # code...

  $con->Registrar_animal($_POST['numero'],$_POST['nombre'],$_POST['sexo'],$_POST['lote'],$_POST['primerPeso'],$_POST['peso'],$_POST['ultimoPeso'],$_POST['gdp'],$_POST['ganancias'],$_POST['date'],$_POST['edad'],$_POST['prenez'],$_POST['raza'],$_POST['estado']);

}
?>
    





    <div class="col-md-sm-3">
      <div class="form-group">
        <label for="">Registro </label>
        <div class="input-group">
          <input name="numero" id="numero" type="text"  class="form-control" placeholder="Numero ">
          
          
          <input name="nombre" id="nombre" type="text" required class="form-control" placeholder="Nombre del Animal">
        </div>
      </div>
    </div>
  <br>
  <div class="col-md-15 col-md-15">
      <div class="form-group">
        
        <div class="input-group">
          <input name="sexo" id="sexo" type="text"  class="form-control" placeholder="Sexo">
          
          
          <input name="lote" id="lote" type="text" required class="form-control" placeholder="Lote">
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-15 col-md-15">
      <div class="form-group">
      
        <div class="input-group">
        
          <input name="primerPeso" id="primerPeso" type="text"  class="form-control" placeholder="Primer Peso">
         
          
          <input name="peso" id="peso" type="text" required class="form-control" placeholder="Peso">
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-15 col-md-15">
      <div class="form-group">
      <label for="">ultimo Peso </label>
        <div class="input-group">
          <input name="ultimoPeso" id="ultimoPeso" type="date"  class="form-control" placeholder="Ultimo Peso">
         
          
          <input name="gdp" id="gdp" type="text" required class="form-control" placeholder="GDP Grs">
        </div>
      </div>
    </div>
      
    <br>
    <div class="col-md-14 col-md-15">
      <div class="form-group">
      <label for="" style="text-align:right">Fecha nacimiento </label>
        <div class="input-group">
          <input name="date" id="date" type="date" required class="form-control" placeholder="Fecha de nacimiento">
          
          
          <input name="ganancias" id="ganancias" type="text"  class="form-control" placeholder="Ganancias Kgs">
        </div>
      </div>
    </div>

    <br>
    <div class="col-md-15 col-md-15">
      <div class="form-group">
        
        <div class="input-group">
          <input name="edad" id="edad" type="text"  class="form-control" placeholder="Edad Meses">
          
          
          <input name="prenez" id="prenez" type="text" required class="form-control" placeholder="Meses de preñez">
        </div>
      </div>
    </div>

    <br>
    <div class="col-md-15 col-md-15">
      <div class="form-group">
        
        <div class="input-group">
         <select name="raza" id="raza"  class="form-control">
         <option value="">seleccione la Raza</option>
         <option value="1">tiburon</option>
         </select>
         
          <select name="estado" id="estado"  class="form-control">
         <option value="">Estado del Animal</option>
         <option value="2">tiburon</option>
         </select>
        </div>
      </div>
    </div>
<br>

<div class="col-md-15 col-md-15">
      <div class="form-group">
        <button type="submit" name="AnimalR" class="btn btn-info" id="button">Registrar</button>
        </div>
      </div>
    </div>

      </form>
      
      </div>
    </div>
<!---- contenido --->

</div>


<div class="col-md-3"></div>

</div>
</div>

<script src="../js/animal.js"></script>

</body>