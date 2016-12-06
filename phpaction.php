<?php
include 'CSAdmin/config.php';
/******************************Buy Now**********************************/
if(isset($_POST['buynow'])?$_POST['buynow']:NULL){
if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 60)
{
    die('Post limit exceeded. Please wait at least 60 seconds');
}
else
{
    $_SESSION['last_submit'] = time();
$fullname=_rainsenitizedata(isset($_POST['fullname'])?$_POST['fullname']:NULL);
$email=_rainsenitizedata(isset($_POST['email'])?$_POST['email']:NULL);
$phone=_rainsenitizedata(isset($_POST['phone'])?$_POST['phone']:NULL);
$address=_rainsenitizedata(isset($_POST['address'])?$_POST['address']:NULL);

$pm=_rainsenitizedata(isset($_POST['pm'])?$_POST['pm']:NULL);
$hideprice=_rainsenitizedata(isset($_POST['hideprice'])?$_POST['hideprice']:NULL);
$quentaty=_rainsenitizedata(isset($_POST['quentaty'])?$_POST['quentaty']:NULL);

$productid=_rainsenitizedata(isset($_POST['productid'])?$_POST['productid']:NULL);
$priceid=_rainsenitizedata(isset($_POST['priceid'])?$_POST['priceid']:NULL);

$totalprice=$hideprice*$quentaty;
$transectionid=uniqid();
$status="new";
$time=date("Y-m-d H:i:s");
/********************User Check*****************************/
        $sql="SELECT * FROM es_users where username=? ";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($email));
        $total = $q->rowCount();
    if($total==1){
        $r = $q->fetch(PDO::FETCH_ASSOC);
        $user_id=$r['u_id'];
        $fullname=$r['u_name'];
        $_SESSION['usertype']=$r['u_type'];
        $email=$r['username'];
        $user_id=$r['u_id'];

        $usql="UPDATE  `es_users` SET  
        `u_phone` =  ?,
        `u_address` =  ?
         WHERE  `u_id` =?";
        $uq = $conn->prepare($usql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $uq->execute(array($phone, $address, $user_id)) or die(print_r($uq->errorInfo()));


        //header('location: index.php');
    }
    else{
   $user_sql="INSERT INTO `es_users` (`u_id`, u_name, `username`, u_phone, u_address, `u_type`, `u_status`) 
    VALUES (:u_id, :u_name, :username, :u_phone, :u_address, :u_type, :u_status)";
     $q = $conn->prepare($user_sql);
             $q->execute(array(
              ':u_id'=>NULL,
              ':u_name'=>$fullname,
             ':username'=>$email,
             ':u_phone'=>$phone,
             ':u_address'=>$address,
             ':u_type'=>"B",
             ':u_status'=>"E"
            )) or die(print_r($q->errorInfo()));
 $user_id=$conn->lastInsertId('u_id');
    }

/*******************************Transection**********************************************/
$tsql="INSERT INTO `es_transections` (`t_id`, `u_id`, `transection_no`, `product_id`, `price_id`, `quantaty`, `price`, `total_price`, `datetime`, `p_method`, `p_status`, `t_status`, `from_ip`) VALUES
(:t_id, :u_id, :transection_no, :product_id, :price_id, :quantaty, :price, :total_price, :datetime, :p_method, :p_status, :t_status, :from_ip)";
     $q = $conn->prepare($tsql);
             $q->execute(array(
              ':t_id'=>NULL,
              ':u_id'=>$user_id,
             ':transection_no'=>$transectionid,
             ':product_id'=>$productid,
             ':price_id'=>$priceid,
             ':quantaty'=>$quentaty,
             ':price'=>$hideprice,
             ':total_price'=>$totalprice,
             ':datetime'=>$time,
             ':p_method'=>$pm,
             ':p_status'=>"pending",
             ':t_status'=>"pending",
             ':from_ip'=>get_client_ip()
            )) or die(print_r($q->errorInfo()));
 $user_id=$conn->lastInsertId('u_id');


     $emailbody="Dear ".$fullname.", <br />";
     $emailbody.="<p>Thank you for Buy product from CSBazar.com, wu will contact with you soon</p><br />";
     $emailbody.="<b>Your Transection Id:</b>".$transectionid."<br />";

     $emsilsubject="CSBazar | Buy Product";

     _mailsend($emsilsubject, $email, $emailbody);

     $_SESSION['tid']=$transectionid;

     if($pm=="cod"){
        header('location: '.baseurl."cash-on-delevery");
     }
     elseif ($pm=="pickup") {
         header('location: '.baseurl."pickup");
     }
     elseif ($pm=="bkash") {
         header('location: '.baseurl."bKash");
     }
     else{
       header('location: '.baseurl); 
     }
     

    }
}

/******************************Feture Request**********************************/
if(isset($_POST['feturebusiness'])?$_POST['feturebusiness']:NULL){
if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 60)
{
    die('Post limit exceeded. Please wait at least 60 seconds');
}
else
{
    $_SESSION['last_submit'] = time();
$companyname=_rainsenitizedata(isset($_POST['companyname'])?$_POST['companyname']:NULL);
$businesstype=_rainsenitizedata(isset($_POST['businesstype'])?$_POST['businesstype']:NULL);
$location=_rainsenitizedata(isset($_POST['location'])?$_POST['location']:NULL);
$website=_rainsenitizedata(isset($_POST['website'])?$_POST['website']:NULL);
$contactperson=_rainsenitizedata(isset($_POST['contactperson'])?$_POST['contactperson']:NULL);
$contactnumber=_rainsenitizedata(isset($_POST['contactnumber'])?$_POST['contactnumber']:NULL);
$emailaddress=_rainsenitizedata(isset($_POST['emailaddress'])?$_POST['emailaddress']:NULL);
$othrrsinfo=_rainsenitizedata(isset($_POST['othrrsinfo'])?$_POST['othrrsinfo']:NULL);
$status="new";
$time=time();

$sql="INSERT INTO `es_featuresbusiness` (`fb_id`, `fb_companyname`, `fb_businesstype`, `fb_location`, `fb_website`, `fb_contactperson`, `fb_contactnumber`, `fb_email`, `fb_others`, `fb_status`, `fb_datetime`) 
VALUES (:fb_id, :fb_companyname, :fb_businesstype, :fb_location, :fb_website, 
:fb_contactperson, :fb_contactnumber, :fb_email, :fb_others, :fb_status, :fb_datetime)";
    $q = $conn->prepare($sql);
     $q->execute(array(
                ':fb_id'=>NULL,
                ':fb_companyname'=>$companyname,
                ':fb_businesstype'=>$businesstype,
                ':fb_location'=>$location,
                ':fb_website'=>$website,
                ':fb_contactperson'=>$contactperson,
                ':fb_contactnumber'=>$contactnumber,
                ':fb_email'=>$emailaddress,
                ':fb_others'=>$othrrsinfo,
                ':fb_status'=>$status,
                ':fb_datetime'=>$time
)) or die(print_r($q->errorInfo()));
     $emailbody="<b>Company Name:</b>".$companyname."<br />";
     $emailbody.="<b>Business Type:</b>".$businesstype."<br />";
     $emailbody.="<b>Location:</b>".$location."<br />";
     $emailbody.="<b>Website:</b>".$website."<br />";
     $emailbody.="<b>Contact Persion:</b>".$contactperson."<br />";
     $emailbody.="<b>Contact Number:</b>".$contactnumber."<br />";
     $emailbody.="<b>Email Address:</b>".$emailaddress."<br />";
     $emailbody.="<b>Others:</b>".$othrrsinfo."<br />";

     $emsilsubject="Fetures Business";
     $emailto="info@csbazar.com";
     _mailsend($emsilsubject, $emailto, $emailbody);

     $_SESSION['msg_fetb']="Thank you, we will contact with you soon!";

     header('location: '.baseurl."featureyourbusiness");

    }
}

/********************Registration*************************/

if(isset($_POST['signup'])?$_POST['signup']:NULL){
if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 60)
{
    die('Post limit exceeded. Please wait at least 60 seconds');
}
else
{
    $_SESSION['last_submit'] = time();
$fullname=_rainsenitizedata(isset($_POST['fullname'])?$_POST['fullname']:NULL);
$email=_rainsenitizedata(isset($_POST['email'])?$_POST['email']:NULL);
$password=_rainsenitizedata(isset($_POST['password'])?$_POST['password']:NULL);
$phone=_rainsenitizedata(isset($_POST['phone'])?$_POST['phone']:NULL);
$address=_rainsenitizedata(isset($_POST['address'])?$_POST['address']:NULL);

$transectionid=uniqid();
$status="new";
$time=date("Y-m-d H:i:s");
/********************User Check*****************************/
        $sql="SELECT * FROM es_users where username=? ";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($email));
        $total = $q->rowCount();
    if($total==1){
        
        $r = $q->fetch(PDO::FETCH_ASSOC);
        $fullname=$r['u_name'];
        $_SESSION['usertype']=$r['u_type'];
        $email=$r['username'];
        $user_id=$r['u_id'];
        header('location: '.baseurl."userexist"); 
    }
    else{
   $user_sql="INSERT INTO `es_users` (`u_id`, u_name, `username`, password, u_phone, u_address, `u_type`, `u_status`) 
    VALUES (:u_id, :u_name, :username, :password, :u_phone, :u_address, :u_type, :u_status)";
     $q = $conn->prepare($user_sql);
             $q->execute(array(
              ':u_id'=>NULL,
              ':u_name'=>$fullname,
             ':username'=>$email,
             ':password'=>md5($password),
             ':u_phone'=>$phone,
             ':u_address'=>$address,
             ':u_type'=>"B",
             ':u_status'=>"E"
            )) or die(print_r($q->errorInfo()));
 $user_id=$conn->lastInsertId('u_id');

      $emailbody="Dear ".$fullname.", <br />";
     $emailbody.="<p>Thank you for Registration. Stay With Us.</p><br />";

     $emsilsubject="CSBazar | Buy Product";
     _mailsend($emsilsubject, $email, $emailbody);
    header('location: '.baseurl."registerdconfirm"); 
    }
    }
}
/*****************Login**********************/
if(isset($_POST['login'])?$_POST['login']:NULL){
    $username=_rainsenitizedata(isset($_POST['email'])?$_POST['email']:NULL);
    $password=_rainsenitizedata(isset($_POST['password'])?$_POST['password']:NULL);

        $sql="SELECT * FROM es_users where username=? and password=?";
        $q = $conn->prepare($sql) or die("ERROR: " . implode(":", $conn->errorInfo()));
        $q->execute(array($username, md5($password)));
        $total = $q->rowCount();
    if($total==1){
        $r = $q->fetch(PDO::FETCH_ASSOC);
        $_SESSION['u_name']=$r['u_name'];
        $_SESSION['usertype']=$r['u_type'];
        $_SESSION['busername']=$r['username'];
        header('location: '.baseurl);
    }
    else{
        $_SESSION['msg']="Invalid email or password!";
        header('location: '.baseurl."login");
    }
}
?>