README
======

Silex Sandbox
------------------------------

Quickly get a sandbox up and running with out-of-the-box support for:

* Twig templating
* RequireJS
* jQuery
* Bootstrap

Future features may include:

* Sass support
* Scaffolding generators
* Asset management
* Bower/Gulp

Getting started
---------------

Clone repo:

    git clone ssh://git@owl.cbsi.com:7999/~jprince/silex-sandbox.git

Move into the project directory:

    cd silex-sandbox

Install via Composer:

    composer install

Start PHP's built-in web server:

    make server

_Feel free to edit the ```Makefile``` to customize the port, add new commands, or whatever._

Point your browser to ```http://localhost:8888```.

Visit ```http://localhost:8888/demo``` for an example route.