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
        <script src="css/horizontal_js.js"></script>
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

            <div class="content-head">
                <div class="ecommerce-logo">
                    <img src="img/logo-joinnus.png" align="middle" width="120" alt="">
                </div>
                <div class="ecommerce-text">
                    <div class="descripcion-normal">
                        Seleccione el medio de pago, acepte los términos y condiciones, y presione el botón <b>"Pagar"</b>
                    </div>
                </div>
            </div>

            <div class="content-form">

                <form action="">
                    <div class="form-head">
                        <h2>Seleccione el medio de pago</h2>

                        <div class="monto">
                            <div class="seguripago_ecommerce_imp">Importe a pagar: S/. 10</div>
                        </div>

                    </div>

                    <div class="form-content">

                        <div class="seguricredito">
                            <div class="img-seguricredito"></div>
                            <div class="content-list">
                            <ul>
                                <li>
                                    <label for="mp_visa">
                                        <span class="radiooption"><b class="error"></b>
                                            <input type="radio" name="mp" id="mp_visa" value="visa" onclick="checkEnableSubmit()" />
                                        </span>
                                        <span>
                                            <img src="img/visa.jpg" align="top" width="60" alt="" />&nbsp;
                                            Visa
                                        </span>
                                    </label>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="seguricredito">
                            <div class="img-seguricredito"></div>
                            <div class="content-list">
                            <ul>
                                <li>
                                    <label for="mp_visa">
                                        <span class="radiooption"><b class="error"></b>
                                            <input type="radio" name="mp" id="mp_visa" value="visa" onclick="checkEnableSubmit()" />
                                        </span>
                                        <span>
                                            <img src="img/visa.jpg" align="top" width="60" alt="" />&nbsp;
                                            Visa
                                        </span>
                                    </label>
                                </li>
                            </ul>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <form name="myform" id="seguripago-form-final" action="<?php echo dirname($_SERVER['PHP_SELF'])=="/"?"":dirname($_SERVER['PHP_SELF']); ?>/pagoin2.php" onsubmit="return checkEnableSubmit()" method="POST">
                <div id="head">

                    <div class="cuenta">

                        <div class="tipo">

                            <div class="seguripago_mp_horizontal">





                <div class="tipo_pago <?php echo $nombre; ?>">
                    <div class="logo"></div>
                    <ul>
                        <li>
                            <label for="mp_<?php echo $medio["idMP"]; ?>">
                                <span class="radiooption"><b class="error"></b>
                                    <input type="radio" name="mp" id="mp_<?php echo $medio["idMP"]; ?>" value="<?php echo $medio["idMP"]; ?>" onclick="checkEnableSubmit()" />
                                </span>
                                <span>
                                    <img src="<?php echo $medio["imagen"] ?>" align="top" width="60" alt="" />&nbsp;
                                    <?php echo $medio["descripcion"]; ?>
                                    <span class="medio_descripcion"><?php echo empty($medio["descripcion_larga"])?"":(" (".$medio["descripcion_larga"].")"); ?></span>
                                </span>
                            </label>
                        </li>
                    </ul>
                </div>






                            </div>
                        </div>
                        <!--
                        <div class="monto">
                        <?php $moneda=(($monven=="PEN")?"S/.":$monven);?>
                        <div class="seguripago_ecommerce_imp">Importe a pagar: <?php echo $moneda." ".$impven;?></div>
                        </div>
                        -->
                    </div>
                    <div class="footer">
                        <div class="seguripago_ecommerce_text">
                        <label for="t_c" class="checkterminos"><b class="error-terminos"></b>   <input name="t_c" type="checkbox" id="t_c" onclick="checkEnableSubmit()" value="t_c" />

                                Si, acepto los t&eacute;rminos y condiciones de <b>"<?php echo $nombre_comercial;?>"</b>.
                            </label>
                            <a target="_blank" href="<?php echo $return_url_terminos;?>">
                            Haz click para leer los t&eacute;rminos y condiciones
                            </a>
                        </div>
                        <div class="seguripago_formbutton">
                            <div id="sub-div">
                                <button  type="submit" id="pagar" onclick="return buttonSubmit()" disabled="disabled" mouse> Pagar </button>
                            </div>
                        </div>
                        <span id="mensajeboton" style="display:none">Para continuar, debe aceptar T&eacute;rminos y Condiciones</span>
                        <div class="seguripago_logo"><span>Seguripago</span></div>
                    </div>
                </div>
                <input type="hidden" name="token" value="<?php echo $token; ?>" >
            </form>

        </div>


    </div>

</body>
</html>