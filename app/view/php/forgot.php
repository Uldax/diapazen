

<?php $this->getHeader(); ?>
        
        <div id="content">            
            <form action="retrievePwd" class="default_form" method="post">
            	<p class="orange_text" >Entrez votre e-mail pour reçevoir un nouveau mot de passe.</p>
	        	<input type="mail" placeholder="E-mail" id="mailRetrieve" name="mailRetrieve" class="text_edit" >
	        	<input class ="orange_button" type="submit" value="Envoyer">
            </form>
        </div>

<?php $this->getFooter(); ?>