<?php
date_default_timezone_set("Asia/Kolkata");
//include "class.DbConnect.php"; 
//$DbObj = new Db_Connect();

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make xgarbage_db the current db
$db_selected = mysql_select_db('xgarbage_db', $link);
if (!$db_selected) {
    die ('Can\'t use xgarbage_db : ' . mysql_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];
$current_date_time=date("Y-m-d")." ".date("h:i:sa");
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
    {
       $to      = $email;
       $subject = 'Thank You For Contact XGARBAGE LAB';
       $message = "Thank You $name."."\r\n"."We Will Response You Soon."."\r\n"."\r\n"."Regards."."\r\n"."XGARBAGELAB"."\r\n"."www.xgarbagelab.com";
       $headers = 'From: contact@xgarbagelab.com' . "\r\n" .
       'Reply-To: contact@xgarbagelab.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        
      echo   $insert_enquiry = mysql_query("insert into contactus (name,email,message,created_on)
        values('$name','$email','$msg','$current_date_time')") or die(mysql_error());
    } 
else 
{
     echo "0";
}
?>