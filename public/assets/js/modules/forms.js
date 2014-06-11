

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


	jQuery(function($) {

		createRadio();

		styleSelect();

		createCheckbox();

	}); // end doc ready
