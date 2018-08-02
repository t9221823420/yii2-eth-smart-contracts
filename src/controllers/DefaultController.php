<?php

namespace yozh\ethsc\controllers;

use yozh\crud\controllers\DefaultController as Controller;
use yozh\ethsc\models\DefaultModel;

/**
 * Default controller for the `template` module
 */
class DefaultController extends Controller
{
	
	public static function defaultModelClass()
	{
		return DefaultModel::class;
	}
	
}
