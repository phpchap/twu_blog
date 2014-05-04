<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<script>
//    window.fbAsyncInit = function() {
//        FB.init({
//            appId      : '608782162532248',
//            xfbml      : true,
//            status     : true,
//            version    : 'v2.0'
//        });
//    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=608782162532248&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>



<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>
<?php
/*
<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
		<div class="clear"></div>
	</div><!--/container -->
</header><!-- #masthead .site-header -->
*/ ?>
<div class="toolbar-wrapper">
    <div class="toolbar">
        <div style="float:left" class="span6">
            <nav class="main">
                <ul class="horizontal">
                    <li>
                        <a class=" current" href="http://www.toowrappedup.com/"><span>Home</span></a>
                    </li>
                    <li>
                        <a class="" href="http://www.toowrappedup.com/collections/all"><span>Shop</span></a>
                    </li>
                    <li>
                        <a class="" href="http://blog.toowrappedup.com"><span>Blog</span></a>
                    </li>
                    <li>
                        <a class="" href="http://www.toowrappedup.com/pages/about-us"><span>About Us</span></a>
                    </li>
                </ul>
            </nav>
            <nav class="mobile clearfix">
                <select class="fl" id="main_navigation" name="main_navigation">
                    <option value="http://www.toowrappedup.com/">Home</option>
                    <option value="http://www.toowrappedup.com/collections/all">Catalog</option>
                    <option selected="selected" value="http://blog.toowrappedup.com">Blog</option>
                    <option value="http://www.toowrappedup.com/pages/about-us">About Us</option>
                    <option value="http://www.toowrappedup.com/cart">Your cart</option>
                </select>
            </nav>
        </div>
<!--        <div style="float:right;margin-top:10px" class="span6">-->
<!--            <ul class="unstyled">-->
<!--                <li><span class="icon-cart"></span><a title="Shopping Cart" class="cart" href="http://www.toowrappedup.com/cart">&nbsp;</a></li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
</div>
<div style="clear:both">&nbsp;</div>
<div class="container">

	<div id="primary">
		<div id="content" role="main">

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_home() || is_archive() ) {
	
?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
                        <?php /*
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>
						</div><!--/post-meta -->
						*/ ?>

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->


					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		
	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div>
                            <div style="clear:both">&nbsp;</div>
                            <div class="fb-comments" data-href="http://www.toowrappedup.com/blog/<?php the_ID(); ?> " data-numposts="10" data-colorscheme="light"></div>
                            <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->


                    </article>

				<?php endwhile; ?>
				
				<?php
                    /*
                    if ( comments_open() || '0' != get_comments_number() )
                    comments_template( '', true );
                    */
				?>

            <!-- pagintation -->
            <div id="pagination" class="clearfix">
                <div class="past-page"><?php previous_posts_link( 'New Posts &raquo;' ); ?></div>
                <div class="next-page"><?php next_posts_link( ' &laquo; Older Posts' ); ?></div>
            </div><!-- pagination -->

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>
	
<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?> 
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<div class="footer-wrapper">
    <footer>
        <div class="row">

            <div class="span12 full-border"></div>

            <!-- Begin latest blog post -->

            <div class="span4">
                <div class="p30">
                    <h4>Latest news</h4>

                    <p class="p10"><strong>Blog Title 1</strong></p>

                    <p class="p10"><strong>Blog Title 2</strong></p>
                </div>
            </div>
            <!-- End latest blog post -->

            <!-- Begin footer navigation -->
            <div class="span4 footer-menu">
                <h4>Quick Links</h4>
                <ul class="unstyled">

                    <li><a href="/" title="Home">Home</a></li>

                    <li><a href="/collections/all" title="Catalog">Catalog</a>
                    </li>

                    <li><a href="http://blog.toowrappedup.com" title="Blog">Blog</a></li>

                    <li><a href="/pages/about-us" title="About Us">About Us</a>
                    </li>

                </ul>
            </div>
            <!-- End footer navigation -->

            <!-- Begin newsletter/social -->
            <div class="span4">


                <div class="p30">
                    <h4>Newsletter</h4>

                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                        <input type="email" value="" placeholder="Email Address" name="EMAIL" id="mail"><input type="submit" class="btn newsletter" value="Subscribe" name="subscribe" id="subscribe">
                    </form>
                </div>


                <div class="clearfix">

                    <h4>Follow us</h4>
                    <a href="https://www.twitter.com/toowrappedup" title="Too Wrapped Up on Twitter" class="icon-social twitter">Twitter</a>
                    <a href="https://www.facebook.com/pages/Toowrappedup/815504925143818" title="Too Wrapped Up on Facebook" class="icon-social facebook">Facebook</a>


                </div>

            </div>
            <!-- End newsletter/social -->

            <!-- Begin copyright -->
            <div class="span12 tc copyright">
                <p>Copyright © 2014 Too Wrapped Up</p>
                <ul class="credit-cards clearfix">

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_american_express.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_diners_club.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_discover.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_jcb.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_master.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_paypal.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                    <li><img width="50" src="//cdn.shopify.com/s/global/payment_types/creditcards_visa.svg?01bc7632282325de29b3f2baf57077f1c06ff64f">
                    </li>

                </ul>
                <!-- /.credit-cards -->

            </div>
            <!-- End copyright -->

        </div>
    </footer>
</div>

</body>
</html>
