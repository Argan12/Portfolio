<?php ob_start(); ?>
<?php ob_start(); ?>

<?php
	$title = '&Agrave; propos | Argan Piquet';
	$stylesheets = '<link rel="stylesheet" href="Web/css/admin_page_stylesheet.css"  />';
?>
	
	<!--	<section id="about_website">
		<div class="aboutpage_wrapper">
			<h2>&Agrave; propos de mon portfolio</h2>
		
			<p class="about_desc">Bienvenue sur la page &laquo;&nbsp;&Agrave; propos&nbsp;&raquo; de mon portfolio ! Ici, vous découvrirez un peu plus qui je suis. Vous en saurez plus également sur la manière dont ce site Web a été développé et l'objectif que je souhaiterais atteindre grâce à ce portfolio. Je vous souhaite une bonne lecture !</p>
		</div>
	</section>	-->
	
	<section id="main">
		<h3>Espace administrateur</h3>
		
		<form action="#" method="post">
			<label for="mail_address">Adresse e-mail :</label><br/>
			<input type="email" name="mail_address" /><br/>
			<label for="password">Mot de passe :</label><br/>
			<input type="password" name="password"/><br/>
			<br/>
			<input type="submit" value="Se connecter"/>
		</form>
	</section>
	
<?php
	$secondaryTemplateContent = ob_get_clean();
	require('App/Views/Templates/secondaryTemplate.php');
?>

<?php
	$content = ob_get_clean();
	require('App/Views/Templates/mainTemplate.php');
?>