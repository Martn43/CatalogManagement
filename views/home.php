<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        
        <title>Catálogo</title>

    </head>
    <body>
        <header class="bg-dark mb-3 shadow-sm border-bottom border-light">

            <nav class="container navbar navbar-expand-lg navbar-dark">
                <i class="fab fa-meetup fa-2x mr-2"></i>
                <a class="navbar-brand" href="#">Catálogo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto">
                        <a class="nav-item nav-link ml-4" href="#">Inicio</a>
                        <a class="nav-item nav-link" href="/adminMarcas">Marcas</a>
                        <a class="nav-item nav-link" href="/adminCategorias">Categorias</a>
                        <a class="nav-item nav-link" href="/adminProductos">Productos</a>
                    </div>
                </div>
            </nav>

        </header>

        <main class="container text-center">

            <h1> ¿Qué quiere gestionar? </h1>
            </br>
            <div class="container text-center gx-4">
                <div class="row justify-content-center">
                    <div class="col-2 ">
                        <a href="/marcas" class="btn btn-dark">Marcas</a>
                    </div>
                    <div class="col-2 ">
                        <a href="/categorias" class="btn btn-dark">Categorías</a>
                    </div>
                    <div class="col-2 ">
                        <a href="/productos" class="btn btn-dark">Productos</a>
                    </div>
                </div>
            </div>


        </main>

        <footer class="bg-dark fixed-bottom text-light text-center p-4">
            2023 - Martín Reus 
        </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>