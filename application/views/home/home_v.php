<div class="container kotak">
	<div class="row">
		<!-- Tabel Komik Menu Utama -->
		<div class="col-8">
			<table class="table table-bordered">
				<thead class="bg-primary text-white">
					<tr>
						<th scope="col" class="text-center">Kategori</th>
						<th scope="col" class="text-center">Judul</th>
						<th scope="col" class="text-center">Tanggal Liris</th>
					</tr>
				</thead>
				<tbody class="text-white">
					<?php  
						foreach ($chapter as $value) {
					?>
					<tr>
						<td class="start" id="n1">
							<i class="fa fa-book"></i> Komik
						</td>
						<td id="n2">
							<a href="<?= base_url() ?>index.php/home/baca/<?= $value->id_manga ?>" target="_blank">
								<?= $value->manga->title?> &nbsp
								<?= $value->title_chapter?>
							</a>
						</td>
						<td id="n3"><?= $value->release_date?></td>
					</tr>
					<?php  
						}
					?>
				</tr>
			</tbody>
		</table>
		<div class="row">
			<!-- View All -->
			<div class="col-2"></div>
			<div class="col-8">
				<a href="<?= base_url() ?>index.php/home/allManga" target="_blank" title="View all Manga" class="btn">
					View all Komik
				</a>
				<a href="#" target="_blank" title="View all Anime" class="btn">
					View all Video
				</a>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<div class="col-4">
		<a href="#" class="text-center">Dibutuhkan Staff Berpengalaman</a>
		<br>
		<br>
		<!-- Social media -->
		<div class="row" id="fb">
			<div class="col-2" id="fb1">
				<i class="fa fa-facebook"></i>
			</div>
			<div class="col-10" id="fb1">
				<th>Join The Group Facebook</th>
			</div>
		</div>
		<br>
		<div class="row" id="ig">
			<div class="col-2" id="ig1">
				<i class="fa fa-instagram"></i>
			</div>
			<div class="col-10" id="ig2">
				<th>Follow on Instagram</th>
			</div>
		</div>
		<br>
		<div class="row" id="yt">
			<div class="col-2" id="yt1">
				<i class="fa fa-youtube"></i>
			</div>
			<div class="col-10" id="yt1">
				<th>Subscribe On Youtube</th>
			</div>
		</div>
		<br>
		<!-- Video Rekomendasi -->
		<th>Video rekomendasi</th>
		<div class="row" id="kkr">
			<div class="col-6">
				<th>lala</th>
			</div>
			<div class="col-6">
				<th>a</th>
			</div>
		</div>
		<br>
		<br>
		<!-- Komik Rekomendasi -->
		<th>Komik Rekomendasi</th>
		<div class="row" id="kkr">
			<div class="col-2">
				<th>lala</th>
			</div>
			<div class="col-8">
				<li>lala</li>
				<li>lala</li>
			</div>
		</div>
	</div>
</div>
<tr>
</tr>
</div>