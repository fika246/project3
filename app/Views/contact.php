<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

	<style>
		body {
			background: #fffaf7;
			font-family: 'Inter', sans-serif;
			color: #5f5a66;
		}

		.navbar {
			background: rgba(255, 248, 244, 0.96) !important;
			border-bottom: 1px solid #f1e6e8;
			box-shadow: 0 4px 18px rgba(166, 140, 148, 0.08);
		}

		.navbar .navbar-brand {
			color: #7a6572 !important;
			font-weight: 700;
			font-size: 1.7rem;
			font-family: 'Playfair Display', serif;
		}

		.navbar .nav-link {
			color: #8a7a84 !important;
			font-weight: 500;
		}

		.page-banner {
			background: linear-gradient(135deg, #fff1f4, #f5f0ff, #f7f8ef);
			padding: 70px 0 45px;
			margin-bottom: 40px;
			border-bottom-left-radius: 28px;
			border-bottom-right-radius: 28px;
		}

		.page-banner h1 {
			font-family: 'Playfair Display', serif;
			font-size: 2.6rem;
			font-weight: 800;
			color: #6e5d68;
		}

		.page-banner p {
			color: #8b7f87;
			margin-bottom: 0;
		}

		.custom-card {
			background: #fffdfc;
			border: 1px solid #f1e8ea;
			border-radius: 22px;
			box-shadow: 0 10px 28px rgba(190, 166, 174, 0.08);
			transition: 0.3s;
			height: 100%;
		}

		.custom-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 14px 30px rgba(199, 141, 163, 0.12);
		}

		.custom-card .card-body {
			padding: 28px;
			text-align: center;
		}

		.info-icon {
			width: 52px;
			height: 52px;
			border-radius: 16px;
			background: linear-gradient(135deg, #f3cfd9, #ddd4f6);
			color: #6e5d68;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			font-size: 1rem;
			font-weight: 700;
			margin-bottom: 16px;
		}

		.contact-label {
			font-size: 1.1rem;
			font-weight: 700;
			color: #6e5d68;
			margin-bottom: 10px;
		}

		.contact-value {
			color: #8b7f87;
			line-height: 1.8;
		}

		footer {
			margin-top: 60px;
			padding: 25px 0;
			color: #9a8e95;
			border-top: 1px solid #efe3e7;
		}
	</style>
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<section class="page-banner">
		<div class="container">
			<h1>Hubungi Saya</h1>
			<p>Kalau kamu ingin menyapa, berdiskusi, atau berbagi ide, kamu bisa menghubungi lewat beberapa cara ini.</p>
		</div>
	</section>

	<div class="container">
		<div class="row g-4">
			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">📍</div>
						<div class="contact-label">Domisili</div>
						<div class="contact-value">
							Berbasis di Indonesia dan terbuka untuk berbagi cerita, ide, serta pengalaman belajar.
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">✉</div>
						<div class="contact-label">Email</div>
						<div class="contact-value">
							nanachan12@gmail.com
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card custom-card">
					<div class="card-body">
						<div class="info-icon">☎</div>
						<div class="contact-label">Kontak</div>
						<div class="contact-value">
							0812-2893-0472
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="text-center">
			&copy; <?= Date('Y') ?> MyBlog - terima kasih sudah berkunjung.
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>