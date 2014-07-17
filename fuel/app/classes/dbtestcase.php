<?php

abstract class DbTestCase extends TestCase
{
	// フィクスチャデータ
	protected $tables = array(
		// テーブル名 => ファイル名
	);
	
	protected function setUp()
	{
		parent::setUp();
		
		if ( ! empty($this->tables))
		{
			$this->dbfixt($this->tables);
		}
	}
	
	protected function dbfixt($tables)
	{
		// $this->dbfixt('table1', 'table2', ...)という形式もサポート
		$tables = is_string($tables) ? func_get_args() : $tables;
		
		foreach ($tables as $table => $file)
		{
			$fixt_name = $file . '_fixt';
			$this->$fixt_name = DbFixture::load($table, $file);
		}
	}
}
