# Minicaso sage
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/baillieogrady/mincaso-sage#info=devDependencies)

## What is Minicaso sage?
Minicaso Sage is a custom WordPress theme built on the [Sage](https://github.com/roots/sage) starter theme. I utlised the ACF Pro plugin to create a page builder with the [flexible content field](https://www.youtube.com/watch?v=DL2SImhDm_I).

[Demo](https://minicaso.com)

## Usage

[Download](http://baillieogrady.com/downloads/minicaso-sage.zip) production build and upload via WordPress.

### Plugins required

- [ACF Pro](https://www.advancedcustomfields.com/pro/)

## Theme development

### Installation

Clone this repo into your WordPress themes directory

```
$ git clone https://github.com/baillieogrady/whale-sage
```

### Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

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
