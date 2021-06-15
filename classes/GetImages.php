<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 10.05.2021
 * Time: 23:34
 */

namespace classes;

class GetImages {


	public function __construct() {
		require_once(__DIR__.'../../templates/simple_html_dom.php');
	}

	public function custom_strip_tags( $string, $remove_breaks = false ){

		$string = preg_replace( '/<img.*?>/si', '', $string );

		if ( $remove_breaks ) {
			$string = preg_replace( '/[\r\n\t ]+/', ' ', $string );
		}

		return trim( $string );

	}

	public function get_images ($content) {
		$img =[];
		// Подключаем DOM parser
		//require_once(__DIR__.'/templates/simple_html_dom.php');

		$html = str_get_html($content); // получаем структуру DOM контента
		// Находим все изображения в контенте
		foreach($html->find('img') as $element) {
			$img[] =  $element->outertext;   // выводим изображения в виде html кода <img src="...">
		}
		return $img;
	}

}