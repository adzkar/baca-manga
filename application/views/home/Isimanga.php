<div class="container kotak">
	<h3 id='judul'>Baca Manga <?= $chapter->title_chapter ?></h3>
	<div class="d-flex justify-content-center">
		<!-- Manga -->
		<embed src="<?= base_url() ?>uploads/<?= $chapter->filename ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />

		<!-- End Manga-->
	</div>
</div>
<br>
<br>