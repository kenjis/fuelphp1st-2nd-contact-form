<?php

/**
 * Model Form class Tests
 * 
 * @group App
 */
class model_form_Test extends DbTestCase
{
	protected $tables = array(
		// テーブル名 => YAMLファイル名
		'form' => 'form',
	);
	
	public function test_IDでレコードを検索する()
	{
		foreach ($this->form_fixt as $row)
		{
			$form = Model_Form::find_one_by_id($row['id']);
			
			foreach ($row as $field => $value)
			{
				$test = $form->$field;
				$expected = $row[$field];
				$this->assertEquals($expected, $test);
			}
		}
	}
	
	public function test_新規データをテーブルに保存する()
	{
		$data = array(
			'name'       => '藤原義孝',
			'email'      => 'yoshitaka@example.jp',
			'comment'    => '君がため 惜しからざりし 命さえ 長くもがなと 思ひけるかな',
			'ip_address' => '10.11.12.13',
			'user_agent' => 'Mozilla/2.02 (Macintosh; I; PPC)',
		);
		
		$form = Model_Form::forge()->set($data);
		
		// 新規データをデータベースに挿入
		list($id, $rows) = $form->save();
		
		// 挿入されたデータをデータベースから検索
		$form = Model_Form::find_by_pk($id);
		
		foreach ($data as $field => $value)
		{
			$this->assertEquals($value, $form[$field]);
		}
	}
}
