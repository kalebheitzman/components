# WordPress Components Theme

This is a minimalistic WordPress Skeleton/Base theme that follows a Components based system of organization heavily influenced by ReactJS. The design and development philosophy of this theme revolves around organizing your css, js, and php into component folders under the ```ui``` directory. View ```./ui/site-navigation``` for an example of how scss, php, and js are organized together. You can use ```get_component( 'site-navigation' )``` to call this from your main ```header.php``` template file for example.

Organize each component or building block of your site under the ```ui``` folder using the following sort of naming scheme.

```
ui/
	site-navigation/
		_site-navigation.scss
		site-navigation.php
		site-navigation.js
```

## Initial Setup

This theme uses gulp and composer for development and production purposes. You'll need to run ```yarn install``` to install the needed dependencies for developing and to building your theme.

## WordPress Coding Standards

This theme relies on the WordPress Coding standards to keep things nice and clean. Run ```composer install``` to install the standards and begin parsing your code. This project is setup to run on VS Code. It will be up to the user to use a different editor if they'd like. Be sure to install the phpcs extension if you use VS Code.

## Custom Component Function

This theme includes a custom template loader to load components from the UI folder using the following syntax. You don't need to echo the function in your theme files in order for it to work.

```php
get_componenent('component-name', 'component-partial');
```

A shorthand is avaiable by naming the component-name and component-partial the same thing. If the partial is unspecified, the component name is assumed to be the partial name.

```php
get_component('site-header');
```

To load a sub component partial, specifiy the partial name. For example:

```php
get_component('site-header', 'logo');
```

## Styles

This theme has built in support for SASS compilation using gulp. Simply run ```gulp``` in your terminal and the ```default``` task will compile your styles automatically.

## Scripts

This theme will automatically load your js files if you follow the component structure. The included ```get_component``` function will search for a js file of the same name of the component and partial you pass and will automatically enqueue it into your site. 

For example, if you were to call ```get_component( 'site-navigation` )```, it would enqueue the ```ui/site-navigation/site-navigation.js``` if it exists.
