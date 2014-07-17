<?php

class Controller_Error extends Controller_Template
{
	public function action_invalid($message = null)
	{
		if ($message === null)
		{
			return 'Invalid input data';
		}
		else
		{
			return e($message);
		}
	}
}
