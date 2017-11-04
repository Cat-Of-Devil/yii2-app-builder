yii2-app-builder
==============
[![Latest Stable Version](https://poser.pugx.org/tunecino/yii2-app-builder/v/stable)](https://packagist.org/packages/tunecino/yii2-app-builder)
[![Total Downloads](https://poser.pugx.org/tunecino/yii2-app-builder/downloads)](https://packagist.org/packages/tunecino/yii2-app-builder)


This is a fork of [yiisoft/yii2-app-advanced](https://github.com/yiisoft/yii2-app-advanced) template to which I have added the following:

 - :file_folder:`api` folder as implementation of [Yii2 RESTful API framework](http://www.yiiframework.com/doc-2.0/guide-rest-quick-start.html)
 - :file_folder:`auth` folder to provide access/refresh tokens as implementation of [OAuth 2.0](https://tools.ietf.org/html/rfc6749). *(documentation and examples to be added later)*
 - [tunecino/yii2-schema-builder](https://github.com/tunecino/yii2-schema-builder) extension to both `frontend` and `api` apps.

The plan is to keep this fork up-to-date with official template while keep improving builder & RESTful related stuff.

## Installation 
If you do not have Composer, you may follow the instructions in the [Yii Guide](http://www.yiiframework.com/doc-2.0/guide-start-installation.html#installing-via-composer) or [getcomposer.org](https://getcomposer.org/) to install it.

You can then install this project template using the following command:
```
composer create-project --prefer-dist tunecino/yii2-app-builder=2.0.13rc1 your-app-name
```
Once the command finish go inside the created folder and init the app on `dev` mode same as you usually do with the [advanced template](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#preparing-application):

```
cd your-app-name 
./init
```
Then create a new database and adjust related configurations in common/config/main-local.php. You may also need to set document roots of your web server as shown in the [4th step of the Preparing application section](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#preparing-application) except that you'll also need to do the same for `api.dev` and `auth.dev`. Alternatively you can also use vagrant.

## Usage
After installing the template, configuring DB and init the dev mode, go to either `frontend.dev/index.php?r=builder` or `api.dev/builder`, use the [GUI](https://github.com/tunecino/yii2-schema-builder) to prototype your app then hit that Generate button. If it says DONE, the preview link of each entity should lead you to a working app.
