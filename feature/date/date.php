<!DOCTYPE html>
<html>
<head>
	<title>Date </title>
</head>
<body>
	<div id="content">
		<form onsubmit="return formCheck(this);" id="poll_creation_form" class="default_form" action="connect" method="post">
			<h1 class="small_title">Propositions</h1>
			<div id="choices">
				<div class="choice">
					<label for="datepicker1" class="datepick">Date limite 1<span class="asterisc"> *</span></label>
					<input class="datepicker" name="choices[]" readonly="true"/>
					<a class="grey_button" title="Supprimer" type="button" onclick="manageChoices(this);">x</a>
				</div>
				<div class="choice">
					<label for="datepicker2" class="datepick">Date limite 2<span class="asterisc"> *</span></label>
					<input class="datepicker" name="choices[]" readonly="true" />
					<a class="grey_button" title="Supprimer" type="button" onclick="manageChoices(this);">x</a>
				</div>
			</div>
			<input class="orange_button" type="submit" value="Étape suivante" />
			<a class="orange_button" title="Ajouter un champ" id="add_choice_button" type="button" onclick="manageChoices(this);">+</a>
		</form>
	</div>
	<script src="js/script.js"> </script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script>datepickerLoader();</script>
</body>
</html>