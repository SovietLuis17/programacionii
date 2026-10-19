<?php
namespace Libs\Matematicas\Financiera;

function tea($capital,$tasa,$periodo) {
// capital * (1 + tasa ) elevado periodo

return number_format($capital * ((1+ $tasa) **$periodo),2);

}



?>