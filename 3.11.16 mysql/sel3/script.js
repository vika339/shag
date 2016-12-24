$(document).ready(function(){
		start();
	});

function start(){
    // запрос на сервер
    $.post(
        "sel.php",
        ifSuccess
    );
}

function ifSuccess(data){
    console.log(data);
    $('.out').html(data);
    $('input [name='prim']').on('change', changeSelect);
}
function changeSelect(){
    console.log($(this).val());
    $.post(
        "sel2.php",
        {
            "id": $(this).val()
        },
        fillInputs
    );
}
function fillInputs(data){
    console.log(data);
    data= JSON.parse(data);
    $('input[name=name]').eq(0).val(data.user);
    $('input[name=pass]').eq(0).val(data.pass);
    $('input[name=email]').eq(0).val(data.email);
    $('input[name=id]').eq(0).val(data.id);
    //событие на кнопку сохранить
    $('form button').on('click', saveToDb);
}

function saveToDb(){
    //сохраняю форму в базу
    event.preventDefault();
    $.post(
        "save.php",
        $('form').serialize(),
        ifSave
    );
}

function ifSave(data) {
    alert(data); 
    location.reload();
}
    