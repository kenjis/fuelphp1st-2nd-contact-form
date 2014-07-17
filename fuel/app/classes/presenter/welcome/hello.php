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


/**
 * The welcome hello presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Welcome_Hello extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		$this->name = $this->request()->param('name', 'World');
	}
}
