<div class="as-wrpr">
	<div class="overlay" id="overlay">
		<div class="loadingBox">
			<img class="loading" src="statics/imgs/static/loading.svg">
		</div>
	</div>
	<div class="as-body container">
		<div class="st-title text-center">
			<h2>استطلاع انتخابات 2018</h2>
		</div>
		<div class="dy-contents" id="dy-includes">
			<?php
				if(Functions::CookieCheck(Functions::GetRequest('page'))) {
					Functions::Inc('results.php');
				}else {
					Functions::Inc('choices.php');
				}
			?>
		</div>
	</div>
</div>