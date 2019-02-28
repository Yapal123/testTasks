$(document).ready(function(){
    $('body').fadeIn(600, function() {
    	
    });


    $('#sub').on('click', function() {
    	var name = $('#name').val();
    	var secName = $('#secName').val();
    	var fathName = $('#fathName').val();

    	if (!isNaN(name)) {
    		alert('Только буквы!');
    		return false;
    		
    	}
    	
    	if (!isNaN(secName)) {
    		alert('Только буквы!');
    		return false;
    		
    	}
    	
    	if (!isNaN(fathName)) {
    		alert('Только буквы!');
    		return false;
    		
    	}
    	
    });

    $('#subLight').on('click',function(){
    	var time = $('#time').val();
    	var text = $('#color').text();
        if (time < 0 || time > 59) {
        	alert('Введите минуты в диапазоне от 0 до 59');
        	return false;
        }
    })

    $('#subYear').on('click', function(){
    	var year = $('#inputYear').val();
    	if (year < 1 || year > 9999) {
    		alert('Введенный год должен быть в промежутке от 1 до 9999 года');
    		return false;
    	}
    })

    $('#subChin').on('click', function() {
    	var year = $('#inputChin').val();
    	if (year < 1924) {
    		alert('Введенный год не должен быть ниже, чем 1924.');
    		return false;
    	}
    });
});