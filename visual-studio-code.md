# Drupal Coding Standards configuration on local machine using Visual Studio Code

- Install Visual Studio Code

- Install Composer

- Install VSC extensions as per: [https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code](https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code)  - &quot;Recommended Extensions&quot; &amp; &quot;Drupal 8 Recommended Extensions&quot;

- Install VSC extension called csscomb. Download the file [.csscomb.json](https://raw.githubusercontent.com/sdemi/drupal-docs/master/assets/.csscomb.json) and place it in your Drupal root .vscode directory

- Install Coder Sniffer as per: [https://www.drupal.org/node/1419988](https://www.drupal.org/node/1419988) &quot;Global Coder Install&quot; &amp; &quot;Register Coder Standards&quot;

  To install coder sniffer using composer, please follow the instructions as mentioned below:
  - Open command prompt
  - Verify if composer installed on your machine by executing the command
`C:\Users\Drupalguy>composer`
  - If installed, go to your project path
`C:\xampp\htdocs\site>`
  - Install coder using below command
`C:\xampp\htdocs\site>composer global require drupal/coder`
  - Register Coder Standards using below command
`C:\xampp\htdocs\site>composer global require dealerdirect/phpcodesniffer-composer-installer`
  - Verify if code/coding standards installed by using below command
`C:\xampp\htdocs\site>phpcs –i`
  - This command will output as –
_The installed coding standards are MySource, PEAR, PHPCS, PSR1, PSR2, Squiz, Zend, Drupal and DrupalPractice_

- Set Editor Settings as per: [https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code](https://www.drupal.org/docs/develop/development-tools/configuring-visual-studio-code)  &quot;Editor Settings&quot;

- Open settings.json file and update values for below keys as per your machine installation
_composer.executablePath_ (Path to the composer executable)
_composer.workingPath_ (Path to your project root folder)
_phpcs.composerJsonPath_ (The path to composer.json)
_php.validate.executablePath_ (Path to the php executable)

- After update to above keys, copy all the content from settings.json file and paste into:
_VSC -> Settings -> User Settings -> Save_
[settings.json](https://github.com/sdemi/drupal-docs/raw/master/assets/settings.json) file for reference

- Restart Visual Studio Code

- Open any module file and check if any warnings/errors are shown in the console for the code.
