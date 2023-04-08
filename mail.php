<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $message.= "This is headline.";
        $header = "From: shish_dubey@rediffmail.com \r\n"; 
        $header .= "Cc: dubey_shish@yahoo.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header = "Content-type: text/html\r\n";
        $retval = mail ($to, $subject, $message, $header);

        if( $retval == true) {
        echo "Message sent successfully..."; }
        else {
            echo "Message could not be sent...";
        }
    
    ?>
</body>
</html>