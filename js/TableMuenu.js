window.onload=function(){

    

    document.getElementById("btn2").onclick=function()
    {

       var  InputDocumento = document.getElementById("InputNombre").focus();  
       
      
        
        if(InputDocumento==''){
            mensaje(2," EL CAMPO ESTA VACIO  ..");
               return false;
           }

        if(ESnumero(InputDocumento)){
          mensaje(2," EL DOCUMENTO QUE INGRESASTE NO ES VALIDO INTENTE DE NUEVO ..");
               return false;

        } 
        
        i

    }

}