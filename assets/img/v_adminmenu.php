<!DOCTYPE html>
<html>
<head>
	<title><!-- echo --></title>
<!-- css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- css -->
</head>
<body>
	<!-- js -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- js -->

  		<!-- navbar -->
  		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<a class="navbar-brand" href="<!-- site_url -->">
    			<img src="img/logo.png" width="80" height="40" class="d-inline-block align-top" alt="">
			Mangaku
  			</a>
  			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      				<li class="nav-item">
        				<a class="nav-link" href="#">Tambah</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Hapus</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Update</a>
      				</li>
    			</ul>
    		</div>
		</nav>
  		<!-- navbar -->
  		<!-- container -->
  			<div class="jumbotron">
  				<div class="container">
    				<!-- form -->
    				<form>
					  <form>
					  <div class="form-group">
					    <label for="formGroupExampleInput2">Judul</label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" name="judul">
					    <label for="exampleFormControlTextarea1">Deskripsi</label>
    					<textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
    				<!-- form -->	
    			</div>
			</div>
  		<!-- container -->

</body>
</html>