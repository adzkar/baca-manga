<!-- container -->
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-8">
      <!-- cari -->
      <div class="input-group mt-2 mb-3">
        
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
      <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url() ?>uploads/<?= $manga->thumbnail ?>" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-8">
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

      <!-- error notification -->
      <?php 
            if ($this->session->flashdata('errors')) {
        ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('errors')?>
        </div>
        <?php  
            }
        ?>

      <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/manga/addchapter/<?= $manga->id_manga ?>">
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" name="title" placeholder="Judul">
          <br>
          <!-- upload -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" required="" name="file" accept=".pdf">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
            <small>The File must be in PDF format</small>
          <!-- upload -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <br>
      <!-- Table -->
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width: 15px">#</th>
            <th scope="col">Chapter</th>
            <th scope="col">Release Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php  
            if ($chapters->count() == 0) {
              echo "<tr><td colspan='3'>Kosong</td></tr>";
            } else {
              $no = 1;
              foreach ($chapters as $value) {
          ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $value->title_chapter?></td>
            <td><?= $value->release_date ?></td>
            <td>
              <a class="btn btn-sm text-white btn-info" href="<?= base_url() ?>index.php/home/chapter/<?= $value->id_chapter?>" target="_blank">Lihat</a>
              <a class="btn btn-sm text-white btn-warning" href="<?= base_url() ?>index.php/admin/editchapter?id_manga=<?= $value->id_manga?>&id_chapter=<?= $value->id_chapter ?>">Ubah</a>
              <a class="btn btn-sm text-white btn-danger" href="<?= base_url() ?>index.php/manga/hapuschapter?id_manga=<?= $value->id_manga?>&id_chapter=<?=$value->id_chapter?>">Hapus</a>
            </td>
          </tr>
          <?php  
                $no++;
              } // foreach
            } // else
          ?>
        </tbody>
      </table>
      <!-- Table -->
    </div>
  </div>
</div>
<!-- container -->