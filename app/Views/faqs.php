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
		}

		.faq-question {
			font-size: 1.15rem;
			font-weight: 700;
			color: #6e5d68;
			margin-bottom: 12px;
		}

		.faq-answer {
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
			<h1>Pertanyaan yang Sering Muncul</h1>
			<p>Beberapa hal yang mungkin ingin kamu tahu tentang blog ini aku rangkum di sini.</p>
		</div>
	</section>

	<div class="container">
		<div class="row g-4">
			<div class="col-md-6">
				<div class="card custom-card">
					<div class="card-body">
						<div class="faq-question">Blog ini membahas tentang apa?</div>
						<div class="faq-answer">
							MyBlog membahas catatan belajar, pengalaman sederhana saat membuat website,
							dan cerita ringan seputar dunia coding yang ditulis dengan bahasa yang santai.
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card custom-card">
					<div class="card-body">
						<div class="faq-question">Apakah isi blog ini cocok untuk pemula?</div>
						<div class="faq-answer">
							Iya, sebagian besar isi blog ini dibuat supaya mudah dibaca dan tidak terlalu berat,
							jadi tetap nyaman diikuti oleh yang masih baru belajar.
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card custom-card">
					<div class="card-body">
						<div class="faq-question">Kenapa blog ini dibuat?</div>
						<div class="faq-answer">
							Blog ini dibuat sebagai ruang kecil untuk menyimpan proses belajar,
							membagikan pengalaman, dan mendokumentasikan perjalanan memahami coding sedikit demi sedikit.
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card custom-card">
					<div class="card-body">
						<div class="faq-question">Apakah nanti akan ada artikel baru?</div>
						<div class="faq-answer">
							Tentu, ke depannya blog ini akan terus diisi dengan tulisan baru,
							baik berupa catatan belajar, pembahasan singkat, maupun pengalaman saat membuat tampilan website.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="text-center">
			&copy; <?= Date('Y') ?> MyBlog - tempat kecil untuk tumbuh dan belajar.
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>