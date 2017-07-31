<?php function sp_header_image () { ?>

	<div class="dotted header-back">

	<?php if(get_theme_mod('header_logo_image')) : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('header_logo_image'); ?>" alt="logo" /></a></h1>
	<?php else : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php endif; ?>

	<?php $seos_photography_description = get_bloginfo( 'description', 'display' );
	if ( $seos_photography_description || is_customize_preview() ) : ?>
		<p class="site-description"><?php echo $seos_photography_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>

	<div class="sous_titre">
		<div class="potar-g">
			<img class="volume" src="img/volume.png" alt="" width="150px" height="150px">
			<img class="curseurs" src="img/curseurs-g.png" alt="" width="195px" height="165px">
		</div>
		<div class="sous-titre-centre">
			<p>Studio 7 met sa singularité à votre service et dynamise votre univers musical pour vous différencier, dans le respect de l’ADN de la marque.</p>
			<img src="img/vumetre.png" alt="" width="642px" height="116px">
			<p>Votre projet nécessite une VOIX OFF&nbsp;?<br>Pub, radio, TV, institutionnel, voice over, audiotel, livres-audios, doublage, vidéos, narration, documentaire, bande annonce, habillage vocal…</p>
		</div>
		<div class="potar-d">
			<img class="volume" src="img/volume.png" alt="" width="150px" height="150px">
			<img class="curseurs" src="img/curseurs-d.png" alt="" width="195px" height="165px">
		</div>
	</div>

	<?php if(!get_theme_mod('hide_buttn_1')):
		if(get_theme_mod('seos_photography_button_text1')) : ?>
			<div class="sp-button1">
				<a href="<?php echo esc_url(get_theme_mod('seos_photography_button_url1')); ?>"><?php echo esc_attr(get_theme_mod('seos_photography_button_text1')); ?></a>
			</div>
		<?php else : ?>
			<div class="sp-button1">
				<a href="#">Read More</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>


	<?php if(!get_theme_mod('hide_buttn_2')):
		if(get_theme_mod('seos_photography_button_text2')) : ?>
			<div class="sp-button2">
				<a href="<?php echo esc_url(get_theme_mod('seos_photography_button_url2')); ?>"><?php echo esc_attr(get_theme_mod('seos_photography_button_text2')); ?></a>
			</div>
		<?php else : ?>
			<div class="sp-button2">
				<a href="#">Read More</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	</div>

<?php }


function sp_title_and_description () { ?>

	<div class="header-img" style="background-image: url('<?php header_image(); ?>'); min-height:<?php echo esc_attr(get_custom_header()->height); ?>%">
		<div class="dotted header-back">

			<?php if(get_theme_mod('header_logo_image')) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('header_logo_image'); ?>" alt="logo" /></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>

				<?php $seos_photography_description = get_bloginfo( 'description', 'display' );
				if ( $seos_photography_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $seos_photography_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>

				<?php if(is_home()) : ?>
					<div class="sous_titre">Studio 7</div>
				<?php endif; ?>

		</div>
	</div><!-- .site-branding -->

<?php }
