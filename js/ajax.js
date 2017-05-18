$( document ).ready(function() {
    $("#send_btn").click(function(){
			sendAjax('action_ajax_form.php', 'ajax_form', 'result_form');
			return false; 
		}
	);
	
	$("#parse_json").click(function(){
			parser();
			return false; 
		}
	);
	
});

function sendAjax(url, form, result_form){
	$.ajax({
		url: url, // имя файла который будет обрабатывать данные (по умолчанию текущая страница)
		type: "POST", // метод передачи данных (по умолчанию get)
		dataType: "html", //тип передаваемых данных (string, html, json, xml)
		data: $('#'+form).serialize(), //певодит в побитовое представление
		success: function(response) { //Данные отправлены успешно
			result = $.parseJSON(response);
			$('#'+result_form).append("<p>Имя: "+result.name+"<br/>Email: "+result.email+"<br>Телефон: "+result.phone+"<br/>Комментарий: "+result.comment+"</p>");
    	},
    	error: function(response) { // Данные не отправлены
    		$('#'+result_form).append("<p>Ошибка. Данные не отправленны.</p>");
    	}
	});
}


function parser(){
	$.getJSON( "phones.json", function( data ) {// функция jQuery для запроса данных типа json
		console.log(data);
		$('body').append('<ul class="phones"></ul>');
		$.each(data, function() {
			$.each(this, function(name, value) {
				if ((name == 'id') && (name == 'name')){
					$('.phones').append('<li class='+name+'>'+value+'</li>');
				}
			});
		});
	});
}