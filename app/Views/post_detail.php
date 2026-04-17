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
		}

		.custom-card .card-body {
			padding: 32px;
		}

		.detail-post-title {
			font-family: 'Playfair Display', serif;
			font-size: 2rem;
			font-weight: 800;
			color: #6e5d68;
			margin-bottom: 10px;
		}

		.post-meta {
			display: inline-block;
			font-size: 0.95rem;
			color: #9a8e95;
			margin-bottom: 20px;
		}

		.detail-post-content {
			color: #746b75;
			line-height: 1.95;
		}

		.btn-main {
			background: #d8b4c2;
			color: #5f5a66;
			padding: 12px 24px;
			border-radius: 14px;
			font-weight: 600;
			display: inline-block;
			text-decoration: none;
			box-shadow: 0 6px 18px rgba(216, 180, 194, 0.22);
		}

		.btn-main:hover {
			background: #cfacba;
			color: #5f5a66;
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
			<h1>Detail Tulisan</h1>
			<p>Luangkan waktu sebentar untuk membaca isi cerita dan catatan yang dibagikan di halaman ini.</p>
		</div>
	</section>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="card custom-card">
					<div class="card-body">
						<h2 class="detail-post-title"><?= esc($post['title']) ?></h2>
						<span class="post-meta">
							<?= esc($post['author']) ?> | <?= esc($post['created_at']) ?>
						</span>

						<div class="detail-post-content">
							<p><?= nl2br(esc($post['content'])) ?></p>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<a href="<?= base_url('/post') ?>" class="btn-main">Kembali ke Daftar Tulisan</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="text-center">
			&copy; <?= Date('Y') ?> MyBlog - semoga tulisan ini memberi sedikit inspirasi.
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>