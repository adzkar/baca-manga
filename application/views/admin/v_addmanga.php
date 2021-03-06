<!-- container -->
<div class="container">
  <!-- form -->
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-8">
    <h1>Insert Manga</h1>
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
      <form method="post" action="<?= base_url()?>index.php/Manga/post" enctype="multipart/form-data">
        <div class="form-group" e>
          <br><br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="title" placeholder="Judul">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="alternative_title" placeholder="Alternative Title">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="author" placeholder="Author">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="artis" placeholder="Artist">
          <br>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="genre" placeholder="Genre">
          <br>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="sinopsis" rows="3" placeholder="Sinopsis"></textarea>
          <br>
          <!-- upload -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="file" id="inputGroupFile01" required="">
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