             <div class="product_title fix">
               <h5>Featured eShop  </h5> 
             </div>
             <div class="box nooverflow">            
                <div class="row box_down  marcent-logo">
                    <?php
                    $sql = "SELECT `mr_id`, `mr_company_name`,mr_slug, `mr_city`, `mr_contact_person`, `mr_contact_number`, `mr_logo`, u.u_status, u.u_id
        from es_marcents m, es_users u
        where m.u_id=u.u_id and u_status='E' LIMIT 0 , 30";
        $q = $conn->prepare($sql);
        $q->execute();
        while($result = $q->fetch(PDO::FETCH_OBJ))
        {
                    ?>
                    <div class="estorebox"> <!--estorebox-->
                        <!--<div style="font-size: 12px; float: left;">
                        <a href="<?php echo baseurl; ?>e-shop/<?php echo $result->mr_slug; ?>"><?php echo $result->mr_company_name; ?></a>
                        </div>-->
                        <div class="travel_image_hover">
                        <a href="<?php echo baseurl; ?>e-shop/<?php echo $result->mr_slug; ?>">
                        <img src="uploads/<?php echo $result->mr_logo; ?>" alt="<?php echo $result->mr_company_name; ?>">
                        </a>
                        </div>
                    </div> <!--//estorebox-->
                    <?php
                }
                    ?>
                                    </div>
             </div> 