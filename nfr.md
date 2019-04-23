# Drupal Nonfunctional Requirements (NFR)

The Nonfunctional Requirements (NFRs) document will serve as a guideline for the project's features and requirements outside of SCRUM planning. The said requirements are modeled against best practices of (WCM) industry (https://en.wikipedia.org/wiki/Web_content_management_system). The topics for these requirements are included in the Table of Contents below:

## Audit

* Internal audit will be performed on a quarterly basis.

## Backup / Data Recovery

* Production database will have cycling backups for the past 7 days.
* Production web server log will have entries for the past 30 days.
* Version Control will store the code repository (including historical changes).

## Code Review

* Coding standards will be followed by https://www.drupal.org/docs/develop/standards
* Code review will be completed before moving any code to the staging environment.
* Daily technical call will be conducted with Architect and Team to discuss technical approach taken to resolve each user story.
* A common code editor will be used which will report all Drupal Coding Standard errors and warnings.

## Deployment

* The production website will not experience any downtime during a code deployment.
* Drupal configuration will not be manually updated; rather, will be done through code deployments using Drupal's core Configuration Management system.
* Only Senior Developers and higher will be able to deploy code to staging environment.
* Only Architect will be able to push code to production environment.
* Code deployments to production will be based on release schedule from SCRUM.
* Upon committing code, Drupal Coding Standards and PHP fetal errors will be forced to be resolved.

## Documentation

* Comments will be provided for all unique features in code.
* A Wiki will be maintained to document technical and non-technical guidelines for the project.

## Performance

* Average page load time should be under 4 seconds.
* Website performance will not degrade with 100 concurrent users or less.
* Anonymous users will bypass Drupal/PHP and load from cache server directly.
* Production cluster will feature multiple web nodes.
* A Load Balancer server will manage load & failover among multiple servers.
* Production database will have a failover server.

## Project Management

* Project will be conducted using SCRUM methodology.
* Sprints will consist of 2 week intervals.
* Sprints will commence only when resource capacity is 100% met.
* Each user story will be tagged under a Feature.
* Each Feature will be tagged under an Epic.
* Stand up calls will be conducted daily with Team, Architect, Project Manager and Product Owner to give updates on user stories.
* Critical hot-fixes to production will supersede all user stories.

## Security

* Developers and Senior Developers will not have admin user role assignment on production.
* An admin account backdoor login will only be shared with Product Owner and Architect.
* Access to production database will only be accessible by production web node servers.
* Access to production's hosting administrative interface will only be accessible to Product Owner and Architect.
* Drupal critical security patches to core and contributed modules will be deployed to production within 3 non-business days.
* Admin access will always be provided via Drush or Drupal Console CLI.

## Reference

* Drupal. (2019). Coding standards. Retrieved from  https://www.drupal.org/docs/develop/standards
* Wikipedia. (2019, February 10). Web content management system. Retrieved from https://en.wikipedia.org/wiki/Web_content_management_system
* Wikipedia. (2018, December 17). Non-functional requirement. Retrieved from https://en.wikipedia.org/wiki/Non-functional_requirement
* Kumar, S. (2016, March 18). How to do NFR Testing (Non Functional Testing). Retrieved from https://capgemini.github.io/testing/how-to-do-nft/
* Yusop, N. Zowghi, D. Lowe, D. (2008, August 18). The impacts of non-functional requirements in web system projects. Retrieved from https://opus.lib.uts.edu.au/handle/10453/10267
