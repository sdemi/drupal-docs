### **Before you start –**

1. For documentation below, port number is used as **8080** for local environment setup because port number 80 was busy with other process. You can use the default port number 80 for your machine if you want. In this case just update 8080 by 80 at all occurrences. 
2. Drupal application root folder is assumed as "**mysite**". You can update it as per your preference.
3. Drupal application database is assumed as "**drupal-local**". You can update it as per your preference.

Please follow below steps for local environment setup using virtual host - 

### **Setup Virtual Host**

1. Clone project source code for your Drupal application using Git to local machine folder "**C:\xampp\htdocs\mysite**"
2. Open file "**C:\xampp\apache\conf\extra\httpd-vhosts.conf**" and remove all code in that file and add below code

```
<VirtualHost *:8080>    
	DocumentRoot "C:/xampp/htdocs/mysite"
	ServerName mysite
</VirtualHost>
```
3. Update file "**C:\Windows\System32\drivers\etc\hosts**" and add below line at the bottom –
`127.0.0.1       mysite`



###**Setup Local Database**

1. Start XAMPP MySQL server. Go to http://localhost:8080/phpmyadmin/
2. Create a blank database, say "**drupal-local**"
3. Create a file with name **settings.local.php** and put it in the folder of your application code `/mysite/sites/default`
4. Open **settings.local.php** file and update the file with below code - 
```
<?php
unset($settings['trusted_host_patterns']);
$options['uri'] = 'http://mysite:8080';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/development.services.yml';
$config = [];
$config['system.file']['path']['temporary'] = 'c:\temp';
$databases['default']['default'] = [
  'database' => 'drupal-local',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];
```
where **drupal-local** is the name of your database you created in step 2 above.

5. Import latest MySQL database into your local machine.

### **Access Local Site**
Please follow below steps only if you completed the above 2 sections successfully.

1. Restart XAMPP apache and MySQL server
2. Visit url "http://mysite:8080" in the browser. You will access the Drupal application pointing to local database with local machine code

If you face any issues accessing the site, there is something wrong in virtual host setup / database setup. Please check the PHP error log or apache error log to fix the issue.
