<?php ob_start(); ?>
<?php ob_start(); ?>

<?php
	$title = 'Mes billets | Argan Piquet';
	$stylesheets = '<link rel="stylesheet" href="/Web/css/posts_view_stylesheet.css"  />';
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
	<section id="main">
		<h3>Mes billets</h3>
		
		<div id="posts">
			<div class="posts_header"><h4>Liste des billets :</h4></div>
	
			<?php while ($getPosts = $getAllPosts->fetch()) { ?>
			<div class="posts_content">
				<?php if ($getPosts['post_title'] != NULL && $getPosts['post_content'] != NULL) { ?>
				<h5><?= $getPosts['post_title']; ?></h5>
				<p><?= chainToCut($getPosts['post_content']); ?></p>
				<?php } else { echo '<p>Aucun post n\'a été publié</p>'; } ?>
				<a href="posts/<?= $getPosts['post_id']; ?>" class="small_btn">Lire plus</a>
			</div>
			<?php } $getAllPosts->closeCursor(); ?>
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