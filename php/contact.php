<? php
     if (isset($_POST['cf-mail'])){
      $name=_POST['name'];
      $Subject=_POST['subject'];
      $mailFrom=_POST['mail'];
      $message=_POST['message'];
         

$mailto="idreesmayowa@gmail.com";
$headers="From: ".$mailFrom;
$txt="you have received an email from".$name.".\n\n".$message;
 
mail($mailto, $message,$txt,$headers);
header("Location: contact.php?mailsend");


}


  






?>



 





    












