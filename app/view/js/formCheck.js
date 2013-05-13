$(function(){
    
    /*
    * V�rification du nom lors de l'inscription
    */
    $("#lastname").blur(function(e){
        var regex = "^[\w\.\']{2,}([\s][\w\.\']{2,})+$";
        if(!$("#lastname").val().match(regex, "gi")){
            $("#lastname").css({borderLeft:"2px solid red"});
            return false
        }
        else{
            $("#lastname").css({borderLeft:""});
            return true
        }
          
    });
    
    /*
     * V�rification du pr�nom lors de l'inscription
     * La syntaxe est l�g�rement diff�rente de celle du nom (pas d'espaces ni d'apostrophes possibles)
     */
    $("#firstname").blur(function(e){
        var regex = "^[a-zA-Z\�����]+[-]?[a-zA-Z\�����]+$";
        if(!$("#firstname").val().match(regex, "gi")){
            $("#firstname").css({borderLeft:"2px solid red"});
            return false
        }
        else{
            $("#firstname").css({borderLeft:""});
            return true
        }
          
    }); 

});