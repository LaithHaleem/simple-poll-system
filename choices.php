			<?php
				require 'core/init.php';

				$results = DB::getInstance()->GetAll('choices', 'WHERE ch_type = "'. Functions::GetRequest('page') .'"');

				$polls = DB::getInstance()->GetAll('polls', 'WHERE p_name = "'. Functions::GetRequest('page') .'"');

				if($results != null):
			?>
			<div class="dy-sub-title text-right">
				<h4>استطلاع - من تتوقع سيفوز بـ<?php echo $polls[0]['p_title']; ?></h4>
			</div>
			<div class="dy-feilds">
				<?php foreach($results as $result): ?>
				<div class="dy-sub-field">
					<label class="field-label col-sm-12 text-right" data-id="<?php echo $result[id]; ?>">
						<h5 class="dy-title-field"><?php echo $result['ch_name']; ?></h5>
						<img class="dy-img-field" src="statics/imgs/choices/<?php echo $result[p_type] . '/' . $result[ch_pic] . '.jpg'; ?>">
					</label>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="vt-btn">
				<button id="vt-btn" onclick="jax('process.php')" class="vt-sub-btn offset-md-10" disabled="disabled">صوت</button>
			</div>
			<?php
				else:
					Functions::Inc('includes/404.php');
				endif;
				
			?>