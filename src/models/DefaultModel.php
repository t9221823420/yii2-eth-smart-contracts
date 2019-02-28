<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 30.06.2018
 * Time: 12:02
 */

namespace yozh\ethsc\models;

use Yii;
use yozh\crud\models\BaseActiveRecord as ActiveRecord;

class DefaultModel extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_ethsc}}';
	}
	
	public function rules( $rules = [] )
	{
		return [
			[ [ 'name', 'compiler', 'code', 'bytecode', 'abi', ], 'required' ],
			[ [ 'name', 'description', 'compiler', ], 'string', 'max' => 255 ],
			[ [ 'name', 'description', 'compiler', 'code', 'bytecode', 'abi', ], 'filter', 'filter' => 'trim' ],
			[ [ 'name', 'description', 'compiler', ], 'filter', 'filter' => '\yii\helpers\HtmlPurifier::process' ],
			[ [ 'optimization', ], 'boolean' ],
		];
	}

}