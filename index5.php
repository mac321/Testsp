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

            <div class="content-head">
                <div class="content-logos">
                    <div class="logo-socio">
                        <img src="img/logo-joinnus.png" align="middle" alt="">
                    </div>
                    <div class="logo-sp">
                        <img src="img/s1.png" alt="Seguripago">
                    </div>
                </div>
                <div class="ecommerce-text">
                    <div class="descripcion-normal">
                        Seleccione el medio de pago, acepte los términos y condiciones, y presione el botón <b>"Pagar"</b>
                    </div>
                </div>
            </div>

            <div class="content-form">

                <form action="index2.php" name="myform" id="seguripago-form-final" method="POST">
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
                                                <input type="radio" name="mp" id="mp_visa" value="visa" onclick="isCheckEnabled();"/>
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
                                                <input type="radio" name="mp" id="mp_mc" value="mastercard" onclick="isCheckEnabled();"/>
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
                                                <input type="radio" name="mp" id="mp_visa_debito" value="visa_debito" onclick="isCheckEnabled();"/>
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
                                                <input type="radio" name="mp" id="mp_be" value="bancae" onclick="isCheckEnabled();"/>
                                            </span>
                                            <span class="imgoption">
                                                Banca electrónica
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="mp_agente">
                                            <span class="radiooption">
                                                <input type="radio" name="mp" id="mp_agente" value="agente" onclick="isCheckEnabled();"/>
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
                                <label for="t_c" class="checkterminos"><b class="error-terminos"></b>   <input name="t_c" type="checkbox" id="t_c" value="t_c" />
                                    Acepto los <a target="_blank" href="<?php echo $return_url_terminos;?>">términos y condiciones</a> de <b>"Joinnus S.A."</b>.
                                </label>
                            </div>
                            <div class="content-pagar">
                                <div id="sub-div">
                                    <button class="btn btn-pagar badge" type="submit" id="pagar"  data-dismiss="modal" onclick="return checkEnableSubmit()"> Pagar </button>
                                </div>
                            </div>
                            <span id="mensajeboton" style="display:none">Para continuar, debe aceptar T&eacute;rminos y Condiciones</span>
                    </div>

                    <input type="hidden" id="O1" name="O1" value="57">
                    <input type="hidden" id="O2" name="O2" value="00001907">
                    <input type="hidden" id="O3" name="O3" value="240007790">
                    <input type="hidden" id="O4" name="O4" value="1410474251">
                    <input type="hidden" id="O5" name="O5" value="PEN">
                    <input type="hidden" id="O6" name="O6" value="2469.00">
                    <input type="hidden" id="O7" name="O7" value="1">
                    <input type="hidden" id="O8" name="O8" value="000">
                    <input type="hidden" id="O9" name="O9" value="">
                    <input type="hidden" id="O10" name="O10" value="0">
                    <input type="hidden" id="O11" name="O11" value="2">
                    <input type="hidden" id="O12" name="O12" value="">
                    <input type="hidden" id="O13" name="O13" value="">
                    <input type="hidden" id="O14" name="O14" value="">
                    <input type="hidden" id="O15" name="O15" value="2">
                    <input type="hidden" id="O16" name="O16" value="">
                    <input type="hidden" id="O17" name="O17" value="">
                    <input type="hidden" id="O18" name="O18" value="2014-09-14 17:24:02">

<!-- Codigo de socio
Numero de pedido
Numero de transaccion Seguripago
Fecha/hora de transaccion (timestamp)
Moneda de la transaccion
Importe de la transaccion (aprobado)
Resultado de la transaccion. Error (0), Aprobado (1), No aprobado (2)
Respuesta / Accion
Texto respuesta
Medio de pago utilizado (Tabla)
Modo de respuesta. Inmediato (1), Batch (2), Manual (3)
Codigo de autorizacion
Numero de referencia generado por el medio de pago
HASH de la transaccion
Código de Producto de SeguriPago
Número de tarjeta de crédito asteriscada
Nombre del tarjetahabiente
FECHA VENDICMIENTO -->

                </form>

            </div>

        </div>

        <div class="modal fade" id="myModal" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h2 class="modal-title center">Paga en Banca Electrónica</h2>
              </div>
              <div class="modal-body">

                    <h4>Seleccione el banco:</h4>

                    <div class="content-bancos">
                        <div class="logo-sp">
                            <img src="img/seguripago.jpg" alt="">
                        </div>
                        <div class="opciones-sp">
                            <ul>
                                <li>
                                    <label for="bc_bcp">
                                        <span>
                                            <input type="radio" name="mp" id="bc_bcp" value="bc_bcp" />
                                        </span>
                                        <span>
                                            <img src="img/b.jpg" alt="">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label for="bc_banbif">
                                        <span>
                                            <input type="radio" name="mp" id="bc_banbif" value="bc_banbif" />
                                        </span>
                                        <span>
                                            <img src="img/bf.jpg" alt="">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label for="bc_bbva">
                                        <span>
                                            <input type="radio" name="mp" id="bc_bbva" value="bc_bbva" />
                                        </span>
                                        <span>
                                            <img src="img/bv.jpg" alt="">
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="opciones-sp">
                            <ul>
                                <li>
                                    <label for="bc_scotia">
                                        <span>
                                            <input type="radio" name="mp" id="bc_scotia" value="bc_scotia" />
                                        </span>
                                        <span>
                                            <img src="img/s.jpg" alt="">
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label for="bc_interbank">
                                        <span>
                                            <input type="radio" name="mp" id="bc_interbank" value="bc_interbank" />
                                        </span>
                                        <span>
                                            <img src="img/int.jpg" alt="">
                                        </span>
                                    </label>
                                </li>
                             </ul>
                        </div>
                    </div>

                    <div class="pago-desc pago-desc-info">
                        <h2 >Informacion necesaria para ir a pagar</h2>
                        <p>
                            Código de Seguripago: <span>253212125245</span>
                            <br>
                            La fecha limite para realizar el pago es: <span>15/12/12 12:15</span>
                        </p>
                  </div>
              </div>
              <div class="modal-footer">
                <a class="btn btn-pagar badge" href="#" id="pagar-modal" target="_blank" > Pagar </a>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>



<script>
    $(document).ready(function(){


    });

function checkEnableSubmit() {


    var i;
    var opEstado = false;
    var opcion;
    for (i=0;i<document.myform.mp.length;i++){

        if (document.myform.mp[i].checked) {
            opEstado = true;
            opcion = document.myform.mp[i].value;
            break;
        }
    }

    if ((opEstado == true) && (document.myform.t_c.checked == 1))
        {

            // alert(document.myform.mp[i].value);
            // document.getElementById("pagar").disabled = false;

            if(opcion == "bancae"){

                $.post('index3.php',{I2:12},
                    function(data) {
                        var dataStr = JSON.stringify(data);
                        var dataJson = JSON.parse(dataStr);

                        $("input:hidden[name=O1]").val();
                        $("#pagar-modal").attr('href','index4.php');
                        // alert(dataJson);
                        // textLabel = 'Seguricash Generado';
                        // $("#myModalLabel").text(textLabel);

                        // htmlmod = htmlModal(glacier.data['O3'],'Generado');
                        // $("#modal-sp").html('');
                        // $("#modal-sp").append(htmlmod );
                        // loadData();
                        // btn.button('reset');
                    }
                );

                $('#myModal').modal('toggle');
                return false;
            }
            else
            {
                this.form.submit();

            }

        }
    else
        {
            return false;
            // document.getElementById("pagar").disabled = true;
        }

}

function isCheckEnabled() {
    var i;
    var opEstado = false;
    var opcion;
    for (i=0;i<document.myform.mp.length;i++){

        if (document.myform.mp[i].checked) {
            opEstado = true;
            opcion = document.myform.mp[i].value;
            break;
        }
    }

    if (opEstado == true)
        {
            if(opcion == "bancae")
            {
                document.getElementById("pagar").innerHTML = "Continuar";
            }
            else
            {
                document.getElementById("pagar").innerHTML = "Pagar";
            }
        }
    else
        {
            document.getElementById("pagar").innerHTML = "Pagar";
        }

}

</script>

</body>
</html>