<?php

namespace yozh\ethsc;

class AssetBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-eth-smart-contracts.css',
	    //['css/yozh-eth-smart-contracts.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-eth-smart-contracts.js'
    ];
	
    public $depends = [
        //'yii\bootstrap\BootstrapAsset',
    ];	
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}