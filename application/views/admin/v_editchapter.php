<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-8">
      <h1>Update Chapter</h1>
      <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/manga/updatechapter/<?= $chapter->id_chapter ?>">
        <div class="form-group">
          <input type="hidden" name="id_manga" value="<?= $manga->id_manga ?>">
          <input type="text" class="form-control" id="formGroupExampleInput2" name="title" placeholder="Judul" value="<?=$chapter->title_chapter?>">
          <br>
          <!-- upload -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="file" accept=".pdf">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <small>The File must be in PDF format</small>
          <!-- upload -->
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      
    </div>
  </div>
</div>