<?php
require_once('config.php');

if(isset($_POST['newproduct'])?$_POST['newproduct']:NULL){
    $productname=_rainsenitizedata(isset($_POST['productname'])?$_POST['productname']:NULL);
    $conditions=_rainsenitizedata(isset($_POST['conditions'])?$_POST['conditions']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $fromdate=_rainsenitizedata(isset($_POST['fromdate'])?$_POST['fromdate']:NULL);
    $todate=_rainsenitizedata(isset($_POST['todate'])?$_POST['todate']:NULL);
    $marcent=_rainsenitizedata(isset($_POST['marcent'])?$_POST['marcent']:NULL);
    $catagory=_rainsenitizedata(isset($_POST['catagory'])?$_POST['catagory']:NULL);
    $originalprice=_rainsenitizedata(isset($_POST['originalprice'])?$_POST['originalprice']:NULL);
    $hot=_rainsenitizedata(isset($_POST['hot'])?$_POST['hot']:NULL);
    
    $soldout=_rainsenitizedata(isset($_POST['soldout'])?$_POST['soldout']:NULL);

    $deals=_rainsenitizedata(isset($_POST['deals'])?$_POST['deals']:NULL);
    $p_url=_makeuniqurl(sanitize($productname));
    $user_id=$_SESSION['username'];



    $sql="INSERT INTO `es_products` (`p_id`, `p_name`, `p_url`, `p_conditions`, `p_descriptions`, 
        `p_published_from_date`, `p_published_to_date`, `marchent_id`, `user_id`, `category_id`, 
        `p_original_price`, `p_hot`, `p_deals`, `p_sold_out`) 
            VALUES
            (:p_id, :p_name, :p_url, :p_conditions, :p_descriptions, 
            :p_published_from_date, :p_published_to_date, :marchent_id, :user_id, :category_id, 
            :p_original_price, :p_hot, :p_deals, :p_sold_out)";
$q = $conn->prepare($sql);
 $q->execute(array(
                ':p_id'=>NULL,
                ':p_name'=>$productname,
                ':p_url'=>$p_url,
                ':p_conditions'=>$conditions,
                ':p_descriptions'=>$description,
                ':p_published_from_date'=>$fromdate,
                ':p_published_to_date'=>$todate,
                ':marchent_id'=>$marcent,
                ':user_id'=>$user_id,
                ':category_id'=>$catagory,
                ':p_original_price'=>$originalprice,
                ':p_hot'=>$hot,
                ':p_deals'=>$deals,
                ':p_sold_out'=>$soldout
)) or die(print_r($q->errorInfo()));

 $_SESSION['active_product']=$conn->lastInsertId('p_id');
 
 header('location: '.baseurl.'CSAdmin/?q=product-details');

}
/******************************Edit product******************************************************/
if(isset($_POST['edit-product'])?$_POST['edit-product']:NULL){
    $productname=_rainsenitizedata(isset($_POST['productname'])?$_POST['productname']:NULL);
    $conditions=_rainsenitizedata(isset($_POST['conditions'])?$_POST['conditions']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $fromdate=_rainsenitizedata(isset($_POST['fromdate'])?$_POST['fromdate']:NULL);
    $todate=_rainsenitizedata(isset($_POST['todate'])?$_POST['todate']:NULL);
    $marcent=_rainsenitizedata(isset($_POST['marcent'])?$_POST['marcent']:NULL);
    $catagory=_rainsenitizedata(isset($_POST['catagory'])?$_POST['catagory']:NULL);
    $originalprice=_rainsenitizedata(isset($_POST['originalprice'])?$_POST['originalprice']:NULL);
    $hot=_rainsenitizedata(isset($_POST['hot'])?$_POST['hot']:NULL);

    $soldout=_rainsenitizedata(isset($_POST['soldout'])?$_POST['soldout']:NULL);
    $deals=_rainsenitizedata(isset($_POST['deals'])?$_POST['deals']:NULL);


    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);

    $sql="UPDATE `es_products` SET 
        `p_name` = ?,
        `p_conditions` = ?,
        `p_descriptions` = ?,
        `p_published_from_date` = ?,
        `p_published_to_date` = ?,
        `marchent_id` = ?,
        `category_id` = ?,
        `p_original_price` = ?,
        `p_hot` = ?,
        p_deals=?,
        p_sold_out=?
        WHERE `es_products`.`p_id` =?";

$q = $conn->prepare($sql);
 $q->execute(array($productname,$conditions,$description,$fromdate,$todate,$marcent,
    $catagory,$originalprice,$hot,$deals,$soldout,$pid)) or die(print_r($q->errorInfo()));

 $_SESSION['active_product']=$pid;;
 
 header('location: '.baseurl.'CSAdmin/?q=product-details');

}
/***********************************New Catagory************************************************/
if(isset($_POST['new-catagory'])?$_POST['new-catagory']:NULL){
    $catagoryname=_rainsenitizedata(isset($_POST['catagoryname'])?$_POST['catagoryname']:NULL);

        $sql="INSERT INTO `es_product_category` (`pc_id`,`pc_name`,`category_id`,`status`)
                VALUES (:pc_id, :pc_name, :category_id, :status)";

        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array(
                ':pc_id'=>NULL,
                ':pc_name'=>$catagoryname,
                ':category_id'=>NULL,
                ':status'=>'E'
                )) or die(print_r($q->errorInfo()));
        //print_r($q);
        header('location: '.baseurl.'CSAdmin/?q=all-catagory');

}

/***********************************Edit catagoru************************************************/
if(isset($_POST['edit-catagory'])?$_POST['edit-catagory']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $catagoryname=_rainsenitizedata(isset($_POST['catagoryname'])?$_POST['catagoryname']:NULL);

        $sql="UPDATE `es_product_category` SET  `pc_name` =  ? WHERE  `es_product_category`.`pc_id` =?";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($catagoryname, $pid));
            header('location: '.baseurl.'CSAdmin/?q=all-catagory');
}

/***********************************login to admin************************************************/
if(isset($_POST['login'])?$_POST['login']:NULL){
	$username=_rainsenitizedata(isset($_POST['username'])?$_POST['username']:NULL);
	$password=_rainsenitizedata(isset($_POST['passwoer'])?$_POST['passwoer']:NULL);

	    $sql="SELECT * FROM es_users where username=? and password=?
        and (u_type='Sa'  or u_type='a' or u_type='C')";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($username, md5($password)));
        $total = $q->rowCount();
    if($total==1){
    	
    	$r = $q->fetch(PDO::FETCH_ASSOC);
    	$_SESSION['u_name']=$r['u_name'];
    	$_SESSION['usertype']=$r['u_type'];
    	$_SESSION['username']=$r['username'];
    	header('location: index.php');
    }
    else{
    	header('location: login.php');
    }
}

/*********************************Add price***************************************/
if(isset($_POST['pricesave'])?$_POST['pricesave']:NULL){

    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $title=_rainsenitizedata(isset($_POST['title'])?$_POST['title']:NULL);
    $price=_rainsenitizedata(isset($_POST['price'])?$_POST['price']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $instock=_rainsenitizedata(isset($_POST['instock'])?$_POST['instock']:NULL);
    $minq=_rainsenitizedata(isset($_POST['minq'])?$_POST['minq']:NULL);
    $maxq=_rainsenitizedata(isset($_POST['maxq'])?$_POST['maxq']:NULL);
    $sql="INSERT INTO `es_product_prices` (`prc_id`, `p_id`, `prc_title`, `prc_price`, `prc_description`, `prc_instock`, `prc_min_perches_qty`, `prc_max_perches_qty`) 
    VALUES (:prc_id, :p_id, :prc_title, :prc_price, :prc_description, :prc_instock, :prc_min_perches_qty, :prc_max_perches_qty)";
 $q = $conn->prepare($sql);

 $q->execute(array(
  ':prc_id'=>NULL,
 ':p_id'=>$pid,
 ':prc_title'=>$title,
':prc_price'=>$price,
':prc_description'=>$description,
':prc_instock'=>$instock,
':prc_min_perches_qty'=>$minq,
':prc_max_perches_qty'=>$maxq
)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}
/***********************************edit product price*****************************************/
if(isset($_POST['price-edit'])?$_POST['price-edit']:NULL){

    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $title=_rainsenitizedata(isset($_POST['title'])?$_POST['title']:NULL);
    $price=_rainsenitizedata(isset($_POST['price'])?$_POST['price']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $instock=_rainsenitizedata(isset($_POST['instock'])?$_POST['instock']:NULL);
    $minq=_rainsenitizedata(isset($_POST['minq'])?$_POST['minq']:NULL);
    $maxq=_rainsenitizedata(isset($_POST['maxq'])?$_POST['maxq']:NULL);

    $sql="UPDATE `es_product_prices` SET 
    `prc_title` = ?,
`prc_price` = ?,
`prc_description` = ?,
`prc_instock` = ?,
`prc_min_perches_qty` = ?,
`prc_max_perches_qty` = ? 
WHERE `es_product_prices`.`prc_id` =?";
 $q = $conn->prepare($sql);

 $q->execute(array($title, $price, $description, $instock, $minq, $maxq, $pid)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}
/***********************************Add Product Size*****************************************/
if(isset($_POST['save-size'])?$_POST['save-size']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $sizename=_rainsenitizedata(isset($_POST['sizename'])?$_POST['sizename']:NULL);

        $sql="INSERT INTO `es_product_sizes` (`ps_id`, p_id, `ps_size`) 
    VALUES (:ps_id, :p_id, :ps_size)";
 $q = $conn->prepare($sql);

 $q->execute(array(
  ':ps_id'=>NULL,
 ':p_id'=>$pid,
 ':ps_size'=>$sizename
)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}
/***********************************Edit Product Size*****************************************/
if(isset($_POST['edit-size'])?$_POST['edit-size']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $sizename=_rainsenitizedata(isset($_POST['sizename'])?$_POST['sizename']:NULL);

        $sql="UPDATE `es_product_sizes` SET 
        `ps_size` = ? 
        WHERE `es_product_sizes`.`ps_id` =?";
 $q = $conn->prepare($sql);

 $q->execute(array($sizename, $pid)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}
/***********************************Add Product Color******************************************/
if(isset($_POST['select-color'])?$_POST['select-color']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $colorname=_rainsenitizedata(isset($_POST['colorname'])?$_POST['colorname']:NULL);
    $colorhash=_rainsenitizedata(isset($_POST['colorhash'])?$_POST['colorhash']:NULL);

        $sql="INSERT INTO `es_product_colors` (`clr_id`, p_id, `clr_name`, `clr_code`) 
    VALUES (:clr_id, :p_id, :clr_name, :clr_code)";
 $q = $conn->prepare($sql);

 $q->execute(array(
  ':clr_id'=>NULL,
 ':p_id'=>$pid,
 ':clr_name'=>$colorname,
':clr_code'=>$colorhash
)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}
/***********************************Edit Product Color******************************************/
if(isset($_POST['edit-color'])?$_POST['edit-color']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $colorname=_rainsenitizedata(isset($_POST['colorname'])?$_POST['colorname']:NULL);
    $colorhash=_rainsenitizedata(isset($_POST['colorhash'])?$_POST['colorhash']:NULL);

        $sql="UPDATE `es_product_colors` SET 
        `clr_name` = ?,
        `clr_code` = ? 
        WHERE `es_product_colors`.`clr_id` =?";
 $q = $conn->prepare($sql);

 $q->execute(array($colorname, $colorhash, $pid)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}

/*********************************Save Picture***************************************/
if(isset($_POST['save-picture'])?$_POST['save-picture']:NULL){
    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $image=eden('image', $_FILES["file"]["tmp_name"], 'jpg');
    $name=_rainuniqcodes("pimg",8).".jpg";

    $image->resize(1000, 1250);
    $image->save('../uploads/'.$name, 'jpg');

    $image->resize(380, 475);
    $image->save('../uploads/small/'.$name, 'jpg');

            $image->resize(200, 250);
    $image->save('../uploads/thumb/'.$name, 'jpg');


        $sql="INSERT INTO `es_product_pictures` (`pp_id`, p_id, pp_path) 
    VALUES (:pp_id, :p_id, :pp_path)";
 $q = $conn->prepare($sql);

 $q->execute(array(
  ':pp_id'=>NULL,
  ':p_id'=>$pid,
 ':pp_path'=>$name
)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=product-details');
}

/***************************************Add marcent******************************************************/
if(isset($_POST['new-marcent'])?$_POST['new-marcent']:NULL){
     $companyname=_rainsenitizedata(isset($_POST['companyname'])?$_POST['companyname']:NULL);
    $city=_rainsenitizedata(isset($_POST['city'])?$_POST['city']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $address=_rainsenitizedata(isset($_POST['address'])?$_POST['address']:NULL);
    $location=_rainsenitizedata(isset($_POST['location'])?$_POST['location']:NULL);
    $website=_rainsenitizedata(isset($_POST['website'])?$_POST['website']:NULL);
    $contactperson=_rainsenitizedata(isset($_POST['contactperson'])?$_POST['contactperson']:NULL);
    $contactnumber=_rainsenitizedata(isset($_POST['contactnumber'])?$_POST['contactnumber']:NULL);
    $email=_rainsenitizedata(isset($_POST['email'])?$_POST['email']:NULL);
    $password=md5(_rainsenitizedata(isset($_POST['password'])?$_POST['password']:NULL));

    $slug=sanitize($companyname);

        $image=eden('image', $_FILES["logo"]["tmp_name"], 'jpg');
    $name=_rainuniqcodes("mar_logo_",8).".jpg";
    $image->resize(150, 150);
    $image->save('../uploads/'.$name, 'jpg');

    $user_sql="INSERT INTO `es_users` (`u_id`, `password`, `username`,  `u_type`, `u_status`) 
    VALUES (:u_id, :password, :username,  :u_type, :u_status)";
     $q = $conn->prepare($user_sql);
             $q->execute(array(
              ':u_id'=>NULL,
              ':password'=>$password,
             ':username'=>$email,
             ':u_type'=>"M",
             ':u_status'=>"E"
            )) or die(print_r($q->errorInfo()));

$userid=$conn->lastInsertId('p_id');

$sql="INSERT INTO `es_marcents` (`mr_id`, `mr_company_name`, mr_slug, `mr_city`, `mr_address`, `mr_description`, `mr_location`, `mr_website`, `mr_contact_person`, `mr_contact_number`, `mr_email`, `mr_logo`, u_id) 
VALUES
(:mr_id, :mr_company_name, :mr_slug, :mr_city, :mr_address, :mr_description, :mr_location, :mr_website, :mr_contact_person, :mr_contact_number, :mr_email, :mr_logo,  :u_id)";
$q = $conn->prepare($sql);
 $q->execute(array(
            ':mr_id'=>NULL,
            ':mr_company_name'=>$companyname,
            ':mr_slug'=>$slug,
            ':mr_city'=>$city,
            ':mr_address'=>$address,
            ':mr_description'=>$description,
            ':mr_location'=>$location,
            ':mr_website'=>$website,
            ':mr_contact_person'=>$contactperson,
            ':mr_contact_number'=>$contactnumber,
            ':mr_email'=>$email,
            ':mr_logo'=>$name,
            ':u_id'=>$userid
)) or die(print_r($q->errorInfo()));
$mrid=$conn->lastInsertId('mr_id');
 $_SESSION['active_marcent']=$mrid;
 header('location: '.baseurl.'CSAdmin/?q=marcent-details');

    }

/*********************************Edit marcent*******************************************/
if(isset($_POST['edit-marcent'])?$_POST['edit-marcent']:NULL){
     $companyname=_rainsenitizedata(isset($_POST['companyname'])?$_POST['companyname']:NULL);
    $city=_rainsenitizedata(isset($_POST['city'])?$_POST['city']:NULL);
    $description=_rainsenitizedata(isset($_POST['description'])?$_POST['description']:NULL);
    $address=_rainsenitizedata(isset($_POST['address'])?$_POST['address']:NULL);
    $location=_rainsenitizedata(isset($_POST['location'])?$_POST['location']:NULL);
    $website=_rainsenitizedata(isset($_POST['website'])?$_POST['website']:NULL);
    $contactperson=_rainsenitizedata(isset($_POST['contactperson'])?$_POST['contactperson']:NULL);
    $contactnumber=_rainsenitizedata(isset($_POST['contactnumber'])?$_POST['contactnumber']:NULL);

    $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
    $mr_url=sanitize($companyname);

$sql="UPDATE `es_marcents` SET 
`mr_company_name` = ?,
`mr_slug`=?,
`mr_city` = ?,
`mr_address` = ?,
`mr_description` = ?,
`mr_location` = ?,
`mr_website` = ?,
`mr_contact_person` = ?,
`mr_contact_number` = ?
WHERE `es_marcents`.`mr_id` =?";
$q = $conn->prepare($sql);
 $q->execute(array($companyname,$mr_url,$city,$address,$description,$location,$website,$contactperson,
    $contactnumber,$pid)) or die(print_r($q->errorInfo()));
 header('location: '.baseurl.'CSAdmin/?q=marcent-details');

    }
    /*********************Change Marcent Logo************************/
    if(isset($_POST['Changemarcentlogo'])?$_POST['Changemarcentlogo']:NULL){

        $image=eden('image', $_FILES["logo"]["tmp_name"], 'jpg');
        $name=_rainuniqcodes("mar_logo_",8).".jpg";
        $image->resize(150, 150);
        $image->save('../uploads/'.$name, 'jpg');

            $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);

            $sql="UPDATE `es_marcents` SET 
            `mr_logo` = ?
            WHERE `es_marcents`.`mr_id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($name,$pid)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=marcent-details');


    }

        /*********************Add Marcent Banner************************/
    if(isset($_POST['add-marcent-banner'])?$_POST['add-marcent-banner']:NULL){

        $image=eden('image', $_FILES["banner"]["tmp_name"], 'jpg');

            $name=_rainuniqcodes("mar_ban_",8).".jpg";
            $image->resize(700, 300);
            $image->save('../uploads/'.$name, 'jpg');

            $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
            $status="E";
            $sql="INSERT INTO 
            `es_marcent_banners` (`mb_id` , `m_id` , `mb_picture` , `status`)
VALUES (:mb_id, :m_id, :mb_picture, :status)";
            $q = $conn->prepare($sql);
             $q->execute(array(
                    ':mb_id'=>NULL,
                    ':m_id'=>$pid,
                    ':mb_picture'=>$name,
                    ':status'=>$status)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=marcent-details');


    }

        /*********************Add new ad************************/
    if(isset($_POST['new-add'])?$_POST['new-add']:NULL){

        $title=_rainsenitizedata(isset($_POST['title'])?$_POST['title']:NULL);
        $fromdate=_rainsenitizedata(isset($_POST['fromdate'])?$_POST['fromdate']:NULL);
        $todate=_rainsenitizedata(isset($_POST['todate'])?$_POST['todate']:NULL);
        $link=_rainsenitizedata(isset($_POST['link'])?$_POST['link']:NULL);

        $image=eden('image', $_FILES["file"]["tmp_name"], 'gif');
        $name=_rainuniqcodes("add_",8).".gif";
        $image->resize(203, 147);
        $image->save('../uploads/'.$name, 'gif');
        $status="E";
            

            $sql="INSERT INTO  `es_ad` (
`id`,`title`,`from_date`,`to_date`,`link`,`images`,`status`
)
VALUES (:id,:title,:from_date,:to_date,:link,:images,:status)";
            $q = $conn->prepare($sql);
             $q->execute(array(
                    ':id'=>NULL,
                    ':title'=>$title,
                    ':from_date'=>$fromdate,
                    ':to_date'=>$todate,
                    ':link'=>$link,
                    ':images'=>$name,
                    ':status'=>$status)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-add');


    }

            /*********************Change add picture************************/
    if(isset($_POST['change-add-picture'])?$_POST['change-add-picture']:NULL){

        $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);

        $image=eden('image', $_FILES["file"]["tmp_name"], 'gif');
        $name=_rainuniqcodes("add_",8).".gif";
        $image->resize(203, 147);
        $image->save('../uploads/'.$name, 'gif');
            

            $sql="UPDATE `es_ad` SET  
                `images` =  ?
                WHERE  `id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($name,$pid)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-add');


    }
            /*********************Edit ad************************/
    if(isset($_POST['edit-add'])?$_POST['edit-add']:NULL){

        $title=_rainsenitizedata(isset($_POST['title'])?$_POST['title']:NULL);
        $fromdate=_rainsenitizedata(isset($_POST['fromdate'])?$_POST['fromdate']:NULL);
        $todate=_rainsenitizedata(isset($_POST['todate'])?$_POST['todate']:NULL);
        $link=_rainsenitizedata(isset($_POST['link'])?$_POST['link']:NULL);
        $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);

            

            $sql="UPDATE `es_ad` SET  
                `title` =  ?,
                `from_date` =  ?,
                `to_date` =  ?,
                `link` =  ? 
                WHERE  `id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($title,$fromdate,$todate,$link,$pid)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-add');


    }

                /*********************Change Order************************/
    if(isset($_POST['change-order'])?$_POST['change-order']:NULL){

        $orderno=_rainsenitizedata(isset($_POST['orderno'])?$_POST['orderno']:NULL);
        $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);

      
            $sql="UPDATE `es_ad` SET  
                `orderby` =  ?
                WHERE  `id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($orderno,$pid)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-add');


    }
        /*********************Add new Banner************************/
    if(isset($_POST['new-banner'])?$_POST['new-banner']:NULL){

        $title=_rainsenitizedata(isset($_POST['title'])?$_POST['title']:NULL);
        $status=1;

        $image=eden('image', $_FILES["file"]["tmp_name"], 'jpg');
        $name=_rainuniqcodes("banner_",8).".jpg";
        $image->resize(700, 300);
        $image->save('../banner/'.$name, 'jpg');
           

            $sql="INSERT INTO `es_banner` (`_id`, `_name`, `_status`, `_picture`) 
            VALUES (:id, :name, :status, :picture)";
            $q = $conn->prepare($sql);
             $q->execute(array(
                    ':id'=>NULL,
                    ':name'=>$title,
                    ':status'=>$status,
                    ':picture'=>$name)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-banner');

}
        /*********************Change Banner Banner************************/
    if(isset($_POST['edit-banner-picture'])?$_POST['edit-banner-picture']:NULL){

        $pid=_rainsenitizedata(isset($_POST['pid'])?$_POST['pid']:NULL);
        $status=1;

        $image=eden('image', $_FILES["file"]["tmp_name"], 'jpg');
        $name=_rainuniqcodes("banner_",8).".jpg";
        $image->resize(700, 300);
        $image->save('../banner/'.$name, 'jpg');

            $sql="UPDATE `es_banner` SET  
                `_picture` =  ?  WHERE  `_id` =?";
            $q = $conn->prepare($sql);
             $q->execute(array($name,$pid)) or die(print_r($q->errorInfo()));
             header('location: '.baseurl.'CSAdmin/?q=all-banner');
    }
?>