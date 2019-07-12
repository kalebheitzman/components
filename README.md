# Wordpress Components Theme

A Wordpress theme organized using a components pattern loosely based on ReactJS organization principles.

## Theme Organization

The guts of this theme are organized as components similar to how ReactJS apps are organized into components. Every part of your theme should be organized into components under the ```ui``` folder using custom ```get_component('component-name')``` to load the component into your templates.

The ```ui``` folder is organized into ```components``` and ```layout```. You can find site-wide components like ```site-header.php``` and ```site-footer.php``` under the ```ui/layouts``` directory. Other components such as ```post.php``` and ```page.php``` can be found under the ```ui/components``` directory.

## Initial Setup

This theme uses gulp for development and production purposes. You'll need to run ```yarn install``` to install the needed dependencies for development and to build your production ready theme.

## Custom Template Functions

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