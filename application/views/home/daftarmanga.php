<div class="container kotak">
	<div class="kotak" style="border: 1px solid #fff">
		<?php  
			foreach ($manga as $value) {
		?>
			<a href="<?=base_url()?>index.php/home/baca/<?=$value->id_manga?>" target="_blank">
			<h3><?= $value->title?></h3>	
			</a>
			<?php  
				foreach ($value->chapters as $value) {
			?>
					<h5>
					<a href="<?=base_url()?>index.php/home/chapter/<?=$value->id_chapter?>" target="_blank"><?=$value->title_chapter?></a>
						
					</h5>
			<?php
				}
			?>
		<?php
			}
		?>
	</div>
</div>