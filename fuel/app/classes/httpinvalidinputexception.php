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


class HttpInvalidInputException extends HttpException
{
	public function response()
	{
		$response = Request::forge('error/invalid')
						->execute(array($this->getMessage()))->response();
		return $response;
	}
}
