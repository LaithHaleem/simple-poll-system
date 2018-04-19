		<?php require 'core/init.php'; ?>
		<div class="dy-sub-title text-right">
				<h4>نتائج الاستطلاع</h4>
			</div>
			<div class="dy-feilds">
				<?php
					$results = DB::getInstance()->GetAll('choices', 'WHERE ch_type = "'. Functions::GetRequest('page') .'"');
					$collectvots = App::Collect($results, 'ch_vots');
					foreach($results as $result):
				?>
				<div class="dy-sub-field">
					<div class="res-label col-sm-12 text-right">
						<div class="col-sm-12">
							<h5 class="dy-title-field"><?php echo $result['ch_name']; ?></h5>
							<img class="dy-img-field" src="statics/imgs/choices/<?php echo $result[p_type] . '/' . $result[ch_pic] . '.jpg'; ?>">
							<div class="dy-progress-con">
								<div class="dy-progress-field">
									<span class="dy-prec" data-prec="<?php echo App::PrecItem($result[ch_vots], $collectvots) ?>"></span>
								</div>
							</div>
						</div>
						<div class="col-sm-12">	
							<span class="dy-analasys"></span>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
				<div class="dy-tot-vts">
					<p class="wr-vt-tot">مجموع الاصوات: <span class="dy-vt-db"><?php echo $collectvots; ?></span></p>
				</div>
			</div>
			<script src="scripts/js/static.js"></script>