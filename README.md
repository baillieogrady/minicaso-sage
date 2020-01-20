# Minicaso sage

## What is Minicaso sage?
Minicaso sage is a custom WordPress theme utilising the Roots Sage 9 starter theme & ACF Pro.

### Example
[minicaso.com](https://minicaso.com)

### Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

## Installation

Install theme into the WordPress themes directory

```
$ git clone https://github.com/baillieogrady/minicaso-sage
```

## Theme development

*See full roots sage source & setup [here](https://github.com/roots/sage)*

* Run `composer install` from the theme directory to install composer dependencies 
* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Contributing

```
$ git clone https://github.com/baillieogrady/minicaso-sage
```

## Plugins
- [ACF Pro](https://www.advancedcustomfields.com/pro/)
- [WooCommerce](https://en-gb.wordpress.org/plugins/woocommerce/)
- [Classic Editor](https://en-gb.wordpress.org/plugins/classic-editor/)
- [Contact form 7](https://wordpress.org/plugins/contact-form-7/)
- [Qty Increment Buttons for WooCommerce](https://wordpress.org/plugins/qty-increment-buttons-for-woocommerce/)