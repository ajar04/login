<?php
class conexiones{

    private function bd(){
        $con = new mysqli('127.0.0.1','root','','bd_ganadero');
        return $con;
    }

  //function login
  function login($user,$pass){
    $base= new conexiones();
    $cone=$base->bd();

   if($user!='' && $pass!=''){

     $query="SELECT * FROM roles WHERE roles.email='$user' AND roles.password='$pass'  ";
     $sql=$cone->query($query);

     $cnt=mysqli_num_rows($sql);
     if ($cnt >0) {
       $imp=mysqli_fetch_array($sql);
       $_SESSION['id_roles']=$imp['id_roles'];
       $_SESSION['nombre']=$imp['nombre'];
       $_SESSION['apellido']=$imp['apellido'];
       $_SESSION['email']=$imp['email'];
       $_SESSION['password']=$imp['password'];
       

     // code...
       if ($imp['id_roles']==1) {
         // code...
       header('location: ../app/panel.php');
       } if ($imp['id_roles']==2) {
           // code...
            header('location: ../app/panel.php');
         }
     }

   } else {
     // code...
     ?>
     <script>
     mensaje(1,"CREDENCIALES INVALIDAS");

     </script>

<?php
   }
  }
//registrar administrativos

function Registrar_animal($id_animal,$nombre,$sexo,$lote,$p_peso,$peso,$fecha_ultimo_peso,$gdp,$ganancias,$fecha_nacimiento,$edad,$meses,$raza,$estado){
  $base= new conexiones();
  $cone=$base->bd();

  if ($id_animal!='') {
    # code...
    $query2="SELECT * FROM animal WHERE animal.id_animal=$id_animal ";
    $Ac=$cone->query($query2);
    $cnt2=mysqli_num_rows($Ac);

    if ($cnt2 >0) {
      # code...
      ?> 
      <script>mensaje(1,"EL ID DEL ANIMAL YA SE ENCUENTRA REGISTRADO ")</script>
      <?PHP
    } else {
      # code...
      $insert="INSERT INTO `animal`(`id_animal`, `nombre_animal`, `sexo`, `id_lote`, `p_peso`, `peso`, `ultimo_peso`, `gdp_grs`, `ganancias_kgs`, `fecha_nacimiento`, `edad_meses`, `meses_prenez`, `id_raza`, `id_estado`) VALUES ($id_animal,'$nombre','$sexo',$lote,$p_peso,$peso,'$fecha_ultimo_peso',$gdp,$ganancias,'$fecha_nacimiento',$edad,$meses,$raza,$estado)";
      $cone->query($insert);
      $affected = mysqli_affected_rows($cone);
      if($affected >0){
        ?>
        <script>mensaje(3,"REGISTRO COMPLETADO .........")</script>
        <?php
      }

    }


  } else {
    # code...
    ?>
     <script>
     mensaje(1,"CREDENCIALES INVALIDAS");

     </script>

     <?php
  }
}

//function lote

function RegistrarLote($nombre_lote,$descripcion){
  $base= new conexiones();
  $cone=$base->bd();
  if ($nombre_lote!='' && $descripcion!='') {
    # code...
    $query3="SELECT * FROM `lote` WHERE lote.nombre_lote='$nombre_lote' AND lote.descripcion='$descripcion'";
    $lt=$cone->query($query3);
    $cnt3=mysqli_num_rows($lt);
    if ($cnt3 >0) {
      # code...
      ?>
      <script>alert(1,"LOS DATOS  YA FUERON REGISTRADO ")</script>
      <?php
    }else {
      # code...
      $insert2="INSERT INTO lote( nombre_lote, descripcion) VALUES ('$nombre_lote','$descripcion')";
      $cone->query($insert2);
      $affected2= mysqli_affected_rows($cone);
      if($affected2 >0){
        ?>
        <script>alert("REGISTRO COMPLETADO ")</script>
        <?php
      }
    }
  }else {
    # code...
    ?>
     <script>
     alert(2,"CREDENCIALES INVALIDAS ");

     </script>

     <?php
  }
}


/**/

function SelectLote($nom){
  $base= new conexiones();
  $cone=$base->bd();
  $select1="SELECT * FROM lote WHERE lote.nombre_lote LIKE('%$nom%')";
  $lot=$cone->query($select1);
  $nn=mysqli_num_rows($lot);
  if ($nn ==1) {
    # code...
    ?>
    <script>
    mensaje(3,"SE ENCONTRO UN LOTE REGISTRADO");
  
    </script>
  
    <?php
  }else {
    # code...
    ?>
    <script>
    mensaje(2,"LISTADO DE LOTE REGISTRADO");
  
    </script>
  
    <?php
  }
 
  return $lot;
}

function deleteLote($id_lote){
  $base= new conexiones();
  $cone=$base->bd();

  if ($id_lote!='') {
    # code...
    $LotSelect="SELECT * FROM lote WHERE lote.id_lote=$id_lote";
    $cone->query($LotSelect);
    $rows1= mysqli_affected_rows($cone);
    if ($rows1 >0) {
      # code...
      $deleteLote="DELETE FROM lote WHERE lote.id_lote=$id_lote";
      $cone->query($deleteLote);
      $rows2= mysqli_affected_rows($cone);
      if ($rows2 >0) {
       header('location: ../app/lote.php');
  
      }
  }
  }else {
    # code...
    ?>
    <script>mensaje(1,"credenciales invalidades")</script>
    <?php
  }

  
  


}

} //cierre Class
 ?>
