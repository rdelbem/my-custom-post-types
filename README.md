## My custom post types

Hi!

My custom post type attempts to solve a simple task: create custom post types. It is a well known fact that one can use CPT UI in order to achieve cpts. However, this plugin is not aimed at the ones who find CPTUI useful. My custom post types focus is WordPress developers.

### Usage

The only files you need to change in order to create your cpts are the ones inside src/theposttypes. In this folder, you will find an example file, named example.php. To create a new post type just copy this file over as many times you want, then remember to rename the file so to reflect your cpt name. In each file you only need to change one variable, $Plural to whatever is the plural of your cpt name, if it does not have plural form, just don't bother, leave it alone.
