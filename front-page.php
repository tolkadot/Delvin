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
?>
 
    <div class="frontPageHeading">
       <h1>tolkadot </h1>
       <h3>{ webdesign & development }</h3>
       
    </div>
    <div class="buttonArea"> <div class="colFull">
 <div class="buttonDivFrontPage">
 	<a href='https://janine-live-tolkadot.c9users.io/make-an-appointment/'class=" button actionButton"> Make an Appointment</a>
 
 </div></div>
<div class="colFull">	
  <div class="buttonDivFrontPage">

 	 <a href='https://janine-live-tolkadot.c9users.io/book-a-training-session/' class=" button actionButton">Book a Training Session</a>
 </div>
		</div>	
	</div>
</div>
<?php
}
add_action( 'genesis_after_header', 'frontPageHeading' );





genesis();



?>