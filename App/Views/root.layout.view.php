<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/style.css">
    <link rel="shortcut icon" href="public/assets/logo/skateshop-logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Skateshop</title>
</head>
<body id="page-top" lang="sk">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-1" id="mainNav">
    <div class="container px-4">
        <img src="public/assets/logo/skateshop-logo.png" alt="Skateshop Logo" class="logo pe-1 rounded-pill">
        <a class="navbar-brand" href="#page-top">Extreme Skateshop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2">
                <li class="nav-item"><a class="nav-link" href="/">Domov</a></li>
                <?php foreach ($data['categories'] as $category): ?>
                <li class="nav-item"><a class="nav-link" href="/?c=home&a=product&category_id=<?= $category->id ?>"><?= $category->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
<?= $contentHTML ?>
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Frederik Vereš semestralna práca</div></div>
</footer>
</body>
</html>