<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pasien</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


	<!--navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style= "background-color: #b2fefa;">
  <div class="collapse navbar-collapse" id="nabvarNav"></div>
  <a class="navbar-brand" href="#"><img width = "200" height = "50" src="" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav ">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> HOME <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#"> PILIH DOKTER </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"> TANYA DOKTER </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"> HUBUNGI KAMI </a>
      </li>
     
      <li class="nav-item">
        <button type="button" class="btn btn-link text-info" style="margin-left: 80px"> LOGIN </button>
      </li>
      
      <li class="nav-item">
        <button type="button" class="btn btn-link text-info"> DAFTAR </button>
      </li>
    </ul>
</div>
</nav>
		<br><br>
		<div class="container">
 		 <div class="row">
 		 <div class=" col-md-6 justify-content-center align-items-center" style= " background-color: #b2fefa" >
			  <form action="remed.php" method="get">
			  	<div class="form-row">
				  <div class="col-md-8 mb-3">
					<label for="InputName">Nomor rekam medis/label>
					<input type="type" class="form-control" id="validationNumb" name="nomor" placeholder="RM0000765">
				  </div>
				</div>
				 <div class="form-row">
				  <div class="col-md-8 mb-3">
				   <label for="InputName">Nama Pasien</label>
				   <input type="text" class="form-control" id="InputName" name="Name" placeholder="Masukkan Nama Lengkap">
				  </div>
				 </div>
				 <div class="form-row">
				  <div class="col-md-8 mb-3">
				   <label for="InputName">Dokter</label>
				<input type="text" class="form-control" id="InputName" name="namadokter" placeholder="Masukkan Nama Lengkap dokter">
      </div>
    </div>
			    <div class="form-row">
		       <div class="col-md-8 mb-3">
			  <label for="">Diagnosa</label>
			 <input type="text" class="form-control" id="InputName" name="diagnosa" placeholder="Masukkan diagnosa yang telah dikeluarkan">
		   </div>
		  </div>
				 
          	<button type="button" class="btn btn-primary ">Simpan</button>
          	<button type="button" class="btn btn-danger">Batal</button>
          </div>

</form>
			   

</body>
</html>