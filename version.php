<?php

$branch = exec('git rev-parse --symbolic-full-name --abbrev-ref HEAD') ;
$tag = exec('git describe') ;
$id = exec('git rev-parse --short=7 HEAD') ;

define('VERSION', $tag. '.' .$id. '@' .$branch) ;
