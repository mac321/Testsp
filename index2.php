<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seguripago</title>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300'">
        <link rel="stylesheet" href="css/horizontal_css.css" />
        <link rel="stylesheet" href="css/main.css" />

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="css/modal.js"></script>
        <style>
          body {
            font-family: 'Open Sans', serif;
            background-color:;
          }
        </style>
    </head>
<body>

    <div class="contenedor">
        <div class="header">
            <img src="img/s1.png" alt="Seguripago">
        </div>

        <div class="content">

            <?php

                if(!empty($_POST))
                {
                    switch ($_POST['mp']) {
                        case 'visa':
                            $text = "Ud. eligio Visa";
                            break;
                        case 'mastercard':
                            $text = "Ud. eligio Mastercard";
                            break;
                        case 'visa_debito':
                            $text = "Ud. eligio Visa Debito";
                            break;
                        case 'bancae':
                            $text = "Ud. eligio Banca electrónica";
                            break;
                        case 'agente':
                            $text = "Ud. eligio Pago en efectivo";
                            break;

                        default:
                            # code...
                            break;
                    }

                }

                 ?>
                <div class="pago-desc pago-desc-info">
                    <h2 ><?php print $text;?></h2>
                    <p>
                        <a class="btn " href="index.php" id="pagar-modal" > Retornar </a>
                    </p>
                </div>
              </div>

        </div>

    </div>



</body>
</html>