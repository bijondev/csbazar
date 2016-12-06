<div class="product_title fix">
<?php
$v1=_rainsenitizedata(isset($_GET['v1'])?$_GET['v1']:NULL);

$mrsql="SELECT mr_id, mr_company_name from es_marcents WHERE mr_slug='$v1'";
        $m = $conn->prepare($mrsql);
        $m->execute();
        $mr_result = $m->fetch(PDO::FETCH_OBJ);

        $mr_id=$mr_result->mr_id;
?>
               
             </div>

        <?php
    $sqlb="SELECT mb_picture FROM es_marcent_banners WHERE m_id=$mr_id ORDER BY  `mb_id` ASC 
LIMIT 0 , 1";
      $p = $conn->prepare($sqlb);
      $p->execute();
      $i=0;
      while ($p_result = $p->fetch(PDO::FETCH_OBJ))
      {
        $i++;
    ?>
<img src="<?php echo baseurl; ?>uploads/<?php echo $p_result->mb_picture; ?>" alt="<?php echo $mr_result->mr_company_name; ?>" />
          <?php } ?>
<h5>eShop > <?php echo $mr_result->mr_company_name; ?></h5> 



<!-------------END Banner---------------->
             <div class="box">
             <div class="row box_down">
<?php

        $sql = "SELECT p.p_id, p.p_name, p.p_url, m.mr_company_name, c.pc_name, 
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
        and m.mr_id=$mr_id
        GROUP BY p.p_id
        LIMIT 0,10";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
        ?>
             <div class="feature_product"> <!--feature_product-->
                    <div class="travel_txt">
                      <a href="/prestigebengal"><?php echo $result->p_name; ?></a>
                    </div>
                    <div class="travel_image_hover">
                        <a href="/prestigebengal">
                        <img src="<?php echo baseurl; ?>uploads/thumb/<?php echo $result->pp_path; ?>" alt="Prestige-bengal-logo">
                        </a>
                    <p class="feature_product_absoultbuttom">
                    <a class="btn btn-primary" href="<?php echo baseurl; ?><?php echo $result->p_url; ?>" type="button">View Details</a></p>                        
                      <div class="feature_product_txt">
                      <span class="cutline">
                      Tk.<?php echo $result->prc_price; ?></span>  &nbsp; Tk.<?php echo $result->descountprice; ?> </div>   
                      <div class="feature_product_txt2"><?php echo $result->Descountpercent; ?>% Off </div>
                    </div>                  
                  </div> <!--//feature_product-->
<?php } ?>
</div></div>