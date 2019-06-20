window.onload=function(){

    

    document.getElementById("button").onclick=function()
    {

        var inputNumber = document.getElementById("inputUser").value; 
        var inputPass = document.getElementById("inputPass").value;
     
        if(inputNumber==''){
          mensaje(2," INGRESE SU USUARIO ");
               return false;

        }
        
        if(inputPass==''){
             mensaje(2," INGRESE SU CONTRASEÑA ");
               return false;
            
           
           }
        
        if(ESnumero(inputNumber)){
            mensaje(2," INGRESASTE UN USUARIO INCORRECTO  ");
               return false;
           
           }
        
        
        
    }
}
