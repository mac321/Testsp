<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/horizontal_css" />
    <script src="css/horizontal_js.js"></script>
</head>
<body>
    <form name="myform" id="seguripago-form-final" action="<?php echo dirname($_SERVER['PHP_SELF'])=="/"?"":dirname($_SERVER['PHP_SELF']); ?>/pagoin2.php" onsubmit="return checkEnableSubmit()" method="POST">
        <div id="head">
            <div class="all">
                <div class="seguripago_ecommerce_logo">
                    <img src="<?php echo $imagen;?>" align="middle" width="120" alt="">
                </div>
                <div class="seguripago_ecommerce_text">
                    <div class="descripcion-normal">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, facere maxime dicta vel laboriosam
                    </div>
                </div>
            </div>
            <div class="cuenta">
                <div class="monto">
                    PEN
                    <div class="seguripago_ecommerce_imp">Importe a pagar: S/. 10</div>
                </div>

                <div class="tipo">
                    <h2>Seleccione el medio de pago</h2>
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
</body>
</html>