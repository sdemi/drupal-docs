# Behat Testing

## Steps to run Behat in local environment

* Step 1: Check the version of behat using following command:
	`vendor/bin/behat -V`
* Step 2: Create the behat.yml file in the root directory.
* Step 3: Initialize Behat to generate a FeatureContext class by using 
	`vendor/bin/behat –init`
This will automatically create the features folder in your local repository.
* Step 4: Use `vendor/bin/behat -dl`  to get the default behat test commands.
* Step 5: Create a test case file with the extension of feature in the features folder.
* Step 6: Run the feature file using following command:
	`vendor/bin/behat features/[test_case_file].feature`

## Sample Behat.yml file
```
default:
  suites:
    default:
      contexts:
        - FeatureContext
        - Drupal\DrupalExtension\Context\ConfigContext
        - Drupal\DrupalExtension\Context\DrupalContext
        - Drupal\DrupalExtension\Context\MessageContext
        - Drupal\DrupalExtension\Context\MinkContext
        - Drupal\DrupalExtension\Context\MarkupContext
        - Drupal\DrupalExtension\Context\DrushContext
  extensions:
    Behat\MinkExtension:
      goutte: ~
      selenium2: ~
      base_url: http://site2:8080/
    Drupal\DrupalExtension:
      blackbox: ~
      api_driver: "drupal"
      drupal:
        drupal_root: 'C:\xampp\htdocs\site3'
      region_map:
        left sidebar: "#sidebar-first"
        content: "#content"
      selectors:
        error_message_selector: '.messages--error'
````

## Sample working  feature file
 ```
Feature: App Creation
  In order to test search keyword on Product page.
  As a user
  I need to be able to search the products

  Scenario: Complete the search keyword test
    Given I am on "/api-and-services/products"
    Then I should see "Products"
    Then I fill in "edit-combine" with "basic"
    Then I press "edit-submit-api-services-list"
    Then I should see "basic"
````

## Default Behat commands 
```
[default | Given I set the configuration item :name with key :key to :value
default | Given I set the configuration item :name with key :key with values:
default | Given I am an anonymous user
default | Given I am not logged in
default | Given I am logged in as a user with the :role role(s)
default | Given I am logged in as a/an :role
default | Given I am logged in as a user with the :role role(s) and I have the following fields:
default | Given I am logged in as :name
default | Given I am logged in as a user with the :permissions permission(s)
default | Then I should see (the text ):text in the :rowText row
default | Then I should not see (the text ):text in the :rowText row
default | Given I click :link in the :rowText row
default | Then I (should )see the :link in the :rowText row
default | Given the cache has been cleared
default | Given I run cron
default | Given I am viewing a/an :type (content )with the title :title
default | Given a/an :type (content )with the title :title
default | Given I am viewing my :type (content )with the title :title
default | Given :type content:
default | Given I am viewing a/an :type( content):
default | Then I should be able to edit a/an :type( content)
default | Given I am viewing a/an :vocabulary term with the name :name
default | Given a/an :vocabulary term with the name :name
default | Given users:
default | Given :vocabulary terms:
default | Given the/these (following )languages are available:
default | Then (I )break
default | Then I should see the error message( containing) :message
default | Then I should see the following error message(s):
default | Given I should not see the error message( containing) :message
default | Then I should not see the following error messages:
default | Then I should see the success message( containing) :message
default | Then I should see the following success messages:
default | Given I should not see the success message( containing) :message
default | Then I should not see the following success messages:
default | Then I should see the warning message( containing) :message
default | Then I should see the following warning messages:
default | Given I should not see the warning message( containing) :message
default | Then I should not see the following warning messages:
default | Then I should see the message( containing) :message
default | Then I should not see the message( containing) :message
default | Given I am at :path
default | When I visit :path
default | When I click :link
default | Given for :field I enter :value
default | Given I enter :value for :field
default | Given I wait for AJAX to finish
default | When /^(?:|I )press "(?P<button>(?:[^"]|\\")*)"$/
default | When I press the :button button
default | Given I press the :char key in the :field field
default | Then I should see the link :link
default | Then I should not see the link :link
default | Then I should not visibly see the link :link
default | Then I (should )see the heading :heading
default | Then I (should )not see the heading :heading
default | Then I (should ) see the button :button
default | Then I (should ) see the :button button
default | Then I should not see the button :button
default | Then I should not see the :button button
default | When I follow/click :link in the :region( region)
default | Given I press :button in the :region( region)
default | Given I fill in :value for :field in the :region( region)
default | Given I fill in :field with :value in the :region( region)
default | Then I should see the heading :heading in the :region( region)
default | Then I should see the :heading heading in the :region( region)
default | Then I should see the link :link in the :region( region)
default | Then I should not see the link :link in the :region( region)
default | Then I should see( the text) :text in the :region( region)
default | Then I should not see( the text) :text in the :region( region)
default | Then I (should )see the text :text
default | Then I should not see the text :text
default | Then I should get a :code HTTP response
default | Then I should not get a :code HTTP response
default | Given I check the box :checkbox
default | Given I uncheck the box :checkbox
default | When I select the radio button :label with the id :id
default | When I select the radio button :label
default | Given /^(?:|I )am on (?:|the )homepage$/
default | When /^(?:|I )go to (?:|the )homepage$/
default | Given /^(?:|I )am on "(?P<page>[^"]+)"$/
default | When /^(?:|I )go to "(?P<page>[^"]+)"$/
default | When /^(?:|I )reload the page$/
default | When /^(?:|I )move backward one page$/
default | When /^(?:|I )move forward one page$/
default | When /^(?:|I )follow "(?P<link>(?:[^"]|\\")*)"$/
default | When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
default | When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with:$/
default | When /^(?:|I )fill in "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)"$/
default | When /^(?:|I )fill in the following:$/
default | When /^(?:|I )select "(?P<option>(?:[^"]|\\")*)" from "(?P<select>(?:[^"]|\\")*)"$/
default | When /^(?:|I )additionally select "(?P<option>(?:[^"]|\\")*)" from "(?P<select>(?:[^"]|\\")*)"$/
default | When /^(?:|I )check "(?P<option>(?:[^"]|\\")*)"$/
default | When /^(?:|I )uncheck "(?P<option>(?:[^"]|\\")*)"$/
default | When /^(?:|I )attach the file "(?P<path>[^"]*)" to "(?P<field>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should be on "(?P<page>[^"]+)"$/
default | Then /^(?:|I )should be on (?:|the )homepage$/
default | Then /^the (?i)url(?-i) should match (?P<pattern>"(?:[^"]|\\")*")$/
default | Then /^the response status code should be (?P<code>\d+)$/
default | Then /^the response status code should not be (?P<code>\d+)$/
default | Then /^(?:|I )should see "(?P<text>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should not see "(?P<text>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should see text matching (?P<pattern>"(?:[^"]|\\")*")$/
default | Then /^(?:|I )should not see text matching (?P<pattern>"(?:[^"]|\\")*")$/
default | Then /^the response should contain "(?P<text>(?:[^"]|\\")*)"$/
default | Then /^the response should not contain "(?P<text>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should see "(?P<text>(?:[^"]|\\")*)" in the "(?P<element>[^"]*)" element$/
default | Then /^(?:|I )should not see "(?P<text>(?:[^"]|\\")*)" in the "(?P<element>[^"]*)" element$/
default | Then /^the "(?P<element>[^"]*)" element should contain "(?P<value>(?:[^"]|\\")*)"$/
default | Then /^the "(?P<element>[^"]*)" element should not contain "(?P<value>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should see an? "(?P<element>[^"]*)" element$/
default | Then /^(?:|I )should not see an? "(?P<element>[^"]*)" element$/
default | Then /^the "(?P<field>(?:[^"]|\\")*)" field should contain "(?P<value>(?:[^"]|\\")*)"$/
default | Then /^the "(?P<field>(?:[^"]|\\")*)" field should not contain "(?P<value>(?:[^"]|\\")*)"$/
default | Then /^(?:|I )should see (?P<num>\d+) "(?P<element>[^"]*)" elements?$/
default | Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should be checked$/
default | Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox is checked$/
default | Then /^the checkbox "(?P<checkbox>(?:[^"]|\\")*)" (?:is|should be) checked$/
default | Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should (?:be unchecked|not be checked)$/
default | Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox is (?:unchecked|not checked)$/
default | Then /^the checkbox "(?P<checkbox>(?:[^"]|\\")*)" should (?:be unchecked|not be checked)$/
default | Then /^the checkbox "(?P<checkbox>(?:[^"]|\\")*)" is (?:unchecked|not checked)$/
default | Then /^print current URL$/
default | Then /^print last response$/
default | Then /^show last response$/
default | Then I should see the button :button in the :region( region)
default | Then I should see the :button button in the :region( region)
default | Then I( should) see the :tag element in the :region( region)
default | Then I( should) not see the :tag element in the :region( region)
default | Then I( should) not see :text in the :tag element in the :region( region)
default | Then I( should) see the :tag element with the :attribute attribute set to :value in the :region( region)
default | Then I( should) see :text in the :tag element with the :attribute attribute set to :value in the :region( region)
default | Then I( should) see :text in the :tag element with the :property CSS property set to :value in the :region( [region)]()]()
```
## Environment specific settings

If you intend to run your tests on different environments these settings should not be committed to behat.yml. Instead they should be exported in an environment variable. Before running tests Behat will check the BEHAT_PARAMS environment variable and add these settings to the ones that are present in behat.yml. This variable should contain a JSON object with your settings.

`$ export BEHAT_PARAMS='{"extensions":{"Behat\\MinkExtension":{"base_url":"http://localhost"},"Drupal\\DrupalExtension":{"drupal":{"drupal_root":"C:\\xampp\\htdocs"}}}}'`

In the above command, change the base URL and the Drupal root as per your local environment.

Execute the above command and remove base url and drupal root from your behat.yml. 

#### Updated Behat.yml file after executing the command:


```
default:
  suites:
    default:
      contexts:
        - FeatureContext
        - Drupal\DrupalExtension\Context\ConfigContext
        - Drupal\DrupalExtension\Context\DrupalContext
        - Drupal\DrupalExtension\Context\MessageContext
        - Drupal\DrupalExtension\Context\MinkContext
        - Drupal\DrupalExtension\Context\MarkupContext
        - Drupal\DrupalExtension\Context\DrushContext
  extensions:
    Behat\MinkExtension:
      goutte: ~
      selenium2: ~
    Drupal\DrupalExtension:
      blackbox: ~
      api_driver: "drupal"
      region_map:
        left sidebar: "#sidebar-first"
        content: "#content"
      selectors:
        error_message_selector: '.messages--error'
```
