<?php
$to="testipform@robot-mail.com";
$subject= "Test mail";
$body="WE GOOD OVER HERE";
$headers="From: exemple@gmail.com";

if(mail($to,$subject,$body,$headers)){
    echo "Mail send to ".$to."...";
}else{
    echo "Failed send";
}
?>
