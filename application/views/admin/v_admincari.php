<!DOCTYPE html>
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
          <tr>
            <td>
              <img src="img/thumbnail.jpg" width="50" height="70">
            </td>
            <td>One Piece</td>
            <td>
              <button type="button" class="btn btn-sm btn-primary">Tambah Chapter</button>
            </td>
            <td>
              <button type="button" class="btn btn-sm btn-danger">Hapus</button>
              <button type="button" class="btn btn-sm btn-warning">Ubah</button>
            </td>
          </tr>
          <tr>
            <td>
              <img src="img/thumbnail.jpg" width="50" height="70">
            </td>
            <td>Ancok</td>
            <td>
              <button type="button" class="btn btn-sm btn-primary">Tambah Chapter</button>
            </td>
            <td>
              <button type="button" class="btn btn-sm btn-danger">Hapus</button>
              <button type="button" class="btn btn-sm btn-warning">Ubah</button>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- Table -->
    </div>
  </div>
</div>
<!-- container -->