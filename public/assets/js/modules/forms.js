

	function styleSelect() {
		$('select').wrap('<div class="select-wrap" />');
		$('select').each(function(){
			var title = $(this).children('option:selected').html();
			$(this)
			.after('<span class="select">' + title + '</span>')
			.on('change', function(){
				var val = $('option:selected',this).text();
				$(this).next().text(val);
			});
		});
	}

	function createRadio() {
		$('input:radio').each(function() {
			$(this).wrap('<div class="radio-select" />');
		});
		$('<span class="radio-span" />').appendTo('.radio-select');
		$('input:radio').on('click', function(e) {
			$(this).parent().siblings('.radio-select').removeClass('checked').children('input').attr('checked', false);
			if (!$(this).parent('.radio-select').hasClass('checked')) {
				$('.radio-select').removeClass('checked');
				$(this).parent('.radio-select').addClass('checked');
			}
		});
	}


	function createCheckbox() {
		$('input:checkbox').each(function() {
			$(this).wrap('<div class="checkboxWrap" />');
		});
		$('<span class="checkbox-span" />').appendTo('.checkboxWrap');
		$('input:checkbox').on('click', function(e) {
			$(this).parent('checkboxWrap').toggleClass('checked');
		});
	}

	function checkDate() {

		var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();
		var year = d.getFullYear();

		$('#reservation-date-day').empty();
		$('#reservation-date-day').append('<option value="Day">Day</option>');

		if($(this).val()==month) {
			var month = $(this).val();
			var d= new Date(year, month, 0);
			var days = d.getDate();

			for (i=1; i<=day; i++) {
				$('#reservation-date-day').append('<option value="' + i + '" disabled=disabled>' + i + '</option>');
			}
			for (i=day+1; i<=days; i++) {
				$('#reservation-date-day').append('<option value="' + i + '">' + i + '</option>');
			}
		} else {
			var month = $(this).val();
			var d= new Date(year, month, 0);
			var days = d.getDate();

			for (i=1; i<=days; i++) {
				$('#reservation-date-day').append('<option value="' + i + '">' + i + '</option>');
			}
		}

		var selectedMonth = $('#reservation-date-month option:selected').attr('class');

		$('#reservation-date-year .' + selectedMonth).prop('selected', true);
    }


	jQuery(function($) {

		createRadio();

		styleSelect();

		createCheckbox();

	    $('#reservation-date-month').change(function(){
			checkDate();
	    });


	}); // end doc ready
