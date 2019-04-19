<!-- container -->
<div class="container">
  <!-- form -->
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-8">
    <h1>Update Manga</h1>
    <?php 
            if ($this->session->flashdata('errors')) {
        ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('errors')?>
        </div>
        <?php  
            }
        ?>
        <?php 
            if ($this->session->flashdata('success')) {
        ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success')?>
        </div>
        <?php  
            }
        ?>
      <form method="post" action="<?= base_url()?>index.php/Manga/update_post/<?=$manga->id_manga?>" enctype="multipart/form-data">
        <div class="form-group" e>
          <br><br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="title" placeholder="Judul" value="<?=$manga->title?>">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="alternative_title" placeholder="Alternative Title" value="<?=$manga->alternative_title?>">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="author" placeholder="Author"  value="<?=$manga->author?>">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="artis" placeholder="Artist"  value="<?=$manga->artist?>">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="genre" placeholder="Genre"  value="<?=$manga->type?>">
          <br>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="sinopsis" rows="3" placeholder="Sinopsis"><?=$manga->sinopsis?></textarea>
          <br>
          <!-- upload -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="file" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <!-- form -->
    </div>
  </div>
</div>
<!-- container -->