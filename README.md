yii2-app-builder
==============
[![Latest Stable Version](https://poser.pugx.org/tunecino/yii2-app-builder/v/stable)](https://packagist.org/packages/tunecino/yii2-app-builder)
[![Total Downloads](https://poser.pugx.org/tunecino/yii2-app-builder/downloads)](https://packagist.org/packages/tunecino/yii2-app-builder)

This is a fork of [yiisoft/yii2-app-advanced](https://github.com/yiisoft/yii2-app-advanced) template to which I have added the following:

 - :file_folder:`api` folder as implementation of [Yii2 RESTful API framework](http://www.yiiframework.com/doc-2.0/guide-rest-quick-start.html)
 - :file_folder:`auth` folder to proved access/refresh tokens as implementation of [OAuth 2.0](https://tools.ietf.org/html/rfc6749). *(documentation and examples to be added later)*
 - [tunecino/yii2-schema-builder](https://github.com/tunecino/yii2-schema-builder) extension to both `frontend` and `api` apps.

The plan is to keep this fork up-to-date with official template while keep improving builder & RESTful related stuff.

## Installation 
Installation is almost similar to [yiisoft/yii2-app-advanced](https://github.com/yiisoft/yii2-app-advanced) template. see [full steps here](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md). Except that the composer command for this fork is:
```
composer create-project --prefer-dist tunecino/yii2-app-builder your-app-name
```
And extra server configurations for `api.dev` and `auth.dev` should be made same as it is done for `frontend.dev` and `backend.dev`. Alternatively you can also use vagrant.

## Usage
After installing the template, configuring DB and init the dev mode, go to either `frontend.dev/builder` or `api.dev/builder`, use the [GUI](https://github.com/tunecino/yii2-schema-builder) to prototype your app then hit that Generate button. If it says DONE, the preview link of each entity should take you to a working app.
