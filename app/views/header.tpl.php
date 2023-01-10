<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog de recettes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $baseURI ?>/css/styles.css" rel="stylesheet">

  </head>

  <body>

    <header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link"href="#">Préliminaire</a>
            <a class="nav-link" href="#">Intercourse</a>
            <a class="nav-link" href="#">Orgasme</a>
          </div>
        </div>

      </div>
    </nav>

    <h1>Blog de recettes</h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $router->generate('home') ?>">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Recettes de saison</a></li>
            <li class="breadcrumb-item active" aria-current="page">Autre-rubrique</li>
        </ol>
    </nav>

    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>