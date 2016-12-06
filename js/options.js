$(document).ready(function(){
$('#main_style').append('<link href="css/options.css" rel="stylesheet" />');


$('body').append("<div id='vibeoptions'>\
<div id='vibeoptionsopener'></div><div id='vibeoptions_text'></div>\
<h4>Select Theme Color</h4>\
<ul id='coloroptions'>\
<li style='background:#418CD1;' class='vibe_active'></li>\
<li style='background:#ba4a22;'>1</li>\
<li style='background:#9C423B;'>2</li>\
<li style='background:#5E4975;' class='last'>3</li>\
<li style='background:#8ea33e;'>4</li>\
<li style='background:#578035;'>5</li>\
<li style='background:#ba3c2c;'>6</li>\
<li style='background:#E78600;' class='last'>7</li>\
<li style='background:#3275b1;'>8</li>\
<li style='background:#5895A1;'>9</li>\
<li style='background:#65A667;'>10</li>\
</ul>\
<h4>Layout</h4>\
<ul id='layoutoptions'>\
<li style='background:#EEE;border:1px solid #DDD' class='vibe_active'>Boxed</li>\
<li style='background:#EEE;border:1px solid #DDD'>Wide</li>\
</ul>\
<h4>Background</h4>\
<ul id='bgoptions'>\
<li style='background:#fbfbfb;border:1px solid #DDD' class='vibe_active'></li>\
<li style=\"background:url('img\/bg_img1.png');\">1</li>\
<li style=\"background:url('img\/bg_img2.png');\">2</li>\
<li style=\"background:url('img\/bg_img3.png');\">3</li>\
<li style=\"background:url('img\/bg_img3.png');\">4</li>\
</ul>\
<h4>Background Effect</h4>\
<ul id='backgroundoptions'>\
<li class='vibe_active'></li>\
<li style=\"background:url('img\/bg\/bg1.png');\">1</li>\
<li style=\"background:url('img\/bg\/bg2.png');\">2</li>\
<li style=\"background:url('img\/bg\/bg3.png');\" class='last'>3</li>\
<li style=\"background:url('img\/bg\/bg4.png');\" class='last'>4</li>\
<li style=\"background:url('img\/bg\/bg5.png');\">5</li>\
<li style=\"background:url('img\/bg\/bg6.png');\">6</li>\
<li style=\"background:url('img\/bg\/bg13.png');\" class='last'>13</li>\
<li style=\"background:url('img\/bg\/bg8.png');\" class='last'>8</li>\
<li style=\"background:url('img\/bg\/bg9.png');\">9</li>\
<li style=\"background:url('img\/bg\/bg10.png');\">10</li>\
<li style=\"background:url('img\/bg\/bg11.png');\" class='last'>11</li>\
<li style=\"background:url('img\/bg\/bg12.png');\" >12</li>\
<li style=\"background:url('img\/bg\/bg16.png');\" >16</li>\
<li style=\"background:url('img\/bg\/bg20.png');\" >20</li>\
<li style=\"background:url('img\/bg\/bg21.png');\" class='last'>21</li>\
<li style=\"background:url('img\/bg\/bg22.png');\" >22</li>\
<li style=\"background:url('img\/bg\/bg23.png');\" >23</li>\
<li style=\"background:url('img\/bg\/bg24.png');\" >24</li>\
<li style=\"background:url('img\/bg\/bg25.png');\" class='last'>25</li>\
</ul>\
</div>");

/*==== Vibe Options Panel ==== */


$('#vibeoptions').css({'margin-right': '-200px'});
$('#vibeoptionsopener').click(function(){

  $('#vibeoptions_text').hide();
  if($('#vibeoptions').hasClass('open')){
  	$('#vibeoptions').animate({'marginRight': '-200px'},400);
  	$('#vibeoptions').removeClass('open');
  }else{
	$('#vibeoptions').animate({'marginRight': 0},400);
	$('#vibeoptions').addClass('open');
	}
});

	$('#coloroptions li').click(function(){
		$('#coloroptions').find('.vibe_active').removeClass('vibe_active');
		$(this).addClass('vibe_active');
		
		var stl='css/style'+$(this).text()+'.css';
		var sld='css/slider'+$(this).text()+'.css'
		 $('#main_style[rel=stylesheet]').attr('href', stl);
		 $('#slider_style[rel=stylesheet]').attr('href', sld);
		 
	});
	
	
	$('#backgroundoptions li').click(function(){
		$('#backgroundoptions').find('.vibe_active').removeClass('vibe_active');
		
		if($(this).text()){
		var bg='url("img/bg/bg'+$(this).text()+'.png")';
		
		 $('#bg-effect').css({'background': bg});
		 $('#layoutoptions li:first').trigger('click');
		 }else{
		 $('#bg-effect').css({'background': 'none'});
		 }
		$(this).addClass('vibe_active');
		
	});
    
    $('#bgoptions li').click(function(){
    	$('#bgoptions').find('.vibe_active').removeClass('vibe_active');
    	if($(this).text()){
    	var bg='url("img/bg-body'+$(this).text()+'.jpg")';
    	
    	 $('body').css({'background': bg});
    	 $('#layoutoptions li:first').trigger('click');
    	 }else{
    	 $('body').css({'background': '#FBFBFB'});
    	 }
    	$(this).addClass('vibe_active');
    	
    	
    });
    
	$('#layoutoptions li').click(function(){
	
	var type=$(this).text();
	if(type == 'Wide'){
		$('#main_style').append('<link href="css/wide.css" id="stl_wide" rel="stylesheet" />');
		$('#layoutoptions').find('.vibe_active').removeClass();
		$(this).addClass('vibe_active');
		$('#bgoptions li:first').trigger('click');
		$('#backgroundoptions li:first').trigger('click');
	}else{
	  $('#stl_wide').remove();
	  $('#layoutoptions').find('.vibe_active').removeClass();
	  $(this).addClass('vibe_active');
	}
	});


});