<?php
include 'CSAdmin/config.php';

$fname=_rainsenitizedata(isset($_POST['firstname'])?$_POST['firstname']:NULL);
$lname=_rainsenitizedata(isset($_POST['lastname'])?$_POST['lastname']:NULL);
$fullname=$fname." ".$lname;
$email=_rainsenitizedata(isset($_POST['email'])?$_POST['email']:NULL);
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
        $_SESSION['u_name']=$r['u_name'];
        $_SESSION['usertype']=$r['u_type'];
        $_SESSION['busername']=$r['username'];
        echo "yes";
    }
    else{
   $user_sql="INSERT INTO `es_users` (`u_id`, u_name, `username`, u_address, `u_type`, `u_status`) 
    VALUES (:u_id, :u_name, :username, :u_address, :u_type, :u_status)";
     $q = $conn->prepare($user_sql);
             $q->execute(array(
              ':u_id'=>NULL,
              ':u_name'=>$fullname,
             ':username'=>$email,
             ':u_address'=>$address,
             ':u_type'=>"B",
             ':u_status'=>"E"
            )) or die(print_r($q->errorInfo()));
 $user_id=$conn->lastInsertId('u_id');
        $_SESSION['u_name']=$fullname;
        $_SESSION['busername']=$email;

      $emailbody="Dear ".$fullname.", <br />";
     $emailbody.="<p>Thank you for Registration. Stay With Us.</p><br />";

     $emsilsubject="CSBazar | Buy Product";

     _mailsend($emsilsubject, $email, $emailbody);
echo "yes";
    }

?>