<?php
        $sql = "SELECT p.p_id, p.p_name, m.mr_company_name, c.pc_name, 
p.p_original_price, pct.pp_path, prc.prc_price, 
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
             <div class="product_title fix">
               <h5><?php echo $result->p_name; ?></h5> 
             </div>
             <div class="box">            
                <div class="row box_down">
                <div class="span6">
						<ul class="thumbnails">
					  <li class="span6">
						<a href="#" class="thumbnail">
						  <img data-src="holder.js/300x200" src="uploads/<?php echo $result->pp_path; ?>" height="200" alt="">
						</a>
					  </li>
					</ul>
				</div>
                <div class="span3">
                   <h6>Original Price Starts From <?php echo $result->p_original_price; ?> Taka </h6>
                      <div class="smallrow span3"> <!--smallrow-->
                        <div class="smallbox"><strong>Pay</strong> <br /> <?php echo $result->prc_price; ?></div>
                        <div class="smallbox"><strong>Discount</strong> <br /> <?php echo $result->Descountpercent; ?>% </div>
                        <div class="smallbox"><strong>Save </strong><br /><?php echo $result->descountprice; ?> </div>
                      </div> <!--//smallrow-->  
                      <p>
                        Day Left To Buy
                        <br />
                        <?php echo $result->Dayleft; ?>
                      </p> 
                      <p>
                        last date To Buy
                        <br />
                        <?php echo $result->lastdate; ?>
                      </p>
                  <button class="btn btn-inverse bigbutton" type="button">View Details &amp; Buy</button>
                </div>
                </div>
             </div> 
<?php } ?>