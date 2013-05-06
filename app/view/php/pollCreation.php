<?php $this->getHeader(); ?>

<?php
    if(!isset($poll_title)) $poll_title="Titre";
    if(!isset($poll_description)) $poll_description="Description";

?>
        <div id="content">
            <div id="ariadne_thread"> 
                <a class="orange_ariadne" href="#">Création</a>
                <a class="grey_ariadne" href="#">Connexion</a>
                <a class="grey_ariadne" href="#">Partage</a>
            </div>
            <form id="poll_creation_form" action="connect" method="post">
                <h1 class="small_title">Paramètres :</h1>
                <input class="big_text" id="id_title_input" name="title_input" type="text" placeholder="Titre" value=<?php echo $poll_title;?>>
                <textarea class="text" id="id_description_input" name="description_input" placeholder="Description" value=<?php echo $poll_description;?>></textarea>
                <h1 class="small_title">Vos choix :</h1>
                <div class="choice">
                    <input class="text" type="text" name="choix" value="Choix 1">
                    <input class="grey_small_button" type="button" value="x">
                </div>
                <div class="choice">
                    <input class="text" type="text" name="choix" placeholder="Choix 2">
                    <input class="orange_small_button" type="button" value="+">
                </div>
                <input class="orange_button" type="submit" value="Etape suivante">
            </form>
        </div>
        
<?php $this->getFooter(); ?>