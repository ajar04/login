window.onload=function(){

    

    document.getElementById("btn1").onclick=function()
    {

       var  rol= document.getElementById("inputRol").value;  
        var documento= document.getElementById("inputDocument").value; 
        var inputNumber = document.getElementById("inputNumber").value; 
        var inputGrado = document.getElementById("inputGrado").value; 
        var inputNombre = document.getElementById("inputNombre").value; 
        

        if(rol==''){
          mensaje(2," SELECCIONE EL ROL DE LA PERSONA  Y INTENTE DE NUEVO.. ");
               return false;

        }

        if(documento==''){
          mensaje(2,"SELECCIONE EL DOCUMENTO DE LA PERSONA Y  INTENTE DE NUEVO  ");
               return false;
        }

         if(inputNumber==''){
          mensaje(2,"DIGITE EL DOCUMENTO DE IDENTIDAD Y  INTENTE DE NUEVO  ");
               return false;
        }

        if(inputNombre==''){
          mensaje(2,"DIGITE EL NOMBRE DEL APRENDIZ O DOCENTE Y  INTENTE DE NUEVO  ");
               return false;
        }
        
 if(inputGrador==''){
          mensaje(2,"SELECCIONE EL GRADO  Y  INTENTE DE NUEVO  ");
               return false;
        }

        if(ESnumero(inputNumber)){

            mensaje(1,"Email no valido");
            return false;
        }

        }

}