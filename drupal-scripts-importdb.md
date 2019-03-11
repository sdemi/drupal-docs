# Automation script to import database into local

I have created an automation script that will allow you to import the database from MySQL into local. Please use this as it will save you time and will enable you to sync your database often to avoid synchronization issues.

## Features:
- The script is committed to code in [_scripts/importdb.php_](https://raw.githubusercontent.com/sdemi/drupal-docs/master/assets/importdb.php)
- The script will use your _settings.php_ for the db settings and _settings.local.php_ for local db, so no database configuration is necessary.
- The script will import the database, then it will import the database into your local
- Flush the full Drupal cache
- Open up a new Chrome tab and log you in as administrator to your local Drupal instance.
- In the future we will extend its functionality to enable/disable modules or make config changes using this script.

## How to configure:

- First you will need to have Git Bash installed.
- You will need to update your .bashrc which sits in your user's home directory. Mine is _c:\Users\serge_000\.bashrc_. If the file does not exist, please create it.
- You should update your .bashrc file like this:
```
export PATH="$HOME/AppData/Roaming/Composer/vendor/bin:$PATH"
export PATH="/c/Apps/XAMPP/mysql/bin:$PATH"
export PATH="/c/Program Files (x86)/Google/Chrome/Application:$PATH"
cd /c/data/www/mysite
```
Line #1 is optional unless you are planning on using composer. This should be the path to your composer executable.
Line #2 this should be the path to your mysql.exe. This will depend on where you installed XAMPP.
Line #3 this is the path to your Chrome browser
Line #4 will automatically cd you into your code repository when you start git bash. Please update this to the folder where your code is checked out.

- Please follow the directory structure as above, do not use c:\something\etc, use /c/something/etc.
- Update your **settings.local.php** like so


```
<?php
unset($settings['trusted_host_patterns']);
$options['uri'] = 'http://mysite.localhost';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/development.services.yml';
$config = [];
$config['system.file']['path']['temporary'] = 'c:\temp';
$databases['default']['default'] = array (
  'database' => 'drupal-remote',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
```
The highlighted URL should point to your local Drupal instance as you access it in the browser. Avoid the trailing slash.
- Restart git bash for the changes to take effect.

## How to run:
- run git bash
- cd into scripts directory
- run php importdb.php
- Your output should look like this:

![auto-import-db-1.png](https://github.com/sdemi/drupal-docs/raw/master/assets/auto-import-db-1.png)

- Chrome will open a new tab and log you in to your local instance

If you get error like below:

![auto-import-db-2.png](https://github.com/sdemi/drupal-docs/raw/master/assets/auto-import-db-2.png)

Please follow below steps to resolve this issue: 
1. Open **Control Panel**.
2. Search for "Advanced system settings".
3. Open "Advanced system settings".
4. Click **Environment Variables**. In the section **System Variables**, find the **PATH** environment variable and select it. Click Edit. If the PATH environment variable does not exist, click New.
5. In the Edit System Variable (or New System Variable) window, click **New** button and add below path. 
`C:\xampp\php`
6. Click OK.
7. In the section **System Variables**, find the **PATHEXT** environment variable and select it. Click Edit.
8. Add the following extension at the end.
`;.php`
9. Click OK.
10. Click OK twice 2 save the changes. 
11. Try again with **How to run** section.
