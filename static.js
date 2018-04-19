$(function() {

	//Put Active Mark On Active Selection And Change Background Button
	$('label').on('click', function() {
		// Some Variables
		var votBtn = $('.vt-sub-btn');

		$('label').removeClass('active');
		$(this).addClass('active');
		votBtn.removeAttr('disabled');
		votBtn.css({
			opacity: 1
		});
	});

	// Simple Function To Get Randome Number From 1 To Specific Number
	function RandomNumber($count) {
		return Math.floor(Math.random() * $count) + 1
	}

	// Dynamic Function To Control Result Width Depening Data Of Element
	$('.dy-progress-field').each(function() {
		// Some Variables
		var Child = $(this).children('.dy-prec');
		var Prec  = Child.data('prec');
		var ProgColor = ["0099e5", "B33771", "ff4c4c", "2196F3", "FF8F00",
		 				"2C3A47", "34bf49", "f47721", "EAB543", "795548",
		 				 "49176d", "16a085"];
		var Rand = RandomNumber(ProgColor.length - 1);

		if(Prec <= 100) {
			$(this).css({ background: '#' + ProgColor[Rand] })
				   .animate({
						  width: Prec + '%',
					}, 800)

			if(Prec <= 3) {
				Child.html(Prec);
			}else if(Prec > 3) {
				Child.html(Prec + '%');
			}
		}
	});

	//Function To Delete Brand OF 000webhost Brand HHHHH :)
	$('body > div').each(function() {
		if(!$(this).hasClass('as-wrpr') && 
			!$(this).hasClass('as-body') && 
			!$(this).hasClass('top-title') && 
			!$(this).hasClass('copyrights-box')) {
			$(this).removeAttr('style');
			$(this).attr('style', 'display: none !important');
			$(this).remove();
		}
	});

});