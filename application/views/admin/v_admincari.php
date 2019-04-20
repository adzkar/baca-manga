<!-- container -->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-8">
      <!-- cari -->
      <div class="input-group mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Cari Komik" aria-label="Cari Komik" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>
      </div>
      <!-- cari -->
      <?php 
            if ($this->session->flashdata('success')) {
        ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success')?>
        </div>
        <?php  
            }
        ?>
      <!-- Table -->
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col">Komik</th>
            <th scope="col">Judul</th>
            <th scope="col">Chapter</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (!$manga->count()) {
                echo "<tr>";
                echo "<td colspan='4'><p>Belum ada yang ditambahkan</p>";
                echo "</td>";
                echo "</tr>";
              } else { 
            foreach ($manga as $value) {
          ?>
            <tr>
              <td>
                <img src="<?= base_url()?>uploads/<?=$value->thumbnail?>" width="50" height="70">
              </td>
              <td><?= $value->title?></td>
              <td>
                <a class="btn btn-sm btn-primary" href="<?= base_url() ?>index.php/admin/mangadetil/<?=$value->id_manga?>">Tambah Chapter</a>
              </td>
              <td>
                <a class="btn btn-sm text-white btn-warning" href="<?= base_url() ?>index.php/admin/editmanga?id=<?= $value->id_manga?>">Ubah</a>
                <a class="btn btn-sm text-white btn-danger" href="<?= base_url() ?>index.php/manga/hapus?id=<?= $value->id_manga?>">Hapus</a>
              </td>
            </tr>
          <?php
                } // end foreach

              } // end else
          ?>
        </tbody>
      </table>
      <!-- Table -->
    </div>
  </div>
</div>
<!-- container -->