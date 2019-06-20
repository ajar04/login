
<?php



session_start();
if(!isset($_SESSION['id_roles'])){


}

require('./head.php');
?>
<?php

require('./nav.php');

?>
<body>
<div class="conteiner">
<div class="rows">
<div class="col-md-3"></div>

<div class="col-md-6">
<div class="panel panel-info">
  <div class="panel-heading">Raza</div>
  <div class="panel-body">


  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
  <span class="glyphicon glyphicon-plus" ></span> RAZA
  </button>
<br>

  <form action="" method="post">
  
  <div class="col-md-15 col-md-15"><br>
      <div class="form-group">
      
        <div class="input-group">
          <input name="RazaB" id="RazaB" type="text"  class="form-control" placeholder="Buscar Raza ">
          <span class="input-group-addon">
          <button type="submit" name="razaBuscar">buscar</button>
          </span>
          
         
        </div>
      </div>
    </div>
  <br>
  

    <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Añadir Raza</h4>
      </div>
      <div class="modal-body">
        <p>Registrar Una Raza de animal</p>

        <label for="">Nombre Raza</label>
        <input type="text" name="RazaAnimal" id="RazaAnimal" class="form-control" placeholder="Digite la Raza"><br>
        <label for="">Nota</label>
      <textarea name="Nota" id="Nota" cols="auto" rows="auto" class="form-control" placelholder="Notas"></textarea>
       <br>

        <button type="submit" name="guardarRAZA" class="btn btn-info"> Guardar </button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  </form>

  </div>
</div>
</div>


<div class="col-md-3"></div>

</div>
</div>




</body>