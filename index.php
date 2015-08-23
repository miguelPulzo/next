<?php
    include('controller/Orquest.php');
    include('controller/process.php');
?>

<html>
    <head>
        <title>Compudirectorio</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form action="/" method="post">
            <input placeholder="Ingrese el mensaje" name="message" type="text">
            <input type="submit" value="Enviar">
        </form>

        <br />
        <div id="messages">
            <?php
                $messages = $obj->getMessages();

                if( !empty($messages) ){
                    foreach( $messages AS $item ){
                        ?>
                        <br />
                        <element><?php echo $item; ?></element>
                        <?php
                    }
                }
            ?>
        </div>
    </body>
</html>
