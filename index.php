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
                            <div class="logo-seguricredito">
                                <img src="img/sp_credito.jpg" alt="">
                            </div>
                            <div class="opciones-seguricredito">
                               <ul>
                                    <li>
                                        <label for="mp_visa">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_visa" value="visa" onclick="checkEnableSubmit()" />
                                            </span>
                                            <span class="imgoption">
                                                <img src="img/visa.jpg" alt="Visa" />
                                                Visa (Tarjeta de Crédito)
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="mp_mc">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_mc" value="mastercard" onclick="checkEnableSubmit()" />
                                            </span>
                                            <span class="imgoption">
                                                <img src="img/mc.jpg" alt="Mastercard" />&nbsp;
                                                Mastercard
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="seguridebito">
                            <div class="logo-seguricredito">
                                <img src="img/sp_debito.jpg" alt="">
                            </div>
                            <div class="opciones-seguricredito">
                               <ul>
                                    <li>
                                        <label for="mp_visa_debito">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_visa_debito" value="visa_debito" onclick="checkEnableSubmit()" />
                                            </span>
                                            <span class="imgoption">
                                                <img src="img/visa.jpg" alt="Visa" />
                                                Visa (Tarjeta de Crédito)
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="seguricash">
                            <div class="logo-seguricredito">
                                <img src="img/sp_cash.jpg" alt="">
                            </div>
                            <div class="opciones-seguricredito">
                               <ul>
                                    <li>
                                        <label for="mp_be">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_be" value="bancae" onclick="checkEnableSubmit()" />
                                            </span>
                                            <span class="imgoption">
                                                Banca electrónica
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="mp_agente">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_agente" value="agente" onclick="checkEnableSubmit()" />
                                            </span>
                                            <span class="imgoption">
                                                Ventanilla o Agentes
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="logos-bancos">
                                <img src="img/b.jpg" alt="">
                                <img src="img/bf.jpg" alt="">
                                <img src="img/bv.jpg" alt="">
                                <img src="img/s.jpg" alt="">
                                <img src="img/int.jpg" alt="">
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <!-- FIN CONTENT FORMULARIO -->

                    <div class="form-footer">
                            <div class="content-tc">
                                <label for="t_c" class="checkterminos"><b class="error-terminos"></b>   <input name="t_c" type="checkbox" id="t_c" onclick="checkEnableSubmit()" value="t_c" />
                                    Acepto los <a target="_blank" href="<?php echo $return_url_terminos;?>">términos y condiciones</a> de <b>"Joinnus S.A."</b>.
                                </label>
                            </div>
                            <div class="content-pagar">
                                <div id="sub-div">
                                    <button class="btn btn-pagar badge" type="submit" id="pagar" onclick="return buttonSubmit()" disabled="disabled" mouse> Pagar </button>
                                </div>
                            </div>
                            <span id="mensajeboton" style="display:none">Para continuar, debe aceptar T&eacute;rminos y Condiciones</span>
                    </div>

                </form>

            </div>

        </div>


    </div>

</body>
</html>