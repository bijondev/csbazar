<div class="product_title fix">
               <h5>Featured Products   </h5> 
             </div>
             <div class="box">
             <div class="row box_down">
<?php
        $sql = "SELECT p.p_id, p.p_name, m.mr_company_name, c.pc_name, p.p_url,
p.p_original_price, pct.pp_path, prc.prc_price, p.p_sold_out,
ROUND(((p.p_original_price-prc.prc_price)/p.p_original_price)*100) AS Descountpercent,
(p.p_original_price-prc.prc_price) AS descountprice,
TIMEDIFF(p.p_published_to_date, NOW()) AS Dayleft,
DATE_FORMAT(p.p_published_to_date,'%d %b %y') as lastdate
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
        GROUP BY p.p_id
        LIMIT 0,10";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
             <div class="feature_product effect3"> <!--feature_product-->
             
             <div class="foreffect">
             <?php
             if($result->p_sold_out=='soldout'){
             ?>
             <div class="sold-out"></div>
             <?php } ?>
                    
                    <div class="travel_image_hover">
                        <a href="<?php echo baseurl; ?><?php echo $result->p_url; ?>">
                        <img src="uploads/thumb/<?php echo $result->pp_path; ?>" class="productppicture" alt="Prestige-bengal-logo">
                        </a>
                        
                    <div class="travel_txt">
                      <a href="<?php echo baseurl; ?><?php echo $result->p_url; ?>"><?php echo $result->p_name; ?></a>
                    </div>
                      <div class="feature_product_txt"><span class="cutline">Tk.<?php echo $result->p_original_price; ?> </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                      <span style="float:right; display:block;">Tk.<?php echo $result->descountprice; ?> </span>  </div>   

                    </div>        
                    </div>          
                  </div> <!--//feature_product-->
<?php } ?>
</div></div>