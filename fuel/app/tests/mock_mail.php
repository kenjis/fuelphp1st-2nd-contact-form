<?php

// PHPのmail()関数をオーバーライド
namespace Email;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	return true;
}
