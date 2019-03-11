# Here are instructions for setting up Xdebug debugger

As per the Drupal documentation:

_For advanced development a debugger may be very useful. A debugger will allow you to follow program execution and its effects, to observe the call stack of functions, and review the contents of variables at any point during execution._

- You should have Visual Studio Code complete setup as per previous documentation

- Install Xdebug
  - Go to your PHP info page - [http://mysite.localhost/admin/reports/status/php](http://cat.localhost/admin/reports/status/php)
  - Ctrl-A to select all and Ctrl-C to copy the whole page
  - Paste the page into [https://xdebug.org/wizard.php](https://xdebug.org/wizard.php) to analyse your phpinfo() output
  - Download the dll extension and install it as per instructions on screen
  - Also when you are editing php.ini, scroll to the very bottom of the file and add this:

~~~~
[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.idekey = VSCODE
xdebug.remote_log = "C:\temp\xdebug_remote.log"
~~~~
-
   - Restart your web server and load phpinfo() again
   - Ensure xdebug is enabled:
![](https://github.com/sdemi/drupal-docs/raw/master/assets/xdebug-php.png)
- Install Xdebug helper Chrome plugin
  - Install this: [https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc?hl=en](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc?hl=en)
  - When the icon appears in your browser, right click on it and go to options
  - Set the IDE and Key to &quot;Other&quot; and &quot;VSCODE&quot;

- Configure Xdebug in Visual Studio Code
  - Go to [https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code](https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code) and scroll down to &quot;Configuring XDebug&quot; section
  - Complete steps 1 - 3, make sure to update the pathMappings variable like this, except using your code directory

~~~~
"pathMappings": {
  "C:/data/www/mysite": "${workspaceRoot}"
},
~~~~

- Run the debugger
  - Get to the page you are trying to debug. We&#39;ll use [http://cat.localhost/node/224/edit](http://mysite.localhost/node/123/edit) as an example. This is editing a forum post.
  - Turn on xdebug in the browser by left click. Icon should be green after enabled.
 ![](https://github.com/sdemi/drupal-docs/raw/master/assets/xdebug-chrome.png)
  - Go to VSCode and open up \modules\custom\mysite\_forum\_edit\_form\mysite\_forum\_edit\_form.module
  - Set breakpoint at line #16
  - Click the debug icon on the left
  - Click the green triangle icon to run the debugger
  - Uncheck the everything setting in the breakpoints
  - Go back to the browser and reload the page
  - Your VSCode should now look like this. Red rectangles I added to help locate the options from the steps above.
 ![](https://github.com/sdemi/drupal-docs/raw/master/assets/xdebug-vsc.png)

- To learn more about code debugging you can check the Visual Studio Code documentation here:
[https://code.visualstudio.com/docs/editor/debugging#\_debug-actions](https://code.visualstudio.com/docs/editor/debugging#_debug-actions)
