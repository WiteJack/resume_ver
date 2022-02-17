var steps = [false, false, false, false, false, false, false, false, false];
var curr_step = 0;

var int_val = 0; //для проверки площади


// возможность возвращаться к предыдущему вопросу
function set_history(index) {
	if (!(window.history && history.pushState))	{
		return false;
	}
	if (steps[index] == false) {
		history.pushState({'step_x': index}, null, window.location.href);
		steps[index] = true;
	}
}


// переходы по шагам
function to_step(index, need_push) {
	curr_step = index;
	for (var i = 0; i < steps.length; i++) {
		if (!$("#step" + i).is(':hidden')) {
			$("#step" + i).hide();
		}
	};
	$("#step" + index).show();


	// Разделение на #step0, #other_steps и #last_step
	if (index + 1 == steps.length) { // если шаг равен общему количеству шагов
		if (!$("#other_steps").is(':hidden')) {
			$("#other_steps").hide();
			$("#last_step").show();
		}
	} else if (index > 0) { // если шаг больше ноля
		if ($("#other_steps").is(':hidden')) { $("#other_steps").show(); }
		if (!$("#last_step").is(':hidden')) { $("#last_step").hide(); }
	} else if (!$("#other_steps").is(':hidden')) { // если шаг равен нолю
		$("#other_steps").hide();
	} 

	if (need_push) {
		if (index == 2) { $("#area_input").focus();	}	// Фокусировка на поле площадь
		//if (index == 8) { $("#phone_input").focus();}	// Фокусировка на поле телефон
		set_history(index);
	}
}


// Проверка заполненности радиокнопки или чекбокса
function check_radio_selected(elem_id, error_message) {
	obj = $('input[name="' + elem_id + '"]:checked');
	if (!(obj.length && obj.val()))	{
		alert(error_message);
		return false;
		
	}
	return true;
	
}




// Проверки полей по шагам и уведомления при незаполненных полях
(function($) {
	
	$(document).ready(function() { to_step(0, true); }); // задаем первоначальный индекс
	
	$("#to_step1").click(function(event) {
		event.preventDefault();
		to_step(1, true);
	});

	$("#to_step2").click(function(event) {
		event.preventDefault();
		let checked = $("#type-home input:checked").length > 0;
		if (!checked){
			alert("Выберите один из вариантов");
			return false;
		} else {
			to_step(2, true);
		}
	});

	$("#to_step3").click(function(event) {
		event.preventDefault();
		let checked = $("#type-sobs input:checked").length > 0;
		if (!checked){
			alert("Выберите один из вариантов");
			return false;
		} else {
			to_step(3, true);
		}
	});

	$("#to_step4").click(function(event) {
		event.preventDefault();
		
		let checked = $("#type-repair input:checked").length > 0;
		if (!checked){
			alert("Выберите один из вариантов");
			return false;
		} else {
			to_step(4, true);
		}
		
	});
	$("#btn_last_step").click(function(event) {
		event.preventDefault();
		
		let checked = $("#design-project input:checked").length > 0;
		if (!checked){
			alert("Выберите один из вариантов");
			return false;
		} else {
			$("#last_step").show();
		}
		
	});



	// Отправка формы (нажатием на финальную кнопку)
	$("#to_submit").click(function(event) {
		event.preventDefault();
		$("#quiz_form").submit();
	});
	
	// Проверка телефона и ПК при отправке формы
	$('#quiz_form').submit(function () {
		
		let name = $.trim($(this).find('input[name="name_input"]').val());
		let phone = $.trim($(this).find('input[name="phone"]').val());
		
		
		if (name  === '') {
			alert('Заполните поле с именем');
			return false;
		}

		if (phone  === '') {
			alert('Заполните поле с номером телефона');
			return false;
		} else if (phone.length < 8) {
			alert('Слишком короткий номер');
			return false;
		} else if (!((phone.lastIndexOf("+7", 0) === 0) || (phone.lastIndexOf("8", 0) === 0))) {
			alert('Введите корректный номер в формате +79998887766 или 89998887766');
			return false;
		}

	});


	// для возврата к предыдущему вопросу
	window.addEventListener("popstate", function(e) {
		var step = 0;
        if (e.state) {
			step = e.state.step_x;
        }
        to_step(step);
    });

})(jQuery);



$(document).ready(function() {
	
	jQuery('body').on('change', '#quiz_form', function() {
		
		// Обводка для label input[type=radio]
		$('input[type=radio]').each(function(){
			if ($(this).is(':checked')) {       
				$(this).parent('label').addClass('checked');
			} else {
				$(this).parent('label').removeClass('checked');
			}   
		});
		
		// Обводка для label input[type=checkbox]
		$('input[type=checkbox]').each(function(){
			if ($(this).is(':checked')) {       
				$(this).parent('label').addClass('checked');
			} else {
				$(this).parent('label').removeClass('checked');
			}   
		});
		
	});
	
	// Поле ввода внутри label для input[type=radio]
	$("#up-layer").click(function() { $("#price_input").focus(); });
	
});

$("#btn_last_step").click(function (e) {
	$("#step4").remove();
	$("#last_step").css('display', 'block');
});
$("#type-home_1_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check1").css('color', 'black');
	$("#check1").css('background', 'white');

});
$("#type-home_2_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check2").css('color', 'black');
	$("#check2").css('background', 'white')
});
$("#type-home_3_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check3").css('color', 'black');
	$("#check3").css('background', 'white')
});
$("#type-home_4_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check4").css('color', 'black');
	$("#check4").css('background', 'white')
});
$("#type-sobs_1_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check5").css('color', 'black');
	$("#check5").css('background', 'white')
});
$("#type-sobs_2_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check6").css('color', 'black');
	$("#check6").css('background', 'white')
});
$("#type-sobs_3_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check7").css('color', 'black');
	$("#check7").css('background', 'white')
});
$("#type-sobs_4_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check8").css('color', 'black');
	$("#check8").css('background', 'white')
});
$("#type-sobs_5_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check9").css('color', 'black');
	$("#check9").css('background', 'white')
});
$("#type-repair_1_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check10").css('color', 'black');
	$("#check10").css('background', 'white')
});
$("#type-repair_2_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check11").css('color', 'black');
	$("#check11").css('background', 'white')
});
$("#type-repair_3_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check12").css('color', 'black');
	$("#check12").css('background', 'white')
});
$("#type-repair_4_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check13").css('color', 'black');
	$("#check13").css('background', 'white')
});
$("#type-repair_5_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check14").css('color', 'black');
	$("#check14").css('background', 'white')
});
$("#design-project_1_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check15").css('color', 'black');
	$("#check15").css('background', 'white')
});
$("#design-project_2_input").click(function (e) {
	$(".check").css('color', 'none');
	$(".check").css('background', 'none');
	$("#check16").css('color', 'black');
	$("#check16").css('background', 'white')
});


$(document).mouseleave(function(e){
	if (e.clientY < 2) {
		$(".exitblock").fadeIn("fast");
		$("header").addClass('opacity');
		$('#quiz').addClass('opacity');
		$('footer').addClass('opacity');
		$('main').addClass('opacity');
	};
	$(".exitblock").click(function () { // задаем функцию при нажатиии на элемент <button>
		$(".exitblockCons").css('display', 'block');
		$(".exitblockCons").click(); // вызываем событие click на элементе <div>
		$("header").removeClass('opacity');
		$('#quiz').removeClass('opacity');
		$('footer').removeClass('opacity');
		$('main').removeClass('opacity');
	});
});
$(".closeblock").click(function () {
	$(".exitblock").toggle();
	$(".exitblockCons").toggle(); });




$(document).ready(function () {
	$(".consultation").click(function () { // задаем функцию при нажатиии на элемент <button>
		$(".exitblockCons").css('display', 'block');
		$(".exitblockCons").click(); // вызываем событие click на элементе <div>
	});
	$(".onebtnCons").click(function () { // задаем функцию при нажатиии на элемент <button>
		$(".wen").addClass('dis');
		$(".twobtnCons").css('display', 'block');
	});
	$(".closeblockCons").click(function () { // задаем функцию при нажатиии на элемент <div>
		$(".exitblockCons").toggle(); // отображаем, или скрываем элемент
	});
});