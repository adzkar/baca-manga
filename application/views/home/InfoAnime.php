<div class="container kotak">
	<div class="row">
		<div class="col-9">
			<!-- Judul Manga -->
			<h3><?=$manga->title ?></h3>
			<br>
			<br>
			<div class="row" style="margin-bottom: 2em">
				<!-- Deskripsi Manga -->
				<div class="col-4">
					<img src="<?= base_url() ?>uploads/<?= $manga->thumbnail ?>" alt="" style="width: 200px">
				</div>
				<div class="col-8">
					<p class="desc">
			            <strong>Title:</strong> &nbsp
			            <?= $manga->title?> <br>
			            <strong>Alternative Title:</strong> &nbsp
			            <?= $manga->alternative_title?> <br>
			            <strong>Author:</strong> &nbsp
			            <?= $manga->author?> <br>
			            <strong>Artist:</strong> &nbsp
			            <?= $manga->artist?> <br>
			            <strong>Genre:</strong> &nbsp
			            <?= $manga->type?> <br>
			            <strong>Sinopsis:</strong> &nbsp
			            <?= $manga->sinopsis?> <br>
			          </p>
				</div>
			</div>
			<div class="kotak-kuning" style="display: flex;flex-direction: column-reverse;">
				<?php  
					foreach ($chapter as $value) {
				?>
				<a href="<?= base_url() ?>index.php/home/chapter/<?=$value->id_chapter?>" target="_blank" style="font-size: 1em"><?= $value->title_chapter?></a>
				<br>
				<?php
					}
				?>
			</div>
		</div>
		<div class="col-3">
			<p>hola</p>
		</div>
	</div>
</div>
<br>
<br>