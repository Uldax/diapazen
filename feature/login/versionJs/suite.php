
<?php 
session_start();
function debug($var){
		$debug=debug_backtrace();
		echo '<p>&nbsp;</p><p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle(); return false;">
		<strong>'.$debug[0]['file'].'</strong> l.'.$debug[0]['line'].'</a></p>';
		echo "<ol style='display:none;'>"; //Liste ordonée des fichié appelé
		foreach ($debug as $key => $value) {
			if($key>0){
				echo '<li><strong>'.$value['file'].'</strong> l.'.$value['line'].'</li>';
			}			
		}
		echo "</ol><pre>";
		print_r($var);
		echo "</pre>";	
}

debug($_SESSION);

 ?>