
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
<div class="conteiner">
<div class="rows">
<div class="col-md-3"></div>

<div class="col-md-6">
<!-- cpanel -->
<div class="panel panel-info">
<div class="panel-heading">LOTE</div><br>

<div id="_MSG_">

</div>
  <div class="panel-body">iNFORMACION
  <br>
  <form action="" method="post">
  <?php 
if (isset($_POST['LoteT'])) {
  # code...
  $con->RegistrarLote($_POST['NombreLote'],$_POST['Descripcion']);
}

if (isset($_POST['BuscarL'])) {
  # code...
  $sel=$con->SelectLote($_POST['loteB']);
  if ($sel!='') {
    # code...
    $num_rows=mysqli_num_rows($sel);
  }
}

if (isset($_POST['delete'])) {
  # code...
  $con->deleteLote($_POST['idlote']);
}



?>
  <div class="col-md-8">
  <br>
  <input type="text" name="loteB" id="loteB" placeholder="Buscar nombre" class="form-control">
  
  </div><br>
  <button type="submit" name="BuscarL" id="BuscarL" class="btn btn-info">
    <span class="glyphicon glyphicon-search"></span> Search
  </button>
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
  <span class="glyphicon glyphicon-plus" ></span> LOTE
  </button>


<!-- table --->

<br>
<table class="table">
    <thead>
    <?PHP 
     if (isset($num_rows)) {
      # code...
    ?>
      <tr>
        <th>Nombre Lote</th>
        <th></th>
       
       
      </tr>
    </thead>
    <tbody>
     <?php
    

       for ($l=0; $l < $num_rows; $l++) { 
         # code...
         $array=mysqli_fetch_array($sel);
       ?>
       <td><?php echo($array['nombre_lote']);  ?>
       <input type="hidden" name="idlote" value="<?php echo($array['id_lote']); ?> ">
       </td>
       <td style="text-align:right">
       <a href="MostrarLotes.php?i=<?php echo($array['id_lote']); ?>" title="Mostrar" class="btn btn">
        <span class="glyphicon glyphicon-eye-open"></span>
       </a>
        <a href="update.php?i=<?php echo($array['id_lote']); ?>" title="Editar" class="btn btn"> <span class="glyphicon glyphicon-edit"></span></a>
       
        
        <a href="" name="delete" title="Eliminar" class="btn btn">
        <span class="glyphicon glyphicon-remove"></span>
       </a>
        
        </td>
       <?php

     
     ?>
      <tr>
        
       
        
        
      </tr>
     <?php 
     }
    }
     ?>
      

    </tbody>
  </table>




<!-- table --->






  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Añadir lote</h4>
      </div>
      <div class="modal-body">
      <div id="_MSG2_">

</div>
        <p>Registrar un lote</p>

        <label for="">Nombre</label>
        <input type="text" name="NombreLote" id="" class="form-control" placeholder="Digite el lote"><br>
        <label for="">Creado</label>
        <select name="Descripcion" id="" class="form-control">
        <option value="">Seleccione</option>
        <option value="si">SI</option>
        <option value="no">NO</option>
        </select><br>

        <button type="submit" name="LoteT" class="btn btn-info"> Guardar </button>

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



<!--<script src="../js/lote.js"></script> -->
</body>