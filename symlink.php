<?php

$target = '/home/wappmakers/public_html/Blog_site/storage/app/public';

$shortcut = '/home/wappmakers/public_html/Blog_site/public/storage';

symlink($target, $shortcut);

?>