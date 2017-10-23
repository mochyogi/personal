<?php

namespace app\assets;

use yii\web\AssetBundle;

class MetronicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //BEGIN GLOBAL MANDATORY STYLES
        "themes/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css",
        "themes/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css",
        "themes/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css",
        "themes/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css",
        //END GLOBAL MANDATORY STYLES

        //BEGIN THEME GLOBAL STYLES
        "themes/metronic/assets/global/css/components.min.css",
        "themes/metronic/assets/global/css/plugins.min.css",
        //END THEME GLOBAL STYLES

        //BEGIN THEME LAYOUT STYLES
        "themes/metronic/assets/layouts/layout/css/layout.min.css",
        "themes/metronic/assets/layouts/layout/css/themes/darkblue.min.css"
        //END THEME LAYOUT STYLES
    ];
    public $js = [
        //BEGIN CORE PLUGINS
        "themes/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js",
        "themes/metronic/assets/global/plugins/js.cookie.js",
        "themes/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js",
        "themes/metronic/assets/global/plugins/jquery.blockui.min.js",
        "themes/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
        //END CORE PLUGINS

        //BEGIN PAGE LEVEL PLUGINS
        "themes/metronic/assets/global/plugins/jquery-migrate.min.js",
        "themes/metronic/assets/global/plugins/jquery-ui/jquery-ui.min.js",
        //END PAGE LEVEL PLUGINS

        //BEGIN THEME GLOBAL SCRIPTS
        "themes/metronic/assets/global/scripts/app.min.js",
        //END THEME GLOBAL SCRIPTS

        //BEGIN THEME LAYOUT SCRIPTS
        "themes/metronic/assets/layouts/layout/scripts/layout.min.js",
        "themes/metronic/assets/layouts/global/scripts/quick-sidebar.min.js",
        "themes/metronic/assets/layouts/global/scripts/quick-nav.min.js",
        //END THEME LAYOUT SCRIPTS
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'app\assets\NdsAsset',
    ];
}