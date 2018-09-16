<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-rating
 * @version 1.0.4
 */

namespace kartik\rating;

use kartik\base\AssetBundle;

/**
 * Theme Asset bundle for StarRating Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class StarRatingThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/kartik-v/bootstrap-star-rating';
 
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->depends = array_merge($this->depends, ['kartik\rating\StarRatingAsset']);
        parent::init();
    }
    
    /**
     * Add star rating theme file
     *
     * @param string $theme the theme file name
     */
    public function addTheme($theme) 
    {
        $this->js[] = "themes/{$theme}/theme." . (YII_DEBUG ? "js" : "min.js");
        $this->css[] = "themes/{$theme}/theme." . (YII_DEBUG ? "css" : "min.css");
    }
}