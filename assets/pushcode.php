<?php

if ($argv[1] != '')
{
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

  // do git add to local code repository
  print_r("=== Git add ==="."\n");
  $git_add = shell_exec("git add -A");
  print_r($git_add."\n");

  // do git commit to local code repository
  print_r("=== Git commit ==="."\n");
  $git_commit = shell_exec('git commit -m "'.$argv[1].'"');
  print_r($git_commit."\n");

  // do git push from local to remote repository
  print_r("=== Git push ==="."\n");
  $git_push = shell_exec("git push -u origin ".$branch);
  print_r($git_push."\n");
}
else
{
  print_r("Please provide a comment for your commit."."\n");
}
