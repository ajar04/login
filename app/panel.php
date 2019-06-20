
<?php



session_start();
if(!isset($_SESSION['id_roles'])){


}
require('./head.php');
require('./nav.php');

?>


<body>
<div class="conteiner">
<div class="rows">
<div class="col-md-4"></div>

<div class="col-md-4">
<center>
<h1>BIENVENIDO</h1>
<p>Software Ganadero en la Nube</p>
<br><br>
<h4 class="btn btn-info btn-lg"><span class="glyphicon glyphicon-user"></span> <?php echo($_SESSION['nombre']." ".$_SESSION['apellido']); ?></h4><br><br>

</center>
</div>


<div class="col-md-4"></div>

</div>
</div>




</body>
