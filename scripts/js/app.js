	//Dynamic Hide Element On Body Loaded
	function hideOnLoad($ele, $case) {
		$('#'+$ele).css({
			visibility: $case
		});
	}

	//Dyanmic Function To Get Results Using Axios Object
	function displayResults($url, $ele) {
		axios.get($url)
		  .then(function (response) {
		    $('#'+$ele).html(response.data);
		  })
		  .catch(function (error) {
		    return false;
		});
	}

	//Dynamic Function To Send Voting Request
	function jax($url) {
		$('label').each(function() {
			if($(this).hasClass('active')) {
				//Some Valriables
				var activeCount = $('.active').length;
				var idOption = $(this).data('id');

				if(activeCount == 1) {
					$.ajax({
						url: $url,
						method: 'POST',
						data: {idOption: idOption},
						beforeSend: function() {
							hideOnLoad('overlay', 'visible');
						},
						success: function(res) {
							console.log(res);
							hideOnLoad('overlay', 'hidden');
							var result = JSON.parse(res);
							if(result.status) {
								displayResults(result.route, 'dy-includes');
							}
						},
						async: true
					});

				}
			}
		});
	}