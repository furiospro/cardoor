<?php
namespace classes;
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 24.04.2021
 * Time: 17:16
 */

class Preg {

	static function Match($str) {
		preg_match('/[^<p><br>]\w.*[^<\/p>]/i',$str,$match);
		return $match[0];
	}
}