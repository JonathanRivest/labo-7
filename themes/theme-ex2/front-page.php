<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-ex2
 */

get_header();
?>
	<main id="primary" class="site-main">

	<section class="carrousel"> 
	<article class="slide__conteneur">
		        <div class="slide">
				<img src="http://localhost/ex2/wp-content/uploads/2021/03/3.jpg" alt="">
				<div class="slide__info">
		        <p> 582-4W4 - 90h - </p>
				<a href="http://localhost/ex2/2020/10/07/582-4w4-conception-dinterfaces-et-developpement-web/">Conception d’interfaces et développement Web</a>
				<p> Session: 4</p>
				</div>
				</div>
		</article>
		<article class="slide__conteneur">
		        <div class="slide">
				<img src="http://localhost/ex2/wp-content/uploads/2021/03/3.jpg" alt="">
				<div class="slide__info">
		        <p> 582-4W4 - 90h - </p>
				<a href="http://localhost/ex2/2020/10/07/582-4w4-conception-dinterfaces-et-developpement-web/">Conception d’interfaces et développement Web</a>
				<p> Session: 4</p>
				</div>
				</div>
		</article>
		<article class="slide__conteneur">
		        <div class="slide">
				<img src="http://localhost/ex2/wp-content/uploads/2021/03/3.jpg" alt="">
				<div class="slide__info">
		        <p> 582-4W4 - 90h - </p>
				<a href="http://localhost/ex2/2020/10/07/582-4w4-conception-dinterfaces-et-developpement-web/">Conception d’interfaces et développement Web</a>
				<p> Session: 4</p>
				</div>
				</div>
		</article>
		</section>
		<section class="boutonsCarrousel">
		<input type='radio' name="rad-carrousel">
		<input type='radio' name="rad-carrousel">
		<input type='radio' name="rad-carrousel">
</section>
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->


           <section class = "liste-cours">
			<?php
			/* Start the Loop */
            $precedent= "XXXXXXX";

			while ( have_posts() ) :
				the_post();
                $titre_grand = get_the_title();
				$session = substr($titre_grand, 4,1);
				$nbHeure = substr($titre_grand,-4,3);
				$titre = substr($titre_grand,8, -6);
				$sigle = substr($titre_grand,0, 7);
				$typecours = get_field('type de cours'); 
				if ($precedent != $typecours): ?>
				<?php if($precedent != "XXXXXXX"): ?>
				</section>
				<?php endif ?>
                <section>
				<?php endif
				?>
				<h2><?php echo $typecours; ?><h2>
				<article>
				<p> <?php echo $sigle .  " - " . $nbHeure . " - " . $typecours; ?></p>
				<a href = "<?php echo get_permalink(); ?>"><?php echo $titre; ?></a>
				<p> Session: <?php echo $session; ?></p>
				</article>
				<?php
				$precedent = $typecours;
			endwhile; ?>
			</section>
			
        <?php
		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
