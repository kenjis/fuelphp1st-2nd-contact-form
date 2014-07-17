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


class Controller_Base extends Controller_Template
{

	public function before()
	{
		parent::before();

		// Assign current_user to the instance so controllers can use it
		$this->current_user = Auth::check()
			? (Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? Model\Auth_User::find_by_username(Auth::get_screen_name()) : Model_User::find_by_username(Auth::get_screen_name()))
			: null;

		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);
	}

}
