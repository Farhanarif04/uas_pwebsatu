<?php
session_start();
include 'koneksi.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $namaproduk = $_POST['nama_produk'];
	$harga = $_POST['harga'];
    $pembayaran = $_POST['pembayaran'];
	$notelp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];

$query = mysqli_query($conn, "INSERT INTO pembelian (username, nama_produk, harga, pembayaran, no_telp, alamat) values ('$username', '$namaproduk', '$harga', '$pembayaran', '$notelp', '$alamat')");

if($query) {
			echo '<script>alert("Pesanan-mu berhasil terkirim, Terimakasih sudah berlangganan di Farchoco.");
			location.href="index.php"</script>';
	  	}else {
			echo '<script>alert("Pesanan-mu gagal.")</script>';
	  	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Contact Form inside Modal</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: "Varela Round", sans-serif;
}
.form-control:focus {
    border-color: #8464ca;
    box-shadow: 0 0 8px #beace3;
}
.contact-modal {
    width: 600px;
    padding: 50px;
    margin: 30px auto;
}
.contact-modal h4 {
    font-size: 26px;
    display: inline-block;
}
.contact-modal .form-control, .contact-modal .btn  {
    min-height: 38px;
    border-radius: 1px;
    outline: none;
}
.contact-modal .btn-primary {
    min-width: 100px;
    background: #8464ca;
    border: none;
}
.contact-modal .btn-primary:hover {
    background: #6d45c0;
}
.contact-modal .btn-primary:focus {
    box-shadow: 0 0 8px rgba(132, 100, 202, 0.6);
}
.contact-modal .btn-link {
    color: #6d45c0;
}
.contact-modal label {
    opacity: 0.9;
    font-weight: normal;
    font-size: 95%;
}
.contact-modal textarea {
    resize: vertical;
}
.contact-modal.modal-dialog {
    width: 480px;
}
.contact-modal .modal-header {
    padding: 20px 35px 14px;
}
.contact-modal .modal-content {
    border-radius: 1px;
}
.contact-modal .close {
    position: absolute;
    right: 35px;
    top: 25px;
}
.contact-modal .modal-body {
    padding: 20px 35px 35px;
}
.hint-text {
    opacity: 0.8;
}
.trigger-btn {
    display: inline-block;
    margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Order</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog contact-modal">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">FARCHOCHO</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="username" required>
                    </div>
                    <div class="form-group">
                    <label for="inputnamacoklat">Pilih Coklat Ingin Kamu Beli</label>
						<select class="form-control" id="inputnamacoklat" name="nama_produk" required onchange="updatePrice()">
							<option value="- Pilih Item -">- Pilih Item -</option>
							<option value="Sweet Choco">Sweet Choco</option>
                            <option value="White Coklat">White Coklat</option>
                            <option value="Milk Coklat">Milk Coklat</option>
                            <option value="Coklat Almond">Coklat Almond</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="pembayaran">Metode Pembayaran</label>
						<select class="form-control" id="pembayaran" name="pembayaran" required>
							<option value=" ">- Pilih Metode Pembayaran -</option>
							<option value="Gopay">Gopay</option>
                            <option value="Dana">Dana</option>
                            <option value="Ovo">Ovo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="nomor" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <script>
					function updatePrice() {
  						var selectedItem = document.getElementById("inputnamacoklat").value;
   						var hargaInput = document.getElementById("inputhargaitem");

   					switch (selectedItem) {
						case "- Pilih Item -":
   					        hargaInput.value = " ";
    					    break;
   					    case "Sweet Choco":
   					        hargaInput.value = "Rp. 15.000";
    					    break;
   					    case "White Coklat":
   					        hargaInput.value = "Rp. 20.000";
   					        break;
						case "Milk Coklat":
   					        hargaInput.value = "Rp. 30.000";
    					    break;
						case "Coklat Almond":
   					        hargaInput.value = "Rp. 20.000";
    					    break;
   						}
					}
					</script>
                    <input type="submit" class="btn btn-primary" value="Kirim">
                    <input type="button" class="btn btn-link" data-dismiss="modal" value="Batal">
                </form>
			</div>
		</div>
	</div>
</div>
</body>
</html>