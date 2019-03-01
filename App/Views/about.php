<?php ob_start(); ?>
<?php ob_start(); ?>

<?php
	$title = '&Agrave; propos | Argan Piquet';
	$stylesheets = '<link rel="stylesheet" href="/Web/css/about_page_stylesheet.css"  />';
?>
	
	<section id="about_website">
		<div class="aboutpage_wrapper">
			<h2>&Agrave; propos de mon portfolio</h2>
		
			<p class="about_desc">Bienvenue sur la page &laquo;&nbsp;&Agrave; propos&nbsp;&raquo; de mon portfolio ! Ici, vous découvrirez un peu plus qui je suis. Vous en saurez plus également sur la manière dont ce site Web a été développé et l'objectif que je souhaiterais atteindre grâce à ce portfolio. Je vous souhaite une bonne lecture !</p>
		</div>
	</section>
	
	<section id="main">
		<h3>Qui suis-je ?</h3>
		
		<div class="main_wrapper">
			<p class="about_desc">Je m'appelle Argan Piquet. J'ai découvert l'informatique lors de ma licence portail MPI (Mathématique, Physique, Informatique) à l'<a href="https://www.univ-brest.fr/" class="p_link" target="_blank">université de Brest</a>. Dès lors, je me suis trouvé une passion pour ce domaine. J'ai développé des sites Web personnels, des jeux en mode console, des petits programmes.. Je me suis également formé en autodidacte sur plusieurs langages.<br/>Depuis septembre 2018, je suis étudiant au <a href="https://www.cesi.fr/" class="p_link" target="_blank">CESI</a> en formation de Développeur Informatique. Nous sommes formés sur les langages et les technologies informatiques, et nous avons l'occasion de mettre ces théories en pratique durant des semaines projet.<br/>Ma formation de Développeur Informatique se faisant en alternance, je suis actuellement à la recherche d'une entreprise. C'est pourquoi j'ai développé ce site Web.</p>
		</div>
		
		<h3>Mon portfolio</h3>
		
		<div class="main_wrapper">
			<p class="about_desc">Mon site Web a été développé dans le cadre d'un projet scolaire en autonomie.<br/>Dans ce portfolio, vous pourrez trouver un résumé de mon parcours dans la barre de navigation. Lorsque vous descendez sur la page principale, je vous présenterai mon cursus scolaire. Ensuite, vous aurez une vision de mes projets que j'ai réalisé, avec un lien vers mon compte GitHub. Mes compétences dans les langages de programmation sont également détaillées, accompagnées d'un lien vers mon CV. Dans un dernier temps, un formulaire de contact vous permettra de me laisser un message.<br/><br/>Ce site a été publié le 8 novembre 2018 et est régulièrement mis à jour.</p><br/>
			
			<?php
				$homePage = 'App/Views/homepage.php';
				$aboutPage = 'App/Views/about.php';
				$legalMentionsPage = 'App/Views/legalMentions.php';
				$errorPage = 'App/Views/404.php';
				$postsView = 'App/Views/postsView.php';
				$posts = 'App/Views/posts.php';
				
				if (file_exists($homePage) && file_exists($errorPage) && file_exists($aboutPage) && file_exists($legalMentionsPage) && file_exists($postsView))
				{
					if (filemtime($homePage < $aboutPage))
					{
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($aboutPage)).'</p>';
					} else if ($homePage >= $aboutPage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($homePage)).'</p>';	
					} else if ($aboutPage < $legalMentionsPage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($legalMentionsPage)).'</p>';
					} else if ($aboutPage >= $legalMentionsPage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($aboutPage)).'</p>';
					} else if ($legalMentionsPage < $errorPage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} else if ($legalMentionsPage >= $errorPage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($legalMentionsPage)).'</p>';
					} else if ($errorPage >= $postsView) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} else if ($errorPage < $postsView) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($homePage)).'</p>';	
					} else if ($postsView >= $posts) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} else if ($postsView < $posts) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} else if ($posts >= $homePage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} else if ($posts < $homePage) {
						echo '<p style="text-align:center">Dernière mise à jour : '.date("d/m/Y", filemtime($errorPage)).'</p>';
					} 
				}
			?>
		</div>
	</section>
	
<?php
	$secondaryTemplateContent = ob_get_clean();
	require('App/Views/Templates/secondaryTemplate.php');
?>

<?php
	$content = ob_get_clean();
	require('App/Views/Templates/mainTemplate.php');
?>