# Drupal growth opportunities within your Enterprise

This article is broken up into two sections. First about Drupal background and important architecture information. Second is about how Drupal fits into the enterprise, with information about additional features that take Drupal beyond just a CMS, followed up by some case studies.

## Drupal background

### Drupal design philosophy

Drupal has been built around a similar architecture as Linux. There are two particular concepts adopted from Linux:
- Modules
- Distributions

#### Modules

Modules in Drupal act as plugins or extensions, as called by other software systems. The module system in Drupal works based on the Drupal hook system. What this means is that modules are only able to modify Drupal based on a select number of functions; as defined by the Drupal API documentation ([https://api.drupal.org/](https://api.drupal.org/api/drupal)). Sure, you can also add whatever custom PHP code you want; but to alter the output of Drupal, this can only be done by those set of hook functions. This provides a very structured format for writing code and provides high integrity for code. Currently there is a total of 43,000 modules available on Drupal.org, 7,100 of which are for Drupal 8.

#### Distributions

Another concept that Drupal has adopted from Linux are distributions. Just like in Linux, a distribution includes sets of software packages and customizations that are built on top of core to provide a unique experience already out-of-the-box. This unique experience can be geared for a particular vertical or just boost your development time by providing best-in-practice modules and customizations, similar to Ubuntu. Distributions can also be a great way to provide proof of concepts since they provide functionality out-of-the-box, so there is less development time. In the next section I will cover some good examples of Drupal distributions.

### Examples of Drupal distributions

#### Acquia Lightning
[https://www.acquia.com/products-services/acquia-lightning](https://www.acquia.com/products-services/acquia-lightning)
Acquia Lighting is a distribution managed by Acquia which helps their customers push the envelope of Drupal beyond just a CMS, into the WCM (Web Content Management) category. This particular distribution is not geared toward a particular vertical, audience, or experience. Rather, it is meant to boost development time and provide common best-in-practice modules and configurations to help a wide range of projects.

#### Contena CMS
[https://www.contentacms.org/](https://www.contentacms.org/)
In Drupal 8, the association has made a strong push to providing an API first type strategy. The plan was that Drupal was going to focus on backend content management first and UI presentation second. This meant providing a REST API as part of core to expose content and allow CRUD (Create, Read, Update, and Delete) operations through APIs. On top of this Contena CMS aims to extend the API functionality and provide integration with multiple UI presentation frameworks including Vue.js, React, Ember, Angular, and many other JavaScript frameworks and libraries ([https://github.com/contentacms](https://github.com/contentacms)).

#### Drupal Commerce Kickstart
[https://www.commercekickstart.com/](https://www.commercekickstart.com/)
Drupal Commerce Kickstart is one of the most popular go-to solutions for E-commerce on Drupal. The distribution provides integrations with several popular payment gateways, regional customization out-of-the-box, shipping services integrations, taxes &amp; accounting integrations, and more.

#### Open Social
[https://www.getopensocial.com/](https://www.getopensocial.com/)
Previously known as Drupal Commons on Drupal 7. Open Social provides a platform for building communities and engaging users.

#### Thunder
[https://thunder.org/](https://thunder.org/)
Content publishing is second nature to Drupal. But core feature set is limited in functionality due to the philosophy of Drupal to keep things modularized and simple. Thunder is one of the most popular distributions for content publishing. It brings together best-in-class processes for content tools by providing these modules and customizations out-of-the-box.

### Release schedule

In the past upgrading major versions of Drupal was a very lengthy process; for example Drupal 6 to 7 or Drupal 7 to 8. These versions included major changes in the architecture of Drupal. For example, in Drupal 8, a new core framework was introduced called Symfony ([https://symfony.com/](https://symfony.com/)). Symfony pushed Drupal to enforce Object Oriented Programming (OOP) which was a major change to enforce high integrity code.

In the upgrade to Drupal 9, the transition will be a lot smoother. This is because no major rewrite architectural changes like introduction of Symfony are coming. And new functions in Drupal 9 are already being built into Drupal 8. So when Drupal 9.0 is released, the only change will be removing the deprecated functions.

You can actively be preparing for Drupal 9 upgrade now by using a tool called Drupal Check ([https://github.com/mglaman/drupal-check](https://github.com/mglaman/drupal-check)) which reports all functions that will be removed in Drupal 9 when it is released. Thus, your team can replace these functions with new functions. So when the Drupal 9.0 releases is made available, the only dependency will be 3rd party contributed modules; in which the maintainers are (or should be) actively upgrading deprecated functions. If for any reason a 3rd party contributed module is not ready for Drupal 9 release, your team can contribute back the upgraded functions or switch modules for alternatives.

**Please see the release schedule chart below:**

<p align="center">
  <img src="https://i.imgur.com/lOEIEze.png">
</p>

- Reference: [https://dri.es/state-of-drupal-presentation-april-2019](https://dri.es/state-of-drupal-presentation-april-2019)

## Drupal within the Enterprise

### Drupal as WCM &amp; DXP

Drupal by itself is categorized as a Content Management System (CMS). However, at the enterprise level, in this day of age, globalization and vast segmentation of markets has pushed the requirements to provide a highly customized experience for users, depending on their region, market segment, or demographic. This is where Acquia comes in to fill the gap that Drupal as a stand-alone CMS has.

#### Acquia Lift
In particular, to fill the gap of experience management, Acquia has released a product called Acquia Lift ([https://www.acquia.com/products-services/acquia-lift](https://www.acquia.com/products-services/acquia-lift)). This product integrates with Drupal to customize the user experience based on a multitude of factors. These include: region, demographics, market segments, and more. For example, when you come to an airline website and no cookie information is able to be leveraged from previous interactions, GeoIP data is used to determine your location. Thus instead of presenting the homepage with generic information, flight information is provided for the location you are currently in.

#### Acquia Search
Additional key products include Acquia Search. This is P-a-a-S solution for search, based on Apache Solr. This platform integrates very well with Drupal and provides faceted search; with multiple search criteria. Furthermore, Apache Solr provides a weighting system that can be uniquely customized. For example, depending on the user role logging in, you can raise the results for content tagged for that particular type of user.

#### Drupal decoupled
As discussed about Contena CMS, Drupal has taken an API first approach. This has enabled Drupal to provide robust headless implementations. Here, Drupal is used to manage content and all services from the administrative side. However, at the presentation later, instead of using Drupal Theming engine, this is entirely replaced by a JavaScript framework such as React, Angular, Vue.js, or others. These types of headless integrations are particularly useful for highly dynamic and interactive sites.

- Decoupled Drupal
[https://www.acquia.com/drupal/decoupled-drupal](https://www.acquia.com/drupal/decoupled-drupal)

- Decoupled Drupal in Practice
[https://www.apress.com/gp/book/9781484240717](https://www.apress.com/gp/book/9781484240717)

### Drupal case studies

I have been involved in several projects that have leveraged Drupal at the enterprise level.

#### NASDAQ
NASDAQ was one of the first adopters of Drupal 8 at the enterprise level. This was the biggest Drupal 8 project in the industry at the time. NASDAQ maintains Investor Relations micro-sites that it provides for their customers; for an additional cost. These sites are required for regulatory reasons by the SEC to provide publicly accessible financial information. This content includes annual reports, financial statements, SEC filings, etc. Because of the standard nature of this data, NASDAQ was able to leverable Acquia&#39;s new product offering called Acquia Cloud Site Factory (ACSF). This platform allowed building a common Drupal 8 codebase, then separating each individual micro-site into its own; only modifying the database (site configuration) and look-and-feel (theme). This platform was dubbed Drupal distribution as-a-service (see article below). After successful migration of around 2000 sites the entire Investor Relations department was sold to West Corporation for approximately $335M.

- How Nasdaq offers a Drupal distribution as-a-service
[https://dri.es/how-nasdaq-offers-a-drupal-distribution-as-a-service](https://dri.es/how-nasdaq-offers-a-drupal-distribution-as-a-service)

#### Bayer
Bayer was also faced with a similar challenge in that it needed to migrate an approximate 2000 sites from legacy platform to a new modernized platform that will allow high reusability yet high customization among all parts of the world. The implementation involved leveraging Acquia Lighting as a distribution, then building unique sub-profiles (think of this as sub-distributions) for each particular market sector and region. For example, the Animal Health sector contained its own set of particular blocks and widgets that would be reused on Animal Health websites. This was made possible by building sub-profiles that would inherit features on top of each other. This implementation also utilized Acquia Cloud Site Factory.

- Successfully Proving Enterprise Drupal 8 at Bayer
[https://www.drupaleurope.org/session/successfully-proving-enterprise-drupal-8-bayer](https://www.drupaleurope.org/session/successfully-proving-enterprise-drupal-8-bayer)

#### Pegasystems
After my involvement on many mid-sized and small-sized business Drupal projects, Pega was the first enterprise level project. Pega was one of the first Acquia Cloud customers. My role was Senior Developer for PDN (Pega Developer Network). This was a community driven site which featured a cataloged article knowledge base, forums, and other user engagement features. The portal was aimed to enable Pega&#39;s customers to learn about their BPM flagship product and engage with one another as a developer community. Additional features in future releases included robust faceted search using Apache Solr, Gamification, User Dashboard, Certification Lookup, advanced caching techniques, etc. The project started with a migration from ASP to Drupal 6. Since then the portal has been renamed to Pega Community and is now on Drupal 8 ([https://community.pega.com/](https://community.pega.com/)).

- Pegasystems Drupal 8 Case Study
[https://www.drupal.org/case-study/pegasystems-drupal-8-case-study](https://www.drupal.org/case-study/pegasystems-drupal-8-case-study)

- Pegasystems: Building Community with Drupal 8
[https://www.drupal.org/case-study/pegasystems-building-community-with-drupal-8](https://www.drupal.org/case-study/pegasystems-building-community-with-drupal-8)

## Conclusion

Acquia has captured Gartner&#39;s Magic Quadrant WCM market for fifth consecutive year. In May 2019, Acquia has acquired the company Mautic ([https://www.mautic.org/](https://www.mautic.org/)) which provides open source marketing automation. This is all part of an overall plan to push Acquia Drupal into the Gartner&#39;s Magic Quadrant for the DXP market. This plan is to provide the world&#39;s first Open Source DXP on the market. I believe Drupal has a very bright future ahead of itself and it&#39;s a technology that will keep growing.

- Last Week&#39;s DXP One-Two Punch
[https://www.phase2technology.com/blog/last-weeks-dxp-one](https://www.phase2technology.com/blog/last-weeks-dxp-one)
