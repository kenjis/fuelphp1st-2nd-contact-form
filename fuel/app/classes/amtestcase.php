<?php

// AspectMock\Testクラスをtestとしてインポート
use AspectMock\Test as test;

abstract class AmTestCase extends \Fuel\Core\TestCase
{
	protected function tearDown()
	{
		test::clean(); // 登録したモックをすべて削除
	}
}
