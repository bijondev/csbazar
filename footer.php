 
   <div class="fullwidth"> <!--fullwidth-->
      <!-- FOOTER --> 
 <footer id="main_footer" class="clearfix">
  	<div class="container">
  		<div class="row">
      <section class="clearfix"></section>
  					<!--<section class="clearfix">
  					 <div class="widget">  					 
  					 <p>csbazar.com features best daily deals in Dhaka, Bangladesh. Become our member and like our facebook page to get crazy 
             discount offers.</p>
  					 </div>
  					 
  					 <div class="widget">  					 
  					 <ul>
  					 <li><a href="#">About us</a></li>
  					 <li><a href="#">Deals</a></li>
                     <li><a href="#">Press</a></li>                     
  					 </ul>
  					 </div>
  					 
  					 <div class="widget">  					 
  					 <ul>
  					 <li><a href="#">Career</a></li>
                     <li><a href="#">Terms of use</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Contact us</a></li>
  					 </ul>
  					 </div>
             <div class="widget"></div>
  					 <div class="widget">  
             <p>csbazar.com features best daily deals in Dhaka, Bangladesh. Become our member and like our facebook page to get crazy 
             discount offers.</p>					 
  					  
  					 </div>
                     <div class="widget">  					 
  					 © 2013 csbazar.com Ltd. All Rights Reserved
  					 </div>
  					</section>-->
  					<section class="footer_bottom">
            <ul  class="footer_menu2">
                <li><a href="about">About</a></li>
                <li><a href="press">Press</a></li>
                <li><a href="careere">Career</a></li>
                <li><a href="terms-of-us">Terms of use</a></li>
                <li><a href="Privacy-Policy">Privacy Policy</a></li>
                <li><a href="contact-us">Contact us</a></li>
              </ul>
              <ul class="footer_menu">
                   <li><a href="http://www.facebook.com/" title="Facebook" class="sfacebook"></a></li>
                   <li><a href="http://www.twitter.com/" title="twitter" class="stwitter"></a></li>
                   <li><a href="http://www.google.com/" title="googleplus" class="sgplus"></a></li>
                </ul>
  						<p class="copyright span3">© www.csbazar.com (A sister concern of <a href="http://cplussbd.com/" terget="blank">C+S Computer System</a>) 2013 </p>
              
  						
  					</section>
  			</div> 
  	</div><!-- end #container -->
  </footer> <!-- end #main_footer -->	
   
   </div>
  
  </div><!-- END BG EFFECT -->

    
  <div class="toparrow"><a href="#top" id="top_arrow"></a></div>
 
  
  <!---INCLUDE JAVASCRIPTS -->
  <script src="<?php echo baseurl; ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo baseurl; ?>js/bootstrap.js"></script>
  <script type="text/javascript">

/*$(document).ready(function() {
  $('#myCarousel').carousel();
  $('#myCarousel').on('slid', function() {
    var to_slide = $('.carousel-inner .item.active').attr('id');
    $('.carousel-indicators').children().removeClass('active');
    $('.carousel-indicators [data-slide-to=' + to_slide + ']').addClass('active');
  });
});*/
$('.carousel').carousel({
  interval: 5000
})

</script>
  <script src="<?php echo baseurl; ?>js/jquery.flexslider-min.js"></script>
  <script src="<?php echo baseurl; ?>js/vibecom_slider.js"></script>
  <script src="<?php echo baseurl; ?>js/jquery.isotope.min.js"></script>
  <script src="<?php echo baseurl; ?>js/jquery.fitvids.js"></script>
  <script src="<?php echo baseurl; ?>js/audiojs/audio.min.js"></script>
  <script src="<?php echo baseurl; ?>js/jquery.countdown.min.js"></script>
<script>
 $(document).ready(function() {

                $.ajax({
                    url: "<?php echo constant("baseurl"); ?>cron_item_lister_autocom.php",
                    dataType: "xml",
                    success: function(xmlResponse) {
                        /* parse response */
                        var dataitmxc = $("item", xmlResponse).map(function() {
                            return {
                                value: $("value", this).text(),
                                id: $("id", this).text()
                            };
                        }).get();

                        /* bind the results to autocomplete */
                        $("input#search-textbox").autocomplete({
                            source: dataitmxc
                        });
                    }
                });
});
</script>

  <script src="<?php echo baseurl; ?>js/jqBootstrapValidation.js"></script>
  
   <script src="<?php echo baseurl; ?>js/custom.js"></script>
  <script>



var button;

var userInfo;


window.fbAsyncInit = function () {

  FB.init({appId: '205328309644469', //change the appId to your appId

    status: true,

    cookie: true,

    xfbml: true,

    oauth: true});


  //showLoader(true);


  function updateButton(response) {

    button = document.getElementById('fb-auth');

    userInfo = document.getElementById('user-info');


    if (response.authResponse) {

      //user is already logged in and connected

      FB.api('/me', function (info) {

        //login(response, info);

      });


//                        button.onclick = function() {

//                            FB.logout(function(response) {

//                                logout(response);

//                            });

//                        };

    } else {

      //user is not connected to your app or logged out

      button.innerHTML = 'Login';

      button.onclick = function () {

        //showLoader(true);

        FB.login(function (response) {

          if (response.authResponse) {

            FB.api('/me', function (info) {

              login(response, info);

            });

          } else {

            //user cancelled login or did not grant authorization

            //showLoader(false);

          }

        }, {scope: 'email,user_birthday,status_update,publish_stream,user_about_me'});

      }

    }

  }


  // run once with current status and whenever the status changes

  FB.getLoginStatus(updateButton);

  FB.Event.subscribe('auth.statusChange', updateButton);

};

(function () {

  var e = document.createElement('script');

  e.async = true;

  e.src = document.location.protocol

    + '//connect.facebook.net/en_US/all.js';

  document.getElementById('fb-root').appendChild(e);

}());


function login(response, info) {
  if (response.authResponse) {
    var accessToken = response.authResponse.accessToken;
    fqlQuery();
  }

}

function logout(response) {
  userInfo.innerHTML = "";
  document.getElementById('debug').innerHTML = "";
  document.getElementById('other').style.display = "none";
  //showLoader(false);

}


//stream publish method
function streamPublish(name, description, hrefTitle, hrefLink, userPrompt) {
  //showLoader(true);
  FB.ui(
    {
      method: 'stream.publish',
      message: '',
      attachment: {
        name: name,
        caption: '',
        description: (description),
        href: hrefLink

      },

      action_links: [
        {text: hrefTitle, href: hrefLink}
      ],

      user_prompt_message: userPrompt
    },

    function (response) {

      //showLoader(false);

    });


}

function showStream() {

  FB.api('/me', function (response) {

    //console.log(response.id);

    streamPublish(response.name, 'I like the articles of Thinkdiff.net', 'hrefTitle', 'http://thinkdiff.net', "Share thinkdiff.net");

  });

}


function share() {

  //showLoader(true);

  var share = {

    method: 'stream.share',

    u: 'http://tixbd.com/'

  };


  FB.ui(share, function (response) {

    //showLoader(false);

    console.log(response);

  });

}


function graphStreamPublish() {

  //showLoader(true);


  FB.api('/me/feed', 'post',

    {

      message: "I love thinkdiff.net for facebook app development tutorials",

      link: 'http://tixbd.com/',

      picture: 'http://thinkdiff.net/iphone/lucky7_ios.jpg',

      name: 'iOS Apps & Games',

      description: 'Checkout iOS apps and games from iThinkdiff.net. I found some of them are just awesome!'



    },

    function (response) {

      showLoader(false);


      if (!response || response.error) {

        alert('Error occured');

      } else {

        alert('Post ID: ' + response.id);

      }

    });

}


function fqlQuery() {

  //showLoader(true);


  FB.api('/me', function (response) {

    //showLoader(false);


    //http://developers.facebook.com/docs/reference/fql/user/

    var query = FB.Data.query('select first_name,last_name, hometown_location,email,locale,current_address, sex, pic_small from user where uid={0}', response.id);

    query.wait(function (rows) {
      var firstname = rows[0].first_name;
      var lastname = rows[0].last_name;
      var email = rows[0].email;
      var address = rows[0].current_address;
      var sex = rows[0].sex;
      var city = rows[0].hometown_location;
      var country = rows[0].locale;
      $.post("<?php echo baseurl; ?>ajax_facebook_login.php", {
        firstname: firstname,
        lastname: lastname,
        email: email,
        address: address,
        sex: sex,
        city: city,
        country: country,
        rand: Math.random()
      }, function (data) {
        if (data == 'yes') //if correct login detail
        {
          location.reload();
        }

      });

    });


    return false;//not to post the  form physically

  });

}


function setStatus() {

  //showLoader(true);


  status1 = document.getElementById('status').value;

  FB.api(

    {

      method: 'status.set',

      status: status1

    },

    function (response) {

      if (response == 0) {

        alert('Your facebook status not updated. Give Status Update Permission.');

      }

      else {

        alert('Your facebook status updated');

      }

      //showLoader(false);

    }

  );

}


 

    </script>

  </body>
</html>