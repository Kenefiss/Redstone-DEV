<?php

/* recipients */
$to1= 'kenefiss@gmail.com';
/* subject */
$subject1 = "REDSTONE Digital Agency message";
/* message */
$message1 = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
      
    <tr>
      <td width="25%"><font color="#f35D14" size="2" face="Tahoma">Name :</font></td>
      <td width="75%" height="28"><font color="#333333" size="-1" face="Tahoma">'.(isset($_POST["name"])?$_POST["name"]:"").'</font></td>
    </tr>
    <tr>
      <td width="25%"><font color="#f35D14" size="2" face="Tahoma">Email :</font></td>
      <td width="75%" height="28"><font color="#333333" size="-1" face="Tahoma">'.(isset($_POST["email"])?$_POST["email"]:"").'</font></td>
    </tr>
    <tr>
      <td width="25%"><font color="#f35D14" size="2" face="Tahoma">Phone :</font></td>
      <td width="75%" height="28"><font color="#333333" size="-1" face="Tahoma">'.(isset($_POST["phone"])?$_POST["phone"]:"").'</font></td>
    </tr>
    <tr>
      <td width="25%"><font color="#f35D14" size="2" face="Tahoma">Message text :</font></td>
      <td width="75%" height="28"><font color="#333333" size="-1" face="Tahoma">'.(isset($_POST["mess"])?$_POST["mess"]:"").'</font></td>
    </tr>

  </table>';
/* To send HTML mail, you can set the Content-type header. */
$headers1  = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* additional headers */
$headers1 .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";


mail($to1, $subject1, $message1, $headers1);
die();