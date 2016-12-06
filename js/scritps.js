$(document).ready(function() {
        $("button#fb-auth").live("click", function () {


        FB.login(

          function (response) {
            console.log("RESPONSE FROM LOGIN");

            if (response.authResponse) {

              FB.api('/me', function (info) {

                login(response, info);

              });

            } else {

              alert('An error has occurred');

            }

          },

          { scope: "email" }

        );


      });

  $('.jqzoom').jqzoom({
            /*zoomType: 'innerzoom',*/
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
  //$('.jqzoom').jqzoom();
  $("#quentaty").change(function(){
  var price=$("#hideprice").val();
  var qty=$("#quentaty").val();
  var total=price*qty;
  //alert(total);
  $("#totalprice").text(total);
});

});

