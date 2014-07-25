<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
    </head>
    
    <body>
        <?php $s = $_POST[s]; $headers = "From: ".$s[Email]." <$s[Email]>\r\n";					
                foreach($s as $name=> $value){ $texta .= str_replace('_', ' ', $name) . ": $value \n\r"; } 
                mail($_POST['emailTo'], $_POST['subject'],
                "CONTACT Request:\n________________________________\n\r"
                .$texta."\n________________________________\r\n\r\n" 
                .date("Y,m,d H:i"),$headers);
          ?>
    </body>

</html>