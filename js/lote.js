window.onload=function(){

    

    document.getElementById("BuscarL").onclick=function()
    {

        var inputNumber = document.getElementById("loteB").value; 
        
     
     
        if(inputNumber==''){
             mensaje(2," CAMBO VACIO INTENTE DE NUEVO  ");
               return false;
            
           
           }
        
        if(ESnombre(inputNumber)){
            mensaje(2," SE REQUIERE SOLO NOMBRE  ");
               return false;
           
           }
        
        
        
    }
}
