$(document).ready(function(){
	/*$('ul.nav').superfish({ 
		delay:       300,                            // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'fast',                          // faster animation speed 
		autoArrows:  true,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});*/

  $('.menu-item').has('.mega-drop').mouseenter(function(){
   var active=$(this);
    active.stop().find('.mega-drop').show('fast',function(){active.addClass('active');});
  });
  
  $('.menu-item').has('.mega-drop').mouseleave(function(){
  	var active=$(this);
    active.find('.mega-drop').stop().hide('fast',function(){active.removeClass('active');});
  });
  
//  $('.show_nav');

$('.nav-tabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

if($('.fit_video').length)
$(".fit_video").fitVids();

});

 $(document).ready(function() {
 $('a[rel=popover]').popover();
 $('body').tooltip({
     selector: '[rel=tooltip]'
 });  
 
 $('.scrollspy').scrollspy();
 $('#navbar').scrollspy();  
 
// Cufon.replace('h1,h2,h3,h4,h5,h6,.accordion-toggle,.menu-item a, span',{ fontFamily: 'Oswald Cufon'});
 Cufon.replace('p,small',{ fontFamily: 'Colaborate Light'});
 Cufon.replace('li a,a,h4,h5,h6,span',{ fontFamily: 'Oswald Cufon'});
 Cufon.replace('h1,h2,h3,.breadcrumbs a',{ fontFamily: 'Bebas'});
 Cufon.replace('.pricing-table-column li, .pricing-table-column li a,small',{ fontFamily: 'Oswald Cufon'});

 });
 
$(window).load(function() {
  $('.homeslider').flexslider({
    animation: "fade",
    start: function(){	vibecom_init();},
    before: function(){	vibecom_begin();	},
    after: function(){	vibecom_slide();	}
  });

  
 
    // The slider being synced must be initialized first
    $('#thumbcarousel1').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav:false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 240,
      itemMargin: 0,
      asNavFor: '.homeslider1'
    });
     
    $('.homeslider1').flexslider({
      animation: "fade",
      controlNav: false,
      directionNav:false,
      animationLoop: false,
      slideshow: false,
      sync: "#thumbcarousel1"
    });

// The slider being synced must be initialized first
$('#thumbcarousel2').flexslider({
  animation: "slide",
  controlNav: false,
  directionNav:false,
  animationLoop: false,
  slideshow: false,
  itemWidth: 240,
  itemMargin: 0,
  asNavFor: '.homeslider2'
});
 
$('.homeslider2').flexslider({
  animation: "fade",
  controlNav: false,
  directionNav:false,
  animationLoop: false,
  slideshow: false,
  start: function(){	vibecom_init();},
  before: function(){	vibecom_begin();	},
  after: function(){	vibecom_slide();	},
  sync: "#thumbcarousel2"
});

$('.homeslider3').flexslider({
    animation: "fade",
    controlNav: false,
    directionNav:false,
    controlNav: "thumbnails",
    start: function(){	vibecom_init();},
    before: function(){	vibecom_begin();	},
    after: function(){	vibecom_slide();	}
    
  });
  
$('.thumb_slider').carousel({
interval: false
});  

  $('#project_carousel').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 230
    });
  
  $('.portfolio_carousel').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 230
    });  
 
 $('.widget_carousel').flexslider({
     animation: "slide",
     controlNav: true,
     directionNav: false,
     animationLoop: false,
     slideshow: false,
     itemWidth: 280
   });
      
$('#project_carousel2').flexslider({
    animation: "slide",
    controlNav: true,
    directionNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 280
  });
  
  $('.portfolio_carousel2').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 300
    });
    
  $('#posts_carousel').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 230
    });   
  $('#posts_carousel2').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 280
    });  
 
 $('#testimonials_carousel').flexslider({
     animation: "slide",
     controlNav: true,
     directionNav: false,
     animationLoop: true,
     slideshow: false
   });   
    
  $('#clients_carousel').flexslider({
      animation: "slide",
      controlNav: true,
      directionNav: false,
      animationLoop: true,
      slideshow: false,
      itemWidth: 230
    });  
    
    $('.sampleslider').flexslider({
      animation: "fade",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      start: function(){	vibecom_init();},
      before: function(){	vibecom_begin();	},
      after: function(){	vibecom_slide();	}
    });
    
    $('.sampleslider2').flexslider({
      animation: "fade",
      controlNav: false,
      animationLoop: false,
      slideshow: true
    });
    
    $('.post_thumbslider').flexslider({
      animation: "fade",
      controlNav: false,
      animationLoop: false,
      slideshow: true
    });
    
    $('.projectitem').mouseenter(function(){
     this.append('<div class="overlay"><span>view details</span></div>');
    }); 
    $('.projectitem').mouseleave(function(){
     this.find('.overlay').remove();
    });
});

$(document).ready(function(){
$('.hover_top_in').mouseenter(function(){
 		$(this).append('<span style="height:0"><img src="img/magnify.png" /></span>');
 		$(this).find('span').animate(	{height: '100%', opacity: 0.8},400);
});

$('.hover_top_in').mouseleave(function(){
   $(this).find('span').animate({height: 0, opacity: 0},400);
	$(this).find('span').remove();
  });
  
  $('.hover_left_in').mouseenter(function(){
   		$(this).append('<span style="width:0"><img src="img/magnify.png" /></span>');
   		$(this).find('span').animate(	{width: '100%', opacity: 0.8},400);
  });
  
  $('.hover_left_in').mouseleave(function(){
     $(this).find('span').animate({width: 0, opacity: 0},400);
  	$(this).find('span').remove();
    });
  
  $('.hover_fade_in').mouseenter(function(){
   		$(this).append('<span style="opacity:0"><img src="img/magnify.png" /></span>');
   		$(this).find('span').animate({opacity: 0.8},400);
  });
  
  $('.hover_fade_in').mouseleave(function(){
     $(this).find('span').animate({opacity: 0},400);
  	$(this).find('span').remove();
    });
  
  $('.hover_video_top_in').mouseenter(function(){
   		$(this).append('<span style="height:0"><img src="img/video.png" /></span>');
   		$(this).find('span').animate(	{height: '100%', opacity: 0.8},400);
  });
  
  $('.hover_video_top_in').mouseleave(function(){
     $(this).find('span').animate({height: 0, opacity: 0},400);
  	$(this).find('span').remove();
    });
    
    $('.hover_video_left_in').mouseenter(function(){
     		$(this).append('<span style="width:0"><img src="img/video.png" /></span>');
     		$(this).find('span').animate(	{width: '100%', opacity: 0.8},400);
    });
    
    $('.hover_video_left_in').mouseleave(function(){
       $(this).find('span').animate({width: 0, opacity: 0},400);
    	$(this).find('span').remove();
      });
    
   /* 
    $('nav a').not("li.dropdown-menu").click(function(){
    		event.preventDefault();
    		var target=$(this).attr('href');
			$('html,body').animate({scrollTop: $(target).offset().top},'slow');
			$('nav').find('.active').removeClass('active');
			$(this).parent().addClass('active');
      });
     */ 
    
    
      
});

$(window).load(function(){

    var $container = $('#container'),
    	$filtersdiv = $('#filters'),
        $checkboxes = $('#filters a');
    
    $container.isotope({
      itemSelector: '.filteritem'
    });
    
    $checkboxes.click(function(event){
      event.preventDefault();
      var me = $(this);
      $filtersdiv.find('.active').removeClass();
      var filters = me.attr('data-filter');
      me.parent().addClass('active');
      $container.isotope({ filter: filters });
      Cufon.refresh();
    });
      
    var $items = $container.children();
    
});

  
  $(document).ready( function() {
  	  $('.show_nav').click(function(){
  	  	$(this).next('ul').slideToggle('slow');
  	  	$(this).find('i').toggleClass('icon-minus');
  	  }); 	
  	  
      $('.topnav li > ul').hide();    //hide all nested ul's
      $('.topnav li > ul li a[class=current]').parents('ul').show().prev('a').addClass('vaccordionExpanded');  //show the ul if it has a current link in it (current page/section should be shown expanded)
      $('.topnav li:has(ul)').addClass('vaccordion');
      $('.topnav li:has(ul) > a').append('<i class="icon-plus icon-white"></i>');  

      $('.topnav li:has(ul) > a').click(function() {
          $(this).toggleClass('vaccordionExpanded'); //for CSS bgimage, but only on first a (sub li>a's don't need the class)
          $(this).find('i').toggleClass('icon-minus');
          $(this).next('ul').slideToggle('fast');
          $(this).parent().siblings('li').children('ul:visible').slideUp('fast')
              .parent('li').find('a').removeClass('vaccordionExpanded')
              .parent('li').find('i').removeClass('icon-minus');
          return false;
      });
      
      $('.toparrow a').click(function(event){ 		   
      event.preventDefault();
      $('body,html').animate({
      				scrollTop: 0
      			}, 800);
      			return false;
      });
  });
  
  var fixed = false;
  
  $(document).scroll(function() {
      if( $(this).scrollTop() > 150 ) {
          if( !fixed ) {
              fixed = true;
              $('.toparrow').show('fast');
          }
      } else {
          if( fixed ) {
              fixed = false;
              $('.toparrow').hide('fast')
          }
      }
       
  });
  
  
  $(document).ready(function(){
  
  var $articles   = $('.servicesitem'),
  	  timeout;
  	  
  	  
  $('.servicesitem').mouseenter(function(){
  var $article    = $(this);
  var h4=$article.find('h4'),
  	   p=$article.find('p');
  
  	 Cufon.replace(h4, { hover: true, fontFamily: 'Oswald Cufon' });
  	 Cufon.replace(p, { hover: true,  fontFamily: 'Colaborate Light'});
  	  
  	
  	   clearTimeout( timeout );
  	   timeout = setTimeout( function() {
  	        
  	       if( $article.hasClass('active') ) return false;
  	        
  	       $articles.not($article).removeClass('active').addClass('blur');
  	        
  	       $article.removeClass('blur').addClass('active');
  	        
  	   }, 75 );  });
  
   $('.servicesitem').mouseleave(function(){
   
   		clearTimeout( timeout );
   		$articles.removeClass('active blur');
   		
   		var h4=$(this).find('h4'),
   			   p=$(this).find('p');
   		Cufon.replace(h4, { hover: true, fontFamily: 'Oswald Cufon' });
   		Cufon.replace(p, { hover: true,  fontFamily: 'Colaborate Light'});
   		
   		if ($.browser.mozilla || $.browser.msie){
   		                     Cufon.refresh();
   		                  }
   });
  });
  
  //SUBSCRIPTION FORM
  
  $(document).ready(function(){
  	// TIMER SECTION
  	var newYear = new Date(); 
  	var date = new Date(2012, 12-1, 1);//Change countdown date here
  	
  	$("#timer").countdown({until: date, format: 'dHMS'}); 
  	
  	// AJAX SUBSCRIPTION FORM AJAX HANDLE FOR COMINGSOON
  	  	 var $response= jQuery(".response");
  	          jQuery("#subscribe").click(function () {
  	              var valid = "";
  	              var mail = jQuery("#subscribe_email").val();
  	              var $response= jQuery(".response");
  	              if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
  	                  valid += ' Invalid email';
  	              }
  	              if (valid != "") {
  	                  $response.fadeIn("slow");
  	                  $response.html("<span style='color:#D03922;'>Error: " + valid + "</span>");
  	              } else {
  	                  $response.css("display", "block");
  	                  $response.html("<span style='color:#0E7A00;'>Subscribing to list... </span>");
  	                  $response.fadeIn("slow");
  	                  setTimeout(function(){subscribe(mail);}, 2000);
  	              }
  	              return false;
  	          });
  	          
  	          jQuery(".email").keypress(function(e) {
  	              if(e.keyCode == 13) {
  	                  jQuery(".sendmail").click();
  	                  return false;
  	              }
  	
  	      });
  	      
  	      function subscribe(mail) {
  	      	var $response= jQuery(".response");
  	      	jQuery.ajax({
  	              type: "POST",
  	              url: "php/subscribe.php",
  	              data: {email:mail},
  	              cache: false,
  	              success: function (html) {
  	                  $response.fadeIn("slow");
  	                  $response.html(html);
  	                  setTimeout('jQuery(".response").fadeOut("slow")', 2000);
  	              }
  	          });
  	      }
  	      
  	
  });


//AJAX CONTACT FORM
$(document).ready(function(){
	
	// SUBSCRIPTION FORM AJAX HANDLE
	 var $response= jQuery(".response");
	          jQuery("#send_message").click(function () {
	              var valid = "";
	              var mail = jQuery("#contact_email").val();
	              var $response= jQuery(".response");
	              if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
	                  valid += ' Invalid email';
	              }
	              if (valid != "") {
	                  $response.fadeIn("slow");
	                  $response.html("<span style='color:#D03922;'>Error: " + valid + "</span>");
	              } else {
	                  $response.css("display", "block");
	                  $response.html("<span style='color:#0E7A00;'>Sending message... </span>");
	                  $response.fadeIn("slow");
	                  var name = jQuery("#contact_name").val();
	                  var message = jQuery("#contact_message").val();
	                  setTimeout(function(){sendmail(name,mail,message);}, 2000);
	              }
	              return false;
	          });
	          
	          jQuery(".email").keypress(function(e) {
	              if(e.keyCode == 13) {
	                  jQuery(".sendmail").click();
	                  return false;
	              }
	
	      });
	      
	      function sendmail(name,mail,message) {
	      	var $response= jQuery(".response");
	      	jQuery.ajax({
	              type: "POST",
	              url: "php/mail.php",
	              data: {email:mail,name:name,message:message},
	              cache: false,
	              success: function (html) {
	                  $response.fadeIn("slow");
	                  $response.html(html);
	                  setTimeout('jQuery(".response").fadeOut("slow")', 2000);
	              }
	          });
	      }
	     
});


$(document).ready(function(){
	//Audio js
	    audiojs.events.ready(function() {
	      var as = audiojs.createAll();
	    }); 
});