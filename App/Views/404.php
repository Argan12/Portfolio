<?php ob_start(); ?>
<?php ob_start();?>

<?php
	$title = 'Page introuvable';
	$stylesheets = '<link rel="stylesheet" href="/Web/css/404.css"  />';
?>
	<div id="main">	
		<div id="content_wrapper">		
			<h2>Page introuvable</h2>
			<p>La page que vous souhaitez consulter n'existe pas.<br/>Le lien a peut-être été rompu, une erreur est peut-être contenue dans l'URL ou bien la page a probablement été supprimée.</p>			
			
			<a href="#" class="back_page" onclick="javascript:history.back()"><div class="back">Page précédente</div></a>
			<div class="smiley"><img src="/Web/img/smiley.jpg" width="300px" height="300px"/></div>
		</div>
	</div>

<?php
	$secondaryTemplateContent = ob_get_clean();
	require('App/Views/Templates/secondaryTemplate.php');
?>
	
<?php
	$content = ob_get_clean();
	require('App/Views/Templates/mainTemplate.php');
?>