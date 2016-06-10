jQuery(function( $ ){
    
function screen(){
var $w = $(window).width()*0.44; 
var $w2 = $(window).width()*0.28; 
var $h = $("#about").height()/2; 
$('.col').css({'height': $h +'px'});
$('.col40').css({'width': $w +'px'});
$('.col30').css({'width': $w2 +'px'});
console.log($w);
}

screen();
$(window).resize(function(){
 screen();
});
});