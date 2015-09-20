<?php $templates = array(); ob_start();

//***** date
?><time datetime="%date_iso%">%date%</time><?php
$templates["date"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;