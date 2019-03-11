<?php

/* Turn off all PHP error reporting */

error_reporting(0);

/* Get checked out repository branch */

print_r("Current branch is: ");
$branch = shell_exec("git rev-parse --abbrev-ref HEAD");
print_r($branch);
$env = ($argv[1] != '') ? $argv[1] : trim($branch);
putenv("GIT_BRANCH=".$env);

/* Dumping database from Azure */

print_r("Dumping database..."."\n");
include "../sites/default/settings.php";
$mysql_dump_command = 'mysqldump.exe --user="'.$databases['default']['default']['username'].'" --password="'.$databases['default']['default']['password'].'" --host="'.$databases['default']['default']['host'].'" --protocol=tcp --port='.$databases['default']['default']['port'].' --default-character-set=utf8 --skip-triggers "'.$databases['default']['default']['database'].'" > "..\sites\default\files\importdb.sql"';
shell_exec($mysql_dump_command);

/* Importing database into local */

print_r("Importing database into local..."."\n");
include "../sites/default/settings.local.php";
$mysql_import_command = 'mysql.exe --user='.$databases['default']['default']['username'].' --password="'.$databases['default']['default']['password'].'" --host='.$databases['default']['default']['host'].' --protocol=tcp --port='.$databases['default']['default']['port'].' --default-character-set=utf8 --comments --database='.$databases['default']['default']['database'].'  < "..\sites\default\files\importdb.sql"';
shell_exec($mysql_import_command);

/* Clearing Drupal cache */

print_r("Clearing Drupal cache..."."\n");
chdir("..");
shell_exec("vendor\bin\drupal cache:rebuild");

/* Turn on local development modules and-or settings */

// print_r("Turning on local development modules and-or settings..."."\n");
// shell_exec("vendor\bin\drupal module:dependency:install devel");

/* Logging you in as administrator */

print_r("Logging you in as administrator..."."\n");
$onetime_login = shell_exec("vendor\bin\drupal --uri=".$options['uri']." user:login:url 1");
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $onetime_login, $onetime_login_url);
shell_exec("chrome.exe ".$onetime_login_url[0][0]."?destination=/");
