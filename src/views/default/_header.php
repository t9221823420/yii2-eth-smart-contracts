<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 30.05.2018
 * Time: 17:09
 */

$parentViewPath = '@yozh/crud/views/default';

$_params_['parentViewPath'] = $parentViewPath;

/** @var \yii\web\View $this */
include( Yii::getAlias($parentViewPath . '/_header.php') );