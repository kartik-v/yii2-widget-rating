<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/krajee-logo-b.png" alt="Krajee Logo"/>
    </a>
    <br>
    yii2-widget-rating
    <hr>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DTP3NZQ6G2AYU"
       title="Donate via Paypal" target="_blank"><img height="60" src="https://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/></a>
    &nbsp; &nbsp; &nbsp;
    <a href="https://www.buymeacoffee.com/kartikv" title="Buy me a coffee" ><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" height="60" alt="kartikv" /></a>
</h1>

<div align="center">

[![Stable Version](https://poser.pugx.org/kartik-v/yii2-widget-rating/v/stable)](https://packagist.org/packages/kartik-v/yii2-widget-rating)
[![Unstable Version](https://poser.pugx.org/kartik-v/yii2-widget-rating/v/unstable)](https://packagist.org/packages/kartik-v/yii2-widget-rating)
[![License](https://poser.pugx.org/kartik-v/yii2-widget-rating/license)](https://packagist.org/packages/kartik-v/yii2-widget-rating)
[![Total Downloads](https://poser.pugx.org/kartik-v/yii2-widget-rating/downloads)](https://packagist.org/packages/kartik-v/yii2-widget-rating)
[![Monthly Downloads](https://poser.pugx.org/kartik-v/yii2-widget-rating/d/monthly)](https://packagist.org/packages/kartik-v/yii2-widget-rating)
[![Daily Downloads](https://poser.pugx.org/kartik-v/yii2-widget-rating/d/daily)](https://packagist.org/packages/kartik-v/yii2-widget-rating)

</div>

The StarRating widget is a wrapper for the [Bootstrap Star Rating Plugin](http://plugins.krajee.com/star-rating) JQuery Plugin designed by Krajee. This plugin is a simple yet powerful JQuery star rating plugin for Bootstrap. Developed with a focus on utlizing pure CSS-3 styling to render the control.

> NOTE: This extension is a sub repo split of [yii2-widgets](https://github.com/kartik-v/yii2-widgets). The split has been done since 08-Nov-2014 to allow developers to install this specific widget in isolation if needed. One can also use the extension the previous way with the whole suite of [yii2-widgets](http://demos.krajee.com/widgets).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/kartik-v/yii2-widget-rating/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

To install, either run

```
$ php composer.phar require kartik-v/yii2-widget-rating "*"
```

or add

```
"kartik-v/yii2-widget-rating": "*"
```

to the ```require``` section of your `composer.json` file.

## Latest Release

> NOTE: Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-widget-rating/blob/master/CHANGE.md) for details on changes to various releases.

## Demo

You can refer detailed [documentation and demos](http://demos.krajee.com/widget-details/star-rating) on usage of the extension.

## Usage

```php
use kartik\rating\StarRating;

// Usage with ActiveForm and model
echo $form->field($model, 'rating')->widget(StarRating::classname(), [
    'pluginOptions' => ['size'=>'lg']
]);


// With model & without ActiveForm
echo StarRating::widget([
    'name' => 'rating_1',
    'pluginOptions' => ['disabled'=>true, 'showClear'=>false]
]);
```

## License

**yii2-widget-rating** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.