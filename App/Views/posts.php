<?php ob_start(); ?>
<?php ob_start(); ?>

<?php
	$title = $post['post_title'].' | Argan Piquet';
	$stylesheets = '<link rel="stylesheet" href="/Web/css/posts_view_stylesheet.css"  />';
?>
	<section id="main">
		<h3>Mes posts</h3>
		
		<div id="posts">
			<div class="posts_header">
				<h4 class="post_title"><?= $post['post_title'];?></h4>
				<p class="post_date">Le <?= $post['post_date'];?></p>
			</div>

			<div class="posts_content">
				<?php 
					if (($post['post_id'] != NULL) && (preg_match("#^[0-9]$#", $post['post_id'])))
					{
						if ($post['post_title'] != NULL && $post['post_content'] != NULL) 
						{ ?>
							<p><?= $post['post_content']; ?></p>
							<?php 
						} else { 
							echo '<p>Aucun post n\'a été publié</p>'; 
						}
					} else { 
						header('Location:/Portfolio/posts'); 
					}					
				?>
			</div>
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