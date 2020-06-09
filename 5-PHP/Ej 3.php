<html>
    <head>
        <title>Recomendar sitio a un amigo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <?php 
            if(!isset($_POST['submit'])) {
        ?>
        <h1>Recomendar sitio a un amigo.</h1>
        <form method="post" name="form-consulta" action="<?php $_SERVER['PHP_SELF'];?>">
        <h4>Tus datos</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="nombre-tuyo">Nombre</label>
                    <input name="nombre-tuyo" type="text" class="form-control" id="nombre-tuyo" placeholder="Nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="email-tuyo">Email</label>
                    <input name="email-tuyo" type="email" class="form-control" id="email-tuyo" placeholder="Email" required>
                </div>
            </div>
            <h4>Datos de tu amigo</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="nombre-amigo">Nombre</label>
                    <input name="nombre-amigo" type="text" class="form-control" id="nombre-amigo" placeholder="Nombre" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="email-amigo">Email</label>
                    <input name="email-amigo" type="email" class="form-control" id="email-amigo" placeholder="Email" required>
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Recomendar sitio</button>
        </form> 
        <?php
            }
        else {
            $nombre_tuyo = $_POST["nombre-tuyo"];
            $email_tuyo = $_POST["email-tuyo"];
            $nombre_amigo = $_POST["nombre-amigo"];
            $email_amigo = $_POST["email-amigo"];
            $nombre_sitio = "misitio@dominio.com";
            $destinatario = $email_amigo;

            $asunto = "Hola " . $nombre_amigo . "! " . $nombre_tuyo . " te recomienda " . $nombre_sitio;
            $cuerpo = '
            <html>
                <body>
                    <h1>Recomendacion de sitio</h1>
                    <p>Hola ' . $nombre_amigo . '! ' . $nombre_tuyo  . ' te recomienda ' . ' <a href="' . $nombre_sitio . '">nuestro sitio.</a>  
                    </p>
                    Que lo disfrutes!
                </body>
            </html>
            ';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
            $headers .= "From: Mi Sitio <info@dominio.com>\r\n";
            mail($destinatario,$asunto,$cuerpo,$headers)
        ?>
            <h2>Gracias por recomendar este sitio!</h2>
        <?php
        }
        ?>
        </div>
    </body>
</html>