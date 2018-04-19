	<?php
		require 'core/init.php';
	?>
	<div class="top-title">
		<div class="container">
			<div class="title-box text-center">
			 	<img class="republic-ics" src="statics/imgs/static/republic.png">
				<h2 class="title-page">استطلاعات الرأي | الانتخابات العراقية 2018</h2>
			</div>
		</div>
	</div>
	<div class="as-body">
		<div class="container">
			<div class="row line-row">
			<?php
				$results = DB::getInstance()->GetAll('polls');
				foreach($results as $result):
			?>
				<div class="col-md-3 col-sm-6 line-row-res">
					<div class="pol-box text-center">
						<a class="pol-link" href="/Polls/<?php echo $result[p_name]; ?>">
							<img class="pol-img" src="statics/imgs/polls/<?php echo $result[p_img]; ?>" alt="">
							<h4 class="pol-title">استطلاع<span><?php echo $result['p_title']; ?></span></h4>
						</a>
					</div>
				</div>
			<?php
				endforeach;
			?>
			</div>
		</div>
	</div>