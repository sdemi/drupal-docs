<?php

// change directory to Drupal root
chdir("..");

// get checked out repository branch
print_r("=== Current branch ==="."\n");
$branch = shell_exec("git rev-parse --abbrev-ref HEAD");
print_r($branch."\n");

// do git pull to update local code repository
print_r("=== Git pull ==="."\n");
$git_pull = shell_exec("git pull origin ".$branch);
print_r($git_pull."\n");
