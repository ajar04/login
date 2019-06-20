

  <?php
  session_start();
  if(!isset($_SESSION['id_roles'])){


  }
  ?>
    <?php
    require("./head.php");
       include_once('../codex/codex.php');
       $con=new conexiones();
       ob_end_flush();
       ?>
<body>

  <form class="form-horizontal" role="form" action="" method="post">
       <div class="col-md-4"></div>
       <div class="col-md-4">

            <br><br><br>
           <div id="_MSG_">

           </div>
           <!--  FUNCTION loger -->

           <?php
           if(isset($_POST['boton'])){
               $con->Login($_POST['user'],$_POST['pass']);
           }
           ?>
            <!-- TERMINAR loger -->



           <div class="panel panel-primary">
     <div class="panel-heading">
       <h3 class="panel-title">LOGIN</h3>
     </div>
     <div class="panel-body">


           <label>loger</label>
         <input type="text" class="form-control" name="user" placeholder="@email.com" limit="10"/>

         <input type="password" class="form-control" name="pass" placeholder="password"  />

          <input type="submit" name="boton" class="form-control" value="Go" />
       </div>
     </div>



    </div>
     



       </div>
       <div class="col-md-4"></div>




       </form>

  </body>

