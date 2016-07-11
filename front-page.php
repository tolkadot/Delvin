<?php /* Template Name: Front Page Template */ 


// Force full width 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' ); 
// Remove Page Title 
remove_action( 'genesis_entry_header', 'genesis_do_post_title'                 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open',  5  );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_header', 'genesis_do_header' );

/*****************Adding a custom class to the front-page body for styling******************/

add_filter( 'body_class', 'dodder_body_class' );
function dodder_body_class( $classes ) {
	
	$classes[] = 'frontPageBody';
	return $classes;
	
}

/**
 * Add a DIV to the front page for the Heading
 *
 */

function frontPageHeading() {




}
add_action( 'genesis_after_header', 'frontPageHeading' );
?>

<nav>
<ul>
 	<li><a href="home.html">home</a></li>
 	<li><a href="portfolio.html">portfolio</a></li>
 	<li><a href="#contact">contact </a></li>
 	<li><a href="#about">about </a></li>
</ul>
</nav><section id="home">
<h1 id="banner">tolka</h1>
<h2>web design</h2>
</section>

<section id="blurb">
<div class="blurbText floatLeft"> 
I love to help people with their web presence.  
</br>
Together we will sit down and work out what you would like your website to achieve, who your target audience is and how we can best pitch your business to the world.
</br> 
Specialising in building customised Wordpress themes to suit your unique needs. I also have experience with Big Cartel and Shopify customisation.   </div> 
<div class="blurbText floatLeft"> 
Are you a graphic designer with more work than time. 
</br>
With skills in HTML5, CSS, Javascript and PHP I can help you out.  I am comfortable building Wordpress themes or working with existing ones. 
</br> 
Specialising in the Genesis Framework incorporating Compass and SCSS into my web development processes. </div> 
 </section>

<section id="connect">
<div class="centerDiv"><a href="#spu-61" role="button" data-toggle="modal"><h3> Contact Me </h3></a></div>
</section>

<section id="about">
<h3 id="aboutMe">About Me </h3>
<div class="col col30 bgblue">hello</div>
<div class="col col40 bggold">hello</div>
<div class="col col30 bgblack">hello</div>
<div class="col col30 bggreen">hello</div>
<div class="col col30 bgpink">hello</div>
<div class="col col40 bgred">hello</div>
</section>

<?php
genesis();



?>