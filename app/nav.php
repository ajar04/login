<!---- style --->
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>

<!---- sript --->
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>



<nav class="navbar navbar-toggleable-md navbar-light  navbar-default" style="background-color: #e3f2fd;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
     
   </a>
   <img src="../img/logoLAWEBCOL.png" width="160" height="40" alt="">
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



      <ul class="nav navbar-nav">



          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ganado<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li class="dropdown-submenu">
          <a class="test" tabindex="-1" href="#">Animal <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="animal.php">Registrar</a></li>
          <li><a tabindex="-1" href="#">Ver Todo</a></li>
          </ul>
          </li>



            
            <li><a href="lote.php">Lote</a></li>
            <li><a href="raza.php">Raza</a></li>
           
       

         

          </ul>
        </li>



           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vacio<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#">Cambo Requerido</a></li>
          <li><a href="#">Cambo Requerido</a></li>


          </ul>
        </li>

             </ul>

      <ul class="nav navbar-nav navbar-right">

           <li class="dropdown ">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>
             <span class="glyphicon glyphicon-list-alt"></span></a>
          <ul class="dropdown-menu" role="menu">
             <!-- <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Editar</a></li>-->


              <li><a href="./logaout.php"><span class="glyphicon glyphicon-off"></span> cerrar sesion</a></li>


          </ul>
        </li>





        </ul>

      </ul>
    </div>
  </div>
</nav>
