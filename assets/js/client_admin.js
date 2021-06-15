function replyMessage(this_) {

	var message = jQuery('textarea').val();

	var commentId = this_.dataset.commentId;
	console.log(ajaxurl);
	jQuery.ajax({
		type: 'POST',
		url:ajaxurl,
		beforeSend: function () {
			jQuery('.spinner').css('visibility','visible');
		},
		data:{action: 'reply', message: message,commentId:commentId},
		success: function(response){
			jQuery('.spinner').css('visibility','hidden');
			console.log(response);


		},error: function(error1,error2,error3){
			console.log(error1);
			console.log(error2);
			console.log(error3);
		},
		dataType:"json"
	});
}

function sendMessageForm(this_) {
	var tr = jQuery(this_).closest('tr');
	console.log(this_.dataset.commentId);
	tr.before(function () {
		var form = "<tr><td colspan='3'><div class='container'><div class='row'><form class='col-12 p-0'><h2>Title</h2><div class='edit-mes-container row m-0 p-0'><ul class='toolbar m-0 col-12'><li id='img' >img</li><li id='link' data-toggle='modal' data-target='#staticBackdrop'>link</li><li id='b'>b</li><li id='i'>i</li><li id='ul'>ul</li><li id='ol'>ol</li><li id='li'>li</li></ul><textarea id='textarea' class='col-12'></textarea><div class='m-0 button-cont'><p class='m-0 p-0'><button id='reply' type='button' data-comment-id='"+this_.dataset.commentId+"' class='send act-button'>Отправить</button><button type='button' class='cancel act-button'>Отмена</button><span class='waiting spinner'></span></p></div></div></form></div></div></td></tr>";
		return form;
	})
}

function render_form_link(data,desc ='') {
	var $img = jQuery('<img >',{
		'src' : data,
		'alt' : desc
	});
	var text_val = jQuery('form textarea').val();
	var start = jQuery('form textarea').prop('selectionStart');
	jQuery('form textarea').val(text_val.substring(0,start) + $img[0].outerHTML + text_val.substring(start, text_val.length));
}

function sendMessage(itemOb) {

	var formdata = new FormData(itemOb.closest('form'));
	var name = formdata.get('name');
	var email = formdata.get('email');
	var text = formdata.get('review');
	var type = $(itemOb.closest('form')).attr('name');
	$.ajax({
		type: 'POST',
		url:ajax_data.url,
		data:{
			action:'send_feeds',
			name:name,
			email:email,
			text: text,
			type:type,
			post_id:ajax_data.post_id
		},
		success: function(response){
			console.log(response);

		},
		dataType:"json"
	});

}