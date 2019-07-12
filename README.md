# Wordpress Components Theme

A Wordpress theme organized using a components pattern loosely based on ReactJS organization principles.

## Theme Organization

The guts of this theme are organized as components similar to how ReactJS apps are organized into components. Every part of your theme should be organized into components under the ```ui``` folder using custom ```get_component('component-name')``` to load the component into your templates.

The ```ui``` folder is organized into ```components``` and ```layout```. You can find site-wide components like ```site-header.php``` and ```site-footer.php``` under the ```ui/layouts``` directory. Other components such as ```post.php``` and ```page.php``` can be found under the ```ui/components``` directory.

## get_componenent('component-name', 'component-partial')

