window.onload=function(){

    

    document.getElementById("button").onclick=function()
    {
      
        var inputNumber = document.getElementById("numero").value; 
        var inputPass = document.getElementById("nombre").value;
        var sexo = document.getElementById("sexo").value;
        var lote = document.getElementById("lote").value;
        var peso = document.getElementById("peso").value;
     
        var gdp = document.getElementById("gdp").value;
        var ganancias = document.getElementById("ganancias").value;
       
        var edad = document.getElementById("edad").value;
        var prenez = document.getElementById("prenez").value;
        var raza = document.getElementById("raza").value;
        var estado = document.getElementById("estado").value;


        if(inputNumber==''){
          mensaje(2," DIGITE DE NUEVO EL NUMERO  ");
               return false;

        }
        

        if(inputPass==''){
            mensaje(2," DIGITE EL NOMBRE DEL ANIMAL ");
              return false;
           
          
          }

        if(sexo=='') {
            mensaje(2," DIGITE EL SEXO DEL ANIMAL  ");
            return false;
           }
        
           if(lote==''){
            mensaje(2," el numero del lote   ");
               return false;
           
           }
        
           if(peso=='') {
            mensaje(2," DIGITE EL PESO  ");
            return false;
           }

         
        
           if(gdp=='') {
            mensaje(2," DIGITE EL GDP   ");
            return false;
           }
        
           if(ganancias=='') {
            mensaje(2," DIGITE LAS GANANCIAS  ");
            return false;
           }


           if (edad=='') {
            mensaje(2," DIGITE LA EDAD DEL ANIMAL  ");
            return false;
           }

           if (prenez='') {
            mensaje(2," DIGITE EL NO QUE ES  ");
            return false;
           }

           if (raza=='') {
            mensaje(2," SELECCIONE LA RAZA DEL ANIMAL  ");
            return false;
           }

           if (estado=='') {
            mensaje(2," SELECCIONE EL ESTADO QUE ENCUENTA EL ANIMAL  ");
            return false;
           }

        
       
        
          

        if(ESnumero(inputNumber)){
            mensaje(2," EL NUMERO REQUERIDO ES INVALIDO   ");
               return false;
           
           }

           if(ESnombre(sexo)) {
            mensaje(2," DIGITE EL SEXO DEL ANIMAL  ");
            return false;
           }
        
           if(ESnumero(lote)){
            mensaje(2," el numero del lote   ");
               return false;
           
           }
        
           if(ESnumero(peso)) {
            mensaje(2," DIGITE EL PESO  ");
            return false;
           }

          
           if(ESnumero(gdp)) {
            mensaje(2," DIGITE EL GDP   ");
            return false;
           }
        
           if(ESnumero(ganancias)) {
            mensaje(2," DIGITE LAS GANANCIAS  ");
            return false;
           }


           if (ESnumero(edad)) {
            mensaje(2," DIGITE LA EDAD DEL ANIMAL  ");
            return false;
           }

           if (ESnumero(prenez)) {
            mensaje(2," DIGITE EL NO QUE ES  ");
            return false;
           }

           if (ESnumero(raza)) {
            mensaje(2," SELECCIONE LA RAZA DEL ANIMAL  ");
            return false;
           }

           if (ESnumero(estado)) {
            mensaje(2," SELECCIONE EL ESTADO QUE ENCUENTA EL ANIMAL  ");
            return false;
           }
        

    }
}
