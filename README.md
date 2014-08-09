It Is Known
=========
This is the source for [http://wpitisknown.com](http://wpitisknown.com) -> My how do X with WordPress site. I created the site for several reasons:

* So I could stop googling the same articles.
* To illustrate an example of a WordPress & Pods powered web app.
* To play with some stuff, like deployment and my [app_starter theme](https://github.com/shelob9/app_starter) in a relatively simple environment.

### How It Works
This repo is designed to be used both for deployment and to power a local test site using VVV. The VVV configuration is located in the directory (vvv-config). Both environments are managed using Composer for dependency managment. Right now, I'm manually adding 4 plugins to the plugins directory--FacetWP, SearchWP, WP Migrate DB Pro & SiteGround's cache plugin.

##### Pods Setup
This site relies on 2 custom post types added using [Pods](http://pods.io):
* whatisknown
* source_author

The whatisknown post type has three custom fields:
* Link -- Link to the article
* article_title - The article's title.
* source_author - Relationship field related to the 'things_they_know' field of the 'source_author' post type. This field is a multi-select, auto-complete, taggable field, which means I can create new authors from the field entry.

The source_author post type has 1 field:
* things_they_know - Relationship field related to the 'source_author' field of the 'whatisknown' post type.

<em>Note: There is a Pods Packages export file in the root level of this repo, if you want to play with it.</em>

##### Front-end
This site uses my [app_starter theme](https://github.com/shelob9/app_starter), which is a simple, Foundation-based theme designed for mobile-friendly WordPress-powered web apps. The theme is customized using [a plugin](github), instead of a child theme. It's still unclear to me if that was a good idea, or insane, but part of the point of this site is to try new things.

@todo explain further how the views work.

The front-page is powered by [FacetWP](http://facet.wp). That page's content is just: `[facetwp template="itisknown"][facetwp pager="true"]`. The facets theme selves are outputted using a [the_content filter](https://github.com/Shelob9/isk-app-starter/blob/ecb728053654667c12c14f2d4709dff21cd81896/isk.php#L73-L91). The keyword search is powered by  [SearchWP](http://searchwp.com]. These two plugins are pretty awesome BTW. I wrote [about why in Torque](http://torquemag.io/improving-wordpress-search-facetwp-searchwp/), if you're interested.

<em>Note: There is a FacetWP export file in the root level of this repo, if you want to play with it.</em>

##### wp-config, etc.
Taking a cue from [Bedrock](https://github.com/roots/bedrock), this site's main directory has two files--wp, which contains WordPress, and app, which is wp-content. This makes it really easy to manage in the IDE, I'm pretty happy with this setup. WordPress itself is managed, via composer, using [the installer created by John P Bloch](https://github.com/johnpbloch/wordpress-core-installer).

The wp-config file for this site is set to get the Database and Security salts either from a local-config.php file, if it exists or from a production-config.php file, if the local config doesn't exist. I'm gitignoring production config so I don't give away my sensitive info. If you're copying from this, just save local-config.php as production-config and change the information there for your production server. That file can be located in the same location as wp-config or one level above.

The common setup is in application.php, which is included after the production/local config. Its sets the common configuration, like table prefix and content directories.
##### Deployment
@TODO


### Acknowledgments, License, Etc.
I cobbled this all together with inspiration and copypasta from [Bedrock](https://github.com/roots/bedrock) & [wp-skelton](https://github.com/markjaquith/WordPress-Skeleton). Much appreciation, very GPL.

This particular configuration, and original code, where it exists is copyright Josh Pollock, 2014. It is licensed under the terms of the [GNU General Public License (GPL) version 2](http://www.gnu.org/licenses/gpl-2.0.html) or later. Please share with your neighbors.


