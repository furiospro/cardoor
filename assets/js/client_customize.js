(function ($) {
	wp.customize( 'header', function( value ) {
		value.bind( function( newVal ) {
			$('.slider-right-text h1').text(newVal);
		} );
	});
	wp.customize( 'subheader', function( value ) {
		value.bind( function( newVal ) {
			$('.slider-right-text p').text(newVal);
		} );
	});
	wp.customize( 'address', function( value ) {
		value.bind( function( newVal ) {
			$('.get-touch li:nth-of-type(1)').text(newVal);
		} );
	});
	wp.customize( 'phone', function( value ) {
		value.bind( function( newVal ) {
			$('.get-touch li:nth-of-type(2)').text(newVal);
		} );
	});
	wp.customize( 'phone', function( value ) {
		value.bind( function( newVal ) {
			$('.sidebar-body p:nth-of-type(1)').text(newVal);
		} );
	});
	wp.customize( 'email', function( value ) {
		value.bind( function( newVal ) {
			$('.get-touch li:nth-of-type(3)').text(newVal);
		} );
	});
})(jQuery);


function rusToWin(str) {

	str = str.toLowerCase(); // все в нижний регистр

	var cyr2latChars = (

			['а', '%E0'], ['б', '%E1'], ['в', '%E2'], ['г', '%E3'],

			['д', '%E4'], ['е', '%E5'], ['ж', '%E6'], ['з', '%E7'],

			['и', '%E8'], ['й', '%E9'], ['к', '%EA'], ['л', '%EB'],

			['м', '%EC'], ['н', '%ED'], ['о', '%EE'], ['п', '%EF'],  ['р', '%F0'],

			['с', '%F1'], ['т', '%F2'], ['у', '%F3'], ['ф', '%F4'],

			['х', '%F5'], ['ц', '%F6'], ['ч', '%F7'],['ш', '%F8'], ['щ', '%F9'],

			['ъ', '%FA'], ['ы', '%FB'], ['ь', '%FC'], ['э', '%FD'], ['ю', '%FE'], ['я', '%FF'],[' ','+']);


	var newStr ='';
	for (var i = 0; i < str.length; i++) {



		var ch = str.charAt(i);

		var newCh = '';



		for (var j = 0; j < cyr2latChars.length; j++) {

			if (ch === cyr2latChars[j][0]) {

				newCh = cyr2latChars[j][1];



			}

		}

		// Если найдено совпадение, то добавляется соответствие, если нет - пустая строка

		newStr += newCh;



	}

	// Удаляем повторяющие знаки - Именно на них заменяются пробелы.

	// Так же удаляем символы перевода строки, но это наверное уже лишнее

	return newStr;

}
