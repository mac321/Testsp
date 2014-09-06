<?php
/* Script para la plantilla de Medios de Pago Horizontal
 * ======================================================
 * Creado por César García el 19 de julio de 2013
 * Se hace referencia desde: /horizontal.php
 */
?>
<script type="text/javascript">
function checkEnableSubmit() {
    var i
    var mp
    for (i=0;i<document.myform.mp.length;i++){
        if (document.myform.mp[i].checked) {
            mp=1
            break
        }
    }
    if ((mp==1) && (document.myform.t_c.checked==1)) // some logic to determine if it is ok to go
        {document.getElementById("pagar").disabled = false;}
    else // in case it was enabled and the user changed their mind
        {document.getElementById("pagar").disabled = true;}
}
function buttonSubmit() {
this.disabled=true;this.form.submit();
}

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6536106-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>