Vich Uploader Sandbox
=====================


What's inside?
--------------

This sandbox comes with several branches, each one featuring distinct
configurations of [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle):

  * `master`: gaufrette, Doctrine ORM and [SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle) ;
  * `propel-admingen`: flysystem, Propel ORM and [AdmingeneratorGeneratorBundle](https://github.com/symfony2admingenerator/AdmingeneratorGeneratorBundle).


On top of that, you'll find sample implementations of common needs:

  * OneToOne relationship: one entity = one uploadable image ;
  * OneToSeveral relationship: each entity has exactly X uploadable images (where `X` is known);
  * OneToMany relationship: one entity = X uploadable images, where `X` can be
    different from one entity to another ;

Installation
------------

Get composer:

    curl -s http://getcomposer.org/installer | php

Run the following command for the master branch:

    php composer.phar create-project kphoen/vich-uploader-sandbox:dev-master

The installation process used Incenteev's ParameterHandler to handle
`parameters.yml` configuration. With the current installation, it is possible
to use environment variables to configure this file:

    DATABASE_NAME=sandbox DATABASE_USER=sandbox DATABASE_PASSWORD=sandbox php composer.phar create-project kphoen/vich-uploader-sandbox:dev-master


Run
---

If you are running PHP5.4, you can use the built in server to start the demo:

    php -S localhost:9090 -t web/

Now open your browser and go to http://localhost:9090/
