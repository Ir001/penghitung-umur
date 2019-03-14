<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<title>Penghitung Umur</title>
	</head>
	<body>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-6">
					<form id="form">
						<h2>Penghitung Umur</h2>
						<div class="form-row">
							<div class="form-group">
								<label for="">Tanggal Lahir</label>
								<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
							</div>
							<div class="input-group">
								<button class="btn btn-info" id="hitung">Hitung</button>
							</div>
							<div id="hasil">
								<hr>
								<span id="umur"></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="http://localhost/dist/js/jquery-3.3.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#form').submit(function(e){
					e.preventDefault();
					$.ajax({
						type: "POST",
						url : "fungsi.php",
						data : $('#form').serialize(),
						success : function(data){
							$('#umur').html("<p class='alert alert-info'>Umur Anda: "+data+" tahun </p>");
						}
					})
				});
			});
		</script>
		<!-- <script>
			function getUmur(){
				var http = new XMLHttpRequest();
				var url = 'fungsi.php';
				var umur = document.getElementById('tanggal_lahir').value;
				var params = "tanggal_lahir="+umur;
				http.open("POST", url, true);
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				//
				http.onreadystatechange = function(){
					if (http.redystate == 4 && http.status == 200) {
						document.getElementById('umur').innerHTML = http.responseText;
					}
				}
				http.send(params);
			}
		</script> -->
	</body>
</html>