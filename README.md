Custom panels for [yii-debug-toolbar](https://github.com/malyshev/yii-debug-toolbar)
========================

Repo root is `ext.yii-debug-toolbar`.

1. YiiDebugToolbarPanelVarDumper - use it like `Yii::log(CVarDumper::dumpAsString($var, 10, true), 'varDumper', $category = 'application')`


Usage
=====

Place custom files to the `ext.yii-debug-toolbar.panels` folder

Change config file:
```
...
'log'=>array(
    'class'=>'CLogRouter',
    'routes'=>array(
        array(
            'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
            'panels' => array('YiiDebugToolbarPanelVarDumper'),
            'ipFilters'=>array('127.0.0.1','192.168.1.*'),
        ),
    ),
),
...
```