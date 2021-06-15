function atttention(this_) {

	var position_form = $(this_).closest('form').offset();
	var position_elem = $(this_).offset();
	$('.warning').children('p').text('Заполните поле ' + $(this_).attr('placeholder'));
	$('.warning').css({
		'display': 'block',
		'top':-39 + (position_elem.top - position_form.top) + 'px',
		'left' : 104 + (position_elem.left - position_form.left) +'px'
	});
}

function sendFeeds(itemOb) {
	var form = itemOb.closest('form');

	$(form).find('input').each(function () {
		if(this.dataset.imp == 'important' && $(this).val() == '') {
			atttention(this);
			return;
		}
		});

			var formdata = new FormData(itemOb.closest('form'));
			var website = formdata.get('website');
			var subject = formdata.get('subject');
			var name = formdata.get('name');
			var email = formdata.get('email');
			var text = formdata.get('review');
			var type = $(itemOb.closest('form')).attr('name');
			$.ajax({
				type: 'POST',
				url:ajax_data.url,
				beforeSend: function () {
					jQuery('.spinner').css('visibility','visible');
				},
				data:{
					action:'send_feeds',
					name:name,
					email:email,
					subject: subject,
					website: website,
					text: text,
					type:type,
					post_id:ajax_data.post_id
				},
				success: function(response){
					jQuery('.spinner').css('visibility','hidden');
					if(response['inserted' === true]){

					}

				},
				dataType:"json"
			});
}


function bookCar(itemOb) {
	console.log('click');
	//var formdata = new FormData(itemOb.closest('form'));
	var location = $('.pickup-location select').children(':selected').attr('value');
	var startDate = $('#startDate').val();
	var endDate = $('#endDate').val();
	var car = $('.choose-car-type select').children(':selected').attr('value');
	$.ajax({
		type: 'POST',
		url:ajax_data.url,
		data:{
			action:'book_car',
			location:location,
			startDate:startDate,
			endDate: endDate,
			car:car,
			post_id:ajax_data.post_id
		},
		success: function(response){
			console.log(response.url);

		},
		dataType:"json"
	});
}

