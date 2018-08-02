<?php

use yozh\base\components\db\Migration;
use yozh\base\components\utils\ArrayHelper;

/**
 * Class m180122_181643_create_table_firm
 */
class m000000_000001_yozh_ethsc_table_dev extends Migration
{
	protected static $_table = 'yozh_ethsc';
	
	public function safeUp( $params = [] )
	{
		parent::safeUp( [
			'mode' => 1 ? self::ALTER_MODE_UPDATE : self::ALTER_MODE_IGNORE,
		] );
		
	}
	
	public function getColumns( $columns = [] )
	{
		return parent::getColumns( [
			//'id'          => $this->integer(),
			'name'         => $this->string(),
			'description'  => $this->string(),
			'compiler'     => $this->string(),
			'optimization' => $this->boolean( true ),
			'code'         => $this->text(),
			'bytecode'     => $this->text(),
			'abi'          => $this->text(),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			/*
			[
				'refTable'   => 'refTable',
				'refColumns' => 'id',
				'columns'    => 'column_id',
			],
			*/
		
		], $references );
	}
	
}