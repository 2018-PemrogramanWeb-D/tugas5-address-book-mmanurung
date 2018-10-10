<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Address Book | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
	<div class="row">
		<div class="large-6 columns">
			<h1>Address Book</h1>
		</div>
		<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">Tambah Kontak</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>Tambah Kontak</h2>
				<form id="addContact" action="#" method="post">
					<div class="row">
						<div class="large-5 columns">
							<label>Nama depan
								<input name="first_name" type="text" placeholder="Masukkan nama depan anda" />
							</label>
						</div>
						<div class="large-5 columns">
							<label>Nama belakang
								<input name="last_name" type="text" placeholder="Masukkan nama belakang anda" />
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>Email
								<input name="email" type="email" placeholder="Masukkan alamat email anda" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>No HP
								<input name="phone" type="text" placeholder="Masukkan nomor hp anda" />
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-5 columns">
							<label>Alamat Asal
								<input name="address1" type="text" placeholder="Masukkan alamat asal anda" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>Alamat domisili
								<input name="address2" type="text" placeholder="Masukkan alamat domisili anda" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>Notes
								<textarea name="notes" placeholder="Masukkan catatan tambahan"></textarea>
							</label>
						</div>
					</div>
					<input name="submit" type="submit" class="add-btn button right small" value="Submit">
						<a class="close-reveal-modal">&#215;</a>
				</form>
			</div>
		</div>
	</div>
	<!--Loading Img-->
	<div id="loaderImage">
		<img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/585d0331234507.564a1d239ac5e.gif">
	</div>
	<!--Main Content-->
	<div id="pageContent"></div>
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script> $(document).foundation(); </script>
  </body>
</html>
