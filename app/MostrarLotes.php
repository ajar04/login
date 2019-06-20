


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
<div class="col-md-4"></div>

<div class="col-md-4">

</div>


<div class="col-md-4"></div>

</div>
</div>




</body>
