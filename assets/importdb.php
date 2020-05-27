<?php

print_r("Database import script"."\n");
print_r("======================"."\n");

/* Turn off PHP notices and warnings */

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

/* Determine operating system slashes */

$s = DIRECTORY_SEPARATOR;

/* Check if mysql and mysqldump is available */

$which_mysql = shell_exec("which mysql");
$which_mysqldump = shell_exec("which mysqldump");
if ($which_mysql != '' && $which_mysqldump != '') {
} else {
  print_r("MySQL not found"."\n");
  print_r("Exiting..."."\n");
  return;
}

/* Change directory to the path of the script */

chdir(dirname($_SERVER["SCRIPT_FILENAME"]));

/* Get checked out repository branch */

print_r("Current branch is: ");
$branch = shell_exec("git rev-parse --abbrev-ref HEAD");
print_r($branch);
$env = ($argv[1] != '') ? $argv[1] : trim($branch);
putenv("GIT_BRANCH=".$env);

/* Dumping database */

print_r("Dumping database..."."\n");
include "../sites/default/settings.php";
$mysql_dump_command = 'mysqldump --ssl-ca="..'.$s.'sites'.$s.'BaltimoreCyberTrustRoot.crt.pem" --user="'.$databases['default']['default']['username'].'" --password="'.$databases['default']['default']['password'].'" --host="'.$databases['default']['default']['host'].'" --protocol=tcp --port='.$databases['default']['default']['port'].' --default-character-set=utf8 --skip-triggers "'.$databases['default']['default']['database'].'" > "..'.$s.'sites'.$s.'default'.$s.'files'.$s.'importdb.sql"';
shell_exec($mysql_dump_command);

/* Importing database into local */

putenv('GIT_BRANCH');
print_r("Importing database into local..."."\n");
include "../sites/default/settings.local.php";
$mysql_import_command = 'mysql --user='.$databases['default']['default']['username'].' --password="'.$databases['default']['default']['password'].'" --host='.$databases['default']['default']['host'].' --protocol=tcp --port='.$databases['default']['default']['port'].' --default-character-set=utf8 --comments --database='.$databases['default']['default']['database'].'  < "..'.$s.'sites'.$s.'default'.$s.'files'.$s.'importdb.sql"';
shell_exec($mysql_import_command);

/* Setting Drupal CLI tool */

$drupal = "vendor".$s."bin".$s."drupal";

/* Fix some permissions */

chdir("..");
shell_exec("chmod +x ".$drupal);
shell_exec("chmod +x vendor".$s."drupal".$s."console".$s."bin".$s."drupal");
//shell_exec("chmod +x vendor".$s."drush".$s."drush".$s."drush");

/* Clearing Drupal cache */

print_r("Clearing Drupal cache..."."\n");
shell_exec($drupal." cache:rebuild");

/* Turn on local development modules and-or settings */

print_r("Turning on devel module..."."\n");
shell_exec($drupal." module:install devel");

/* Logging you in as admin */

$onetime_login = shell_exec($drupal." --uri=".$options['uri']." user:login:url 1");
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $onetime_login, $onetime_login_url);
$which_chrome = shell_exec("which chrome");
if ($which_chrome != '') {
  print_r("Logging you in as admin..."."\n");
  shell_exec("chrome ".$onetime_login_url[0][0]."?destination=/");
} else {
  print_r("Copy/paste the following URL into your browser to login as admin:"."\n");
  print_r($onetime_login_url[0][0]."?destination=/"."\n");
}
