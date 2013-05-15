$(function(){
    
    /*
    * V�rification du nom lors de l'inscription
    */
    $("#user_lastname").blur(function(e){
        var regex = "^[\w\.\']{2,}([\s][\w\.\']{2,})+$";
        if(!$("#user_lastname").val().match(regex, "gi")){
            $("#user_lastname").css({borderLeft:"2px solid red"});
            return false
        }
        else{
            $("#user_lastname").css({borderLeft:"2px solid green"});
            return true
        }
          
    });
    
    /*
     * V�rification du pr�nom lors de la modif des donn�es perso
     * La syntaxe est l�g�rement diff�rente de celle du nom (pas d'espaces ni d'apostrophes possibles)
     */
    $("#user_firstname").blur(function(e){
        var regex = "^[a-zA-Z\�����]+[-]?[a-zA-Z\�����]+$";
        if(!$("#user_firstname").val().match(regex, "gi")){
            $("#user_firstname").css({borderLeft:"2px solid red"});
            return false
        }
        else{
            $("#user_firstname").css({borderLeft:"2px solid green"});
            return true
        }
          
    }); 
    
    /*
     * V�rification de la syntaxe du mail lors de la modif des donn�es perso
     */
    $("user_mail").blur(function(e){
        var regex = "^[a-zA-Z0-9\-_]+[a-zA-Z0-9\.\-_]*@[a-zA-Z0-9\-_]+[.][a-zA-Z\.\-_]{1,}[a-zA-Z\-_]+";
        if(!$("#user_mail").val().match(regex, "gi")){
            $("#user_mail").css({borderLeft:"2px solid red"});
            return false
        }
        else{
            $("#user_mail").css({borderLeft:"2px solid green"});
            return true
        }
    });
});