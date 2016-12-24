jQuery(document).ready(function($) {
	start();
		//на нажатие кнопки вешаем функцию write
	$('input[type="submit"]').on('click', write);
});

function start() {
	//посылаем ajax запрос на read.php
	$.post(
		"read.php",
		function(data) {
			if (data=="") {
				$('#out').html('Комментариев нет');
			}
			else {
				$('#out').html(data);
			}
		}
	)
}

function write(event){
	event = event || window.event;
	event.preventDefault();
	// проверяем поля на пустоту
	var nic = $('input[name=nic]').eq(0).val();
	var email = $('input[name=email]').eq(0);
	var comment = $('textarea').eq(0).val();
	if (nic.trim()=='' || email.trim()=='' || comment.trim()=='') {
		alert('Заполните поле');
	}
	else {
		$.post(
			"write.php"
			$('form').serialize();
			function(data) {
				alert('Ваш комментарий отправлен');
				//очищаем поля формы
				$('input[type="text"]').val('');
				$('textarea').val(' ');
				// обновляем список комментариев
				start(data);
			}
		);
	}
}