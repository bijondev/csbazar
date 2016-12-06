
<footer id="footer">
<div class="container-fluid">
2013 © <em>This Copy Right By</em> <a href="http://csbazar.com/" target="_blank">csbazar.com</a>.
</div>
</footer> </div>
</div>
 
<script src="assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="assets/js/twitter-bootstrap/bootstrap.js"></script>
<script src="assets/js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!--[if lte IE 8]>
    <script src="/templates/social/assets/js/placeholders/placeholders.min.js"></script>
    <![endif]-->
<script src="assets/js/extents.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/js/jqBootstrapValidation.js"></script>
<script src="assets/js/jquery-chosen/chosen/chosen.jquery.min.js"></script>
<script src="assets/js/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>


<script src="assets/js/jquery-fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/jqvmap/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/jqvmap/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/js/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="assets/js/jquery-flot/jquery.flot.js"></script>
<script src="assets/js/jquery-flot/jquery.flot.resize.js"></script>
<script src="assets/js/jquery-flot/jquery.flot.selection.js"></script>
<script src="assets/js/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="assets/js/wysihtml5/dist/wysihtml5-0.3.0.min.js"></script>
<script src="assets/js/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="assets/js/jquery-chosen/chosen/chosen.jquery.min.js"></script>
<script src="assets/js/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/js/jquery-tagit/jquery.tagsinput.min.js"></script>
<script src="assets/js/bootstrap-switch/static/js/bootstrapSwitch.js"></script>
<script src="assets/js/jquery-grab-bag/javascripts/jquery.autogrow-textarea.js"></script>
<script src="assets/js/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="assets/js/jquery-textarea/jquery.textareaCounter.plugin.js"></script>
<script src="assets/js/jquery-uniform/jquery.uniform.min.js"></script>
<script src="assets/js/form-stuff.elements.js"></script>
<script src="assets/js/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="assets/js/tables.dynamic.js"></script>
<script src="assets/js/bootbox.min.js"></script>
<script src="assets/js/example.js"></script>

<?php
if($q=="")
{
?>
<script src="assets/js/justGage/resources/js/raphael.2.1.0.min.js"></script>
<script src="assets/js/justGage/resources/js/justgage.1.0.1.min.js"></script>
<script src="assets/js/dashboard.js"></script>
 <?php } ?>
<script>
        /*<![CDATA[*/

  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

        $(function() {
            $('#wysiwyg1').wysihtml5({
                "stylesheets": ["/templates/social/assets/js/bootstrap-wysihtml5/lib/css/wysiwyg-color.css"]
            });
            $('#description').wysihtml5({
                "stylesheets": ["/templates/social/assets/js/bootstrap-wysihtml5/lib/css/wysiwyg-color.css"]
            });

            Example.init({
                "selector": ".bb-alert"
            });
        });

        /*]]>*/
/**********************Delete action***********************/
$('[data-action="deleteProduct"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    //var sid=$('[data-action="deleteproductsize"]').val();
                    $.ajax({
                    url: "ajax-delete-product.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Size succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Size Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            });
$('[data-action="MarcentDiesable"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    //var sid=$('[data-action="deleteproductsize"]').val();
                    $.ajax({
                    url: "ajax-diesable-marcent.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Size succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Size Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            });

$('[data-action="MarcentEnable"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    //var sid=$('[data-action="deleteproductsize"]').val();
                    $.ajax({
                    url: "ajax-enable-marcent.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Size succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Size Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            });

$('[data-action="deleteproductsize"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    //var sid=$('[data-action="deleteproductsize"]').val();
                    $.ajax({
                    url: "ajax-delete-size.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Size succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Size Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            }); 

$('[data-action="deleteproductcolor"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    //var sid=$('[data-action="deleteproductcolor"]').val();
                    $.ajax({
                    url: "ajax-delete-color.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Color succesfully deleted");
                        //location.reload();
                        });
                }
                else{
                    Example.show("No Color Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            }); 
$('[data-action="deleteproductpicture"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-picture.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product picture succesfully deleted");
                        //location.reload();
                        });
                }
                else{
                    Example.show("No picture Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            }); 

$('[data-action="deletebannerpicture"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-banner.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product picture succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No picture Deleted!");
                   
                }
                 });
            //Example.show("Confirm result: "+result);
            }); 
$('[data-action="deletecatagory"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this product size", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-catagory.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product picture succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No picture Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            });
$('[data-action="deleteAdd"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this Add", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-add.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            });


$('[data-action="deleteBanner"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this banner", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-bannerh.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            });

$('[data-action="deleteBanner"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you confirm to delete this Product", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-delete-product.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            });
/*************************Paynent Status**************************************/
$('[data-action="paymentconfirm"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you Confirm Payment Succesfully", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-paymentconfirm.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                }
                 });
            Example.show("Confirm result: "+result);
            });

            $('[data-action="deveveryconfirm"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you Confirm Delevery Succesfully", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-deveveryconfirm.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            });

             $('[data-action="PaymentRejected"]').click(function(e){
    var sid=$(this).val();
                bootbox.confirm("Are you Confirm Delevery Succesfully", function(result) {
                    if(result==true){
                    
                    $.ajax({
                    url: "ajax-PaymentRejected.php?sid="+sid,
                    type: "get"
                    //data: {sid:sid}
                        }).done(function() {
                        Example.show("product Add succesfully deleted");
                        location.reload();
                        });
                }
                else{
                    Example.show("No Add Deleted!");
                   
                }
                 });
            Example.show("Confirm result: "+result);
            location.reload();
            });
  /*****************************model***********************************/

    $('[data-toggle="modal"]').click(function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    if (url.indexOf('#') == 0) {
        $(url).modal('open');
    } else {
        $.get(url, function(data) {
            $('<div class="modal hide fade">' + data + '</div>').modal();
        }).success(function() { $('input:text:visible:first').focus(); });
    }
}); 
</script>
</body>

</html>
