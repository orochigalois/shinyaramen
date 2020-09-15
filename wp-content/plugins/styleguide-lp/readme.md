### Style Guide plugin

Demonstrates theme typography, colour schemes, custom TinyMCE text formats, components such as buttons and alerts, and ACF flexible modules. Must be configured on a per-site basis at the code level, as per the below steps.

#### Upon activation:

* Update `styleguide.scss` with your theme folder name and recompile SASS
* Set constants for the modules' field name, the post types that use modules, and the path to the theme partials (at the top of `styleguide.php`)
* The plugin's front-end styling adopts a lot of the theme's styling, so if it looks broken you may need to import Bootstrap component CSS, and/or write your own styles for elements where they should exist (e.g. tables)
* Add any additional variables and components to `partials/settings.php` and `partials/components.php` and update and recompile `styleguide.scss` as needed
* If the site has a lot of modules, the module examples page can make the style guide very slow to load; in those cases it may be appropriate to remove the module examples and just keep the list of instances.
* If the site doesn't use flexible modules, remove both the module usage and module examples tabs.
 

#### Notes:

* Style Guide can be viewed at www.yoursite.com/styleguide. This is an endpoint automatically created by the plugin- it doesn't create a page or anything in the database.
* That the folder name can't be just 'styleguide' because that conflicts with a plugin in the WordPress plugin repository.