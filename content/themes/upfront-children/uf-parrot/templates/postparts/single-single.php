<?php $templates = array(); ob_start();

//***** author
?><a class="post_author" href="%author_url%">Posted by %author% -&nbsp;</a><?php
$templates["author"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;