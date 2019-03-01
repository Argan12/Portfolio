<?php ob_start(); ?>
<?php
	if (!file_exists('visits.txt'))
	{
		$counter = fopen('visits.txt', 'r+');
		$count = 1;
		setcookie('visit', 'new', time() + 365*24*3600);
	} else {
		$counter = fopen('visits.txt', 'r+');
		$count = fgets($counter, 255);
		
		if (empty($_GET['visit']))
		{
			setcookie('visit', 'new', time() + 365*24*3600);
			$count++;
		}
	}
	
	fseek($counter, 0);
	fputs($counter, $count);
	fclose($counter);
?>

<?php 
	$title = 'Argan Piquet';
	$stylesheets = '<link rel="stylesheet" href="Web/css/main_css.css"  />';
?>

<?php 
 	function chainToCut($chainToCut, $strlen = 140) {
		if (strlen($chainToCut) > $strlen) {
			$chainToCut = substr($chainToCut, 0, $strlen);
			$space = strrpos($chainToCut, " ");
			$text = substr($chainToCut, 0, $space); 
			$chainToCut = $text."...";
		}
		return $chainToCut;
	} 
?>

	<?php if (isset($_COOKIE['visit'])) { ?>
	<script type="text/javascript">alert("Toujours pas satisfait ? N'hésitez pas à me contacter !");</script>
	<?php } else { ?>
	<script type="text/javascript">alert("Félicitations ! Vous êtes le " + <?= $count ?> + "<sup>e</sup> visiteur ! Vous avez gagné un alternant !");</script>
	<?php } ?>

	<!---- Navbar ---->
	<nav>
		<ul class="container">
			<li><a onclick="document.getElementById('presentation').style.display='block'" class="navbar_actions presentation responsive_label">Présentation</a></li>
			<li><a href="#about" class="navbar_actions"><span class="responsive_label">Mon parcours</span></a></li>			
			<li><a href="#projects" class="navbar_actions"><span class="responsive_label">Mes projets</span></a></li>			
			<li><a href="#skills" class="navbar_actions"><span class="responsive_label">Mes compétences</span></a></li>
			<li><a href="#posts_section" class="navbar_actions"><span class="responsive_label">Mes posts</span></a></li>
			<li><a href="#contact" class="navbar_actions"><span class="responsive_label">Contact</span></a></li>
		</ul>
		
		<div class="bars" onclick="naviconTransition(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</nav>
		
	<div id="dropdown_menu">
		<ul class="dd_menu">
			<a onclick="document.getElementById('presentation').style.display='block'" class="presentation"><li class="dd_menu_list">Présentation</li></a>
			<a href="#about" class="menu"><li class="dd_menu_list">Mon parcours</li></a>
			<a href="#projects" class="menu"><li class="dd_menu_list">Mes projets</li></a>
			<a href="#skills" class="menu"><li class="dd_menu_list">Mes compétences</li></a>
			<a href="#posts_section" class="menu"><li class="dd_menu_list">Mes billets</li></a>
			<a href="#contact" class="menu"><li class="dd_menu_list">Contact</li></a>
		</ul>
	</div>
		
	<!-- Modal Box -->	
	<div id="presentation" class="modal_box"> 
		<div class="modal_box_content box_animate_top box_card4">
			<header class="modal_box_content" id="box_color">
				<span onclick="document.getElementById('presentation').style.display='none'" class="box_button box_display_topright">&times;</span>
					<h4 class="modal">Présentation</h4>
			</header>
			
			<div class="box_container">
				<p class="headline">Argan Piquet &bull; <span id="age"></span> ans <!--age JS function--> &bull; Rouen &bull; Permis B</p>
				<p class="modal_content">Actuellement étudiant en formation de Développeur Informatique au CESI de Rouen, je suis à la recherche d'un stage ou d'un contrat d'alternance afin de mener à bien mon projet professionnel.</p>
				<p class="modal_content">J'ai acquis des connaissances dans certains langages informatiques grâce à mon année de licence à l'université de Brest, ainsi qu'en autodidacte<br/>Passionné de Web, je souhaiterais me spécialiser, à terme, dans le développement en PHP.</p>
			</div>
			
			<footer class="box_container modal_footer" id="box_color"></footer>
		</div>
	</div>
	<!----->
	
	<!---- Introduction ---->
	<section id="introducing">
		<div id="pic">
			<div class="rounded_image" style="background:url('Web/img/12-1B&W.jpg') no-repeat;">&nbsp;</div>
		</div>
		
		<div id="description">
			<h2>Argan Piquet</h2>
			
			<p class="description">Passionné de Web, je suis actuellement étudiant en formation de Développeur Informatique au CESI. &Eacute;tant à la recherche d'un stage ou d'un contrat d'alternance, je vous propose de découvrir mon site Web.</p>
		</div>
	</section>
	
	<section class="wrapper" id="about">
		<h3>Mon parcours</h3>
		
		<div class="stickers_wrapper">
			<div class="info">
				<div class="logo">
					<div class="logo_dantec"><span class="label">Le Dantec</span></div>
				</div>
				
				<div class="entitled about_entitled_height">
					<p class="studies">Baccalauréat Economique et Social</p>
					<p class="school">Lycée Félix Le Dantec</p>
					<p class="background_timeline">Septembre 2015 à juin 2016</p>
				</div>
			</div>
			
			<div class="info">
				<div class="logo">
					<div class="logo_ubo"><span class="label">UBO</span></div>
				</div>
				
				<div class="entitled about_entitled_height">				
					<p class="studies">Licence d'Informatique</p>
					<p class="school">Université de Bretagne Occidentale</p>
					<p class="background_timeline">Septembre 2017 à juin 2018</p>
				</div>
			</div>
			
			<div class="info">
				<div class="logo">
					<div class="logo_cesi"><span class="label">CESI</span></div>
				</div>
				
				<div class="entitled about_entitled_height">
					<p class="studies">Développeur Informatique</p>
					<p class="school">CESI</p>
					<p class="background_timeline">Depuis septembre 2018</p>
				</div>
			</div>
		</div>
	</section>
	
	<!---- Projects ---->
	<section class="wrapper" id="projects">
		<h3>Mes projets</h3>
		
		<div class="stickers_wrapper">
			<div class="info">				
				<div class="screenshot_project">
					<div class="image_properties size project1"><span class="label">Social network PHP</span></div>
				</div>
				
				<div class="entitled projects_entitled_height">
					<p class="entitled_project">Réseau social</p>
					<p class="subtext">Projet de réseau social avec système de posts, contacts, gestion des membres..</p>
					<p class="tools">Langages utilisés : HTML, CSS, JavaScript, PHP, SQL(MySQL)</p>
				</div>
			</div>
			
			<div class="info">				
				<div class="screenshot_project">
					<div class="image_properties size project2"><span class="label">Blog test</span></div>
				</div>
				
				<div class="entitled projects_entitled_height">
					<p class="entitled_project">Blog</p>
					<p class="subtext">Exemple de blog développé en PHP, utilisant la technologie MVC.</p>
					<p class="tools">Langages utilisés : HTML, CSS, PHP, SQL(MySQL)</p>
				</div>
			</div>
			
			<div class="info">				
				<div class="screenshot_project">
					<div class="image_properties size project3"><span class="label">CV Web</span></div>
				</div>
				
				<div class="entitled projects_entitled_height">
					<p class="entitled_project">Curriculum Vitae</p>
					<p class="subtext">Première version de mon CV au format Web</p>
					<p class="tools">Langages utilisés : HTML, CSS, JavaScript, PHP</p>
				</div>
			</div>
		</div>
		
		<a href="https://github.com/Argan12" class="github" title="Github" target="_blank">
			<div class="big_btn">Voir mes projets</div>
		</a>
	</section>
	
	<!---- Skills ---->
	<section class="wrapper" id="skills">
		<h3>Mes compétences</h3>

		<div class="stickers_wrapper">
			<div class="info">
				<div class="logo">
					<div class="frontend_logo"><span class="label">Front-End</span></div>
				</div>
				
				<div class="entitled skills_entitled_height">
					<p class="entitled_skill">Front-End</p>
					<p class="skills_list">HTML/CSS<br/><span class="level">Réalisation de sites Web</span><br/>JavaScript<br/><span class="level">Validation de formulaires</span></p>						
				</div>
			</div>
			
			<div class="info">
				<div class="logo">
					<div class="backend_logo"><span class="label">Back-End</span></div>
				</div>
				
				<div class="entitled skills_entitled_height">
					<p class="entitled_skill">Back-End</p>
					<p class="skills_list">PHP/MySQL<br/><span class="level">Connaissances des principes MVC et POO, et connaissance du framework Symfony</span><br/>Java<br/><span class="level">Réalisation d'un convertisseur de température</span><br/>Python<br/><span class="level">Réalisation d'un jeu en mode console</span></p>
				</div>
			</div>
			
			<div class="info">
				<div class="logo">
					<div class="programming_logo"><span class="label">Programming</span></div>
				</div>
				
				<div class="entitled skills_entitled_height">
					<p class="entitled_skill">Programmation</p>
					<p class="skills_list">C<br/><span class="level">Réalisation de jeux en mode console</span><br/>Visual Basic<br/><span class="level">Notions apprises à l'université</span><br/>Shell Scripting<br/><span class="level">Savoir se déplacer dans l'arborescence</span></p>
				</div>
			</div>
		</div>
		
		<a href="CV-download" class="cv">
			<div class="big_btn">Voir mon CV</div>
		</a>
	</section>
	
	<!---- Posts ---->
	<section class="wrapper" id="posts_section">
		<h3>Mes posts</h3>
		
		<div id="posts">
			<div class="posts_header"><h4>Liste des posts :</h4></div>
			
			<?php while ($posts = $getPosts->fetch()) { ?>
			<div class="posts_content">
				<?php if ($posts['post_title'] != NULL && $posts['post_content'] != NULL) { ?>
				<h5><?= $posts['post_title']; ?></h5>
				<p><?= chainToCut($posts['post_content']) ?></p>
				<?php } else { echo '<p>Aucun post n\'a été publié</p>'; } ?>
				<a href="posts/<?= $posts['post_id']; ?>" class="small_btn">Lire plus</a>
			</div>
			<?php } $getPosts->closeCursor(); ?>
		</div>
		
		<a href="posts" class="big_btn">Voir plus</a>
	</section>
	
	<!---- Contact ---->
	<section class="wrapper" id="contact">
		<h3>Une question ?</h3>
		<p class="subtitle">N'hésitez pas à me contacter !</p>
		
		<div id="contact_wrapper">
			<span id="errorMessage">Le formulaire contient des erreurs</span>		
			<span id="validMsg">Votre message a bien été envoyé. Merci de m'avoir contacté !</span>
			
			<span id="errorMessage" style="color:red"><?= $errorMessage ?></span>
			
			<form method="post" action="message-sent" onsubmit="return displayError(this)" name="contactForm" id="contactForm">
				<p id="test"></p>
				<input type="text" id="firstname" name="firstname" placeholder="Prénom"/>
				<input type="text" id="lastname" name="lastname" placeholder="Nom"/>
				<input type="email" id="email" name="mail_address" placeholder="Adresse e-mail"/>
				<input type="text" id="object" name="object" placeholder="Objet"/>
				<textarea id="message" name="message" placeholder="Votre message"></textarea><br/>
			
				<input type="submit" onclick="displayError()" value="Envoyer"/>
				<input type="reset" value="Supprimer"/>
			</form>
		</div>
	</section>
	
	<!---- Footer ---->
	<footer class="wrapper">
		<div id="footer_container">
			<h4>Visible sur les réseaux sociaux</h4>
		
			<ul class="social_networks">
				<li><a href="https://www.linkedin.com/in/argan-piquet" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square social_transition"></i></a></li>					
				<li class="viadeo_gateway"><a href="http://fr.viadeo.com/fr/profile/argan.piquet" title="Viadeo" target="_blank"><i class="fa fa-viadeo-square social_transition"></i></a></li>					
				<li class="github_gateway"><a href="https://github.com/Argan12" title="Github" target="_blank"><i class="fa fa-github-square social_transition"></i></a></li>
			</ul>
		</div>
		
		<!--
			* LinkedIn : https://www.linkedin.com/in/argan-piquet-53538615a
			* Viadeo : http://fr.viadeo.com/fr/profile/argan.piquet
			* Github : https://github.com/Argan12
		-->
		
		<ul class="copyright">
			<li class="copyright_list">&copy; <span class="copyright_year"></span> - Argan Piquet</li>		
			<li class="copyright_list"><a href="legal-mentions" class="copyright_info">Mentions légales</a></li>
			<li class="copyright_list"><a href="about" class="copyright_info">&Agrave; propos</a></li>
		</ul>
	</footer>

<?php $content = ob_get_clean(); ?>
<?php require('App/Views/Templates/mainTemplate.php'); ?>