<?php $templates = array(); ob_start();

//***** comments_count
?><div class="post_comments">COMMENTS (%comments_count%)</div><?php
$templates["comments_count"] = ob_get_contents();
ob_clean();

//***** categories
?><div class="post_categories">CATEGORY %categories%</div><?php
$templates["categories"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;