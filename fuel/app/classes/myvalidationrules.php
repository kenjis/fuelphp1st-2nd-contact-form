<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd-contact-form
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */


class MyValidationRules
{
	/**
	 * 改行コードやタブが含まれていないかの検証ルール
	 * 
	 * @param string $value
	 * @return boolean
	 */
	public static function _validation_no_tab_and_newline($value)
	{
		// 改行コードやタブが含まれていないか
		if (preg_match('/\A[^\r\n\t]*\z/u', $value) === 1)
		{
			// 含まれていない場合はtrueを返す
			return true;
		}
		else
		{
			// 含まれている場合はfalseを返す
			return false;
		}
	}
}
