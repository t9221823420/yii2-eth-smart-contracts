<?php

namespace yozh\ethsc;

use yozh\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'ethsc';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
