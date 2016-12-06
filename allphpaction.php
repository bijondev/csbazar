<?php
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
?>