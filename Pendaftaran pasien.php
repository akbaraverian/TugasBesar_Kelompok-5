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
			  <form action="Mybooking.php" method="get">
			  	<div class="form-row">
				  <div class="col-md-8 mb-3">
					<label for="InputName">No. RM</label>
					<input type="type" class="form-control" id="validationNumb" name="MedRecordNumb" placeholder="RM0000765">
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
				   <label for="InputName">Jenis Kelamin</label>
				 <select class="form-control">
  					<option>Pilih</option>
  					<option >Laki-laki</option>
				    <option >Perempuan</option>
						</select>
			    <div class="form-row">
		       <div class="col-md-8 mb-3">
			  <label for="InputDate">Tanggal Lahir</label>
			 <input type="date" class="form-control" id="InputDate" name="BirthDate">
		   </div>
		  </div>
				 <div class="form-group">
				<div class="col-md-15 mb-3">
   			   <label for="exampleFormControlTextarea1">Alamat</label>
    		  <textarea class="form-control" id="InputAlamat" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
           </div>
          </div>
                 <div class="form-row">
				<div class="col-md-8 mb-3">
			  <label for="InputTelp">Telepon</label>
		     <input type="type" class="form-control" id="validationNumb" name="PhoneNumber" placeholder="Masukkan No. Telepon">
		    </div>
		   </div>
		  		<div class="form-group">
				<div class="col-md-15 mb-3">
   			   <label for="InputKel">Keluhan</label>
    		  <textarea class="form-control" id="InputKel" rows="3" placeholder="Isi Keluhan"></textarea>
           </div>
          </div>
          <div>
          	<button type="button" class="btn btn-primary ">Simpan</button>
          	<button type="button" class="btn btn-danger">Batal</button>
          </div>

</form>
			   

</body>
</html>