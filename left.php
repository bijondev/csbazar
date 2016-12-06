       <div class="span3"> <!--span3-->
          <div class="row" style="margin-bottom:10px;">            

            <div class="span3 leftside"> <!--leftside--> 

             <h5 class="barbg"><a href="<?php echo baseurl; ?>featureyourbusiness">Feature your Business</a></h5>
             <h5 class="barbg"><a href="<?php echo baseurl; ?>eshop">eShop</a></h5>
             <!--<h5 class="barbg">banglalink priyojon </h5>-->
                 <ul class="nav nav-list" style="background-color: #fff; margin-top: 4%;">                
                    <?php
        $sql = "SELECT *
FROM `es_product_category` order by pc_name asc";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
                    <li><a href="<?php echo baseurl; ?>catagory/<?php echo slug($result->pc_name); ?>/<?php echo slug($result->pc_id); ?>"><?php echo $result->pc_name; ?></a></li>
                    <?php } ?>
                                 
                </ul>

        <div style="margin-top:10px;">
        <div class="fb-like-box" data-href="https://www.facebook.com/Csbazarcom" data-width="292" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
        <div class="fb-facepile" data-href="https://www.facebook.com/Csbazarcom" data-action="Comma separated list of action of action types" data-width="220" data-max-rows="1"></div>
        </div>
            </div> <!--//leftside-->
            
        <?php
        $sql = "SELECT images, link
        FROM `es_ad` order by orderby asc";
        $q = $conn->prepare($sql);
        $q->execute() or die(print_r($q->errorInfo()));
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
        <a href="<?php echo $result->link; ?>" target="blank" >
        <img src="<?php echo baseurl; ?>uploads/<?php echo $result->images; ?>" alt="" class="advt">
        </a>
        <?php } ?>
            
          </div>   
       </div> <!--//span3-->
   