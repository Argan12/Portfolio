	<!---- Navbar ---->
	<nav>
		<div class="bars" onclick="naviconTransition(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</nav>
		
	<div id="dropdown_menu">
		<ul class="dd_menu">
			<a href="#" class="menu" onclick="javascript:history.back()"><li class="dd_menu_list">Page précédente</li></a>
			<a href="/" class="menu"><li class="dd_menu_list">Retour à la page d'accueil</li></a>
		</ul>
	</div>
	
	<?= $secondaryTemplateContent; ?>
	
	<!---- Footer ---->
	<footer class="wrapper">
		<ul class="copyright">
			<li class="copyright_list">&copy; <span class="copyright_year"></span> - Argan Piquet</li>
		
			<li class="copyright_list">
				<a href="/legal-mentions" class="copyright_info">Mentions légales</a>
			</li>
		
			<li class="copyright_list">
				<a href="/about" class="copyright_info">&Agrave; propos</a>
			</li>
		</ul>
	</footer>