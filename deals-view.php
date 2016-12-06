<div class="row">

<?php
$gq=_rainsenitizedata(isset($_GET['v1'])?$_GET['v1']:NULL);
$wh="";
if($q!=""){
  $wh=" and p.marchent_id=".$gq;
}
        $sql = "SELECT p.p_id, p.p_name, p.p_url, m.mr_company_name, c.pc_name, p.p_descriptions, p.p_conditions,
min(p.p_original_price) as p_original_price, pct.pp_path, min(prc.prc_price) as prc_price, 
ROUND(((min(p.p_original_price)-prc.prc_price)/min(p.p_original_price))*100) AS Descountpercent,
(p.p_original_price-prc.prc_price) AS descountprice,
TIMEDIFF(p.p_published_to_date, NOW()) AS Dayleft,
DATE_FORMAT(p.p_published_to_date,'%d %b %y') as lastdate,
m.mr_description,
m.mr_address,
m.mr_location
FROM
    `es_products` AS `p`
    LEFT JOIN `es_product_category` AS `c` 
        ON (`p`.`category_id` = `c`.`pc_id`)
    LEFT JOIN `es_marcents` AS `m`
        ON (`p`.`marchent_id` = `m`.`mr_id`)
    LEFT JOIN `es_product_pictures` AS `pct`
        ON (`p`.`p_id` = `pct`.`p_id`)
        LEFT JOIN `es_product_prices` AS `prc`
        ON (`p`.`p_id` = `prc`.`p_id`)
        WHERE p.p_published_from_date<=NOW()
        AND p.p_published_to_date>=NOW()
        $wh
        GROUP BY p.marchent_id
        LIMIT 0,1";
        $q = $conn->prepare($sql);
        $q->execute() or die(print_r($q->errorInfo()));
        $result = $q->fetch(PDO::FETCH_OBJ);
        
        ?>
       <div class="span9"> <!--span9-->  
            <div class="subproduct_title"> 
            <div class="product_title fix">
              <h5 style="padding-left: 2%;"><?php echo $result->mr_company_name ?></h5>
              </div>

            </div>
            <div class="row">
            <div class="box">
            <div class="span9">
                        <?php
       $pid=$result->p_id;
        $sql = "SELECT *
FROM `es_product_pictures` WHERE p_id=$pid";
        $q = $conn->prepare($sql);
        $q->execute();
        $pr = $q->fetch(PDO::FETCH_OBJ);
        ?>
        <img style="margin-top:5px;" src="<?php echo baseurl; ?>uploads/<?php echo $pr->pp_path; ?>" alt="<?php echo $result->mr_company_name ?>" class="img-thumbnail">

            <h6 class="orginalprice">Original Price Starts From <?php echo $result->prc_price; ?> Taka</h6>
            <div class="subproduct_tk_font2" style="width: 150px; float:left;"> <?php echo $result->descountprice; ?> Taka </div>
            <div class="smallbox"><strong>UP To</strong> <br /> <?php echo $result->Descountpercent; ?>% Descount</div>

                                  <span class="day-left">
                        Day Left To Buy
                        <br />
                        <?php echo $result->Dayleft; ?>
                      </span> 
                      <span class="day-left">
                        last date To Buy
                        <br />
                        <?php echo $result->lastdate; ?>
                      </span>
                      <a style="margin-left:50px;" class="btn btn-large btn-primary" href="<?php echo baseurl; ?>deals/<?php echo $gq; ?>" type="button">View Details & Buy</a>

            </div>     
</div>
             
             <div class="box"> <!--box-->            
                <div class="row box_down">  <!--row-->   
                     
                  
              <div class="span9"> <!--span12--> 
                   <div class="span5" > <!--span3-->
                    <p><strong>Highlights</strong></p> 
                    <?php echo html_entity_decode($result->p_descriptions); ?>                      
                   </div>  <!--//span5-->
                   <div class="span4" style="margin:0;" > <!--span9-->
                     <p><strong>Conditions</strong></p>  
                     <?php echo html_entity_decode($result->p_conditions); ?>                     
                   </div>  <!--//span6-->  
              </div> <!--//span12-->
                </div>  <!--//row-->
                
             </div> <!--//box--> 
             
       </div> <!--//span9-->
</div>
<!--****************************************marcent info**********************************************-->
        <script type="text/javascript">

            $(function() {
        
        // Only for code formatting
        //SyntaxHighlighter.all();
        //$('#map_canvas').gmap('addMarker', {'position': clientPosition, 'bounds': false});

                $('#map_canvas').gmap({ 'zoom': 15, 'strokeColor': "#FF0000",'fillColor': "#FF0000",fore: "#000", 'center': '<?php echo $result->mr_location; ?>' }).bind('init', function (ev, map) {
            $('#map_canvas').gmap('addMarker', { 'position': '<?php echo $result->mr_location; ?>', 'bounds': false }).click(function () {
                $('#map_canvas').gmap('openInfoWindow', { 'content': '<?php echo $result->mr_address; ?>' }, this);
            });
        });

                /*
$('#map_canvas').gmap().({ 'zoom': 1, 'center': LatLng }).bind('init', function(ev, map) {
  $('#map_canvas').gmap('addMarker', {'position': '<?php echo $result->mr_location; ?>', 'bounds': true}).click(function() {
    $('#map_canvas').gmap('openInfoWindow', {'content': '<?php echo $result->mr_address; ?>'}, this);
    $('#map_canvas').gmap('option','zoom',1); 
  });
});*/


            });

        </script>
       <div class="span9"> <!--span9-->  
            <div class="subproduct_title"> 
            <div class="product_title fix">
              <h5 style="padding-left: 2%;"><?php echo $result->mr_company_name ?></h5>
              </div>

            </div>
             
             <div class="box"> <!--box-->            
                <div class="row box_down">  <!--row-->   
                     
                  
              <div class="span9"> <!--span12--> 
              <div class="row">
                   <div class="span4" > <!--span3-->
                    <p><strong>Description</strong></p> 
                    <?php echo $result->mr_description; ?>                      
                   </div>  <!--//span5-->
                   <div class="span5"> <!--span9-->
                   <div id="map_canvas" style="float:left; height:250px; width:100%;">
                   </div>
                     <p><strong>Address</strong></p>  
                     <?php echo $result->mr_address; ?>                     
                   </div>  <!--//span6-->  
             </div>
              </div> <!--//span12-->
                                                
                    
                </div>  <!--//row-->
                
             </div> <!--//box--> 
             
       </div>

       <!--/***********************faceook comments**************************/-->
       <div class="span9"> <!--span9-->  
            
             <div class="box"> <!--box-->            
                <div class="row box_down">  <!--row-->   
                     
                  
              <div class="span9"> <!--span12--> 
              
                <div class="fb-comments" data-href="<?php echo currentPageURL(); ?>" data-width="470"></div>
              </div> <!--//span12-->
                                                
                    
                </div>  <!--//row-->
                
             </div> <!--//box--> 
             
       </div>

       </div>