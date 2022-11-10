<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorte Imagen con Javascript y PHP</title>
    <link rel="shortcut icon" href="./faviconconfiguroweb.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./croppie/croppie.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./croppie/croppie.js"></script>
    <style>
        html,
        body {
            min-height: 100%;
            width: 100%;
        }

        .img-holder {
            width: calc(100%);
            height: 30vh;
            background: white;
        }

        .img-holder img {
            object-position: relative;
        }

        .img-holder img {
            width: calc(100%);
            height: calc(100%);
            object-fit: scale-down;
            object-position: center center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="./">Recorte Imagen con Javascript y PHP</a>
            <div>
                <a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript" class="text-light fw-bolder h6 text-decoration-none" target="_blank">ConfiguroWeb</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-5 my-3">
        <div class="clearfix my-3"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card rounded-0">
                    <div class="card-body rounded-0">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                                <div class="mb-3">
                                    <label for="upload" class="form-label">Subir Imagen</label>
                                    <input class="form-control" type="file" name="upload" accept="image/jpeg, image/png" id="upload">
                                </div>
                            </div>
                        </form>
                        <div id="croppie-editor" class="d-none">
                            <div id="croppie-field"></div>
                            <div class="mx-0 text-center">
                                <button class="btn btn-sm btn-light border border-dark rounded-0" id="rotate-left" type="button">Rotate Left</button>
                                <button class="btn btn-sm btn-light border border-dark rounded-0" id="rotate-right" type="button">Rotate Right</button>
                                <button class="btn btn-sm btn-primary rounded-0" id="upload-btn" type="button">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card round-0 rounded-0">
                    <div class="card-body rounded-0">
                        <div class="container-fluid">
                            <div class="d-flex flex-wrap">
                                <?php
                                $dir = "uploads/";
                                if (is_dir($dir)) :
                                    $scandir = scandir($dir);
                                    foreach ($scandir as $img) :
                                        if (in_array($img, ['.', '..']))
                                            continue;
                                ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12 p-1">
                                            <div class="position-relative img-holder">
                                                <img src="<?= $dir . $img ?>" alt="">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #0d6efd;
    color: white;
    text-align: center;">
        <h3><a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript" style="color:whitesmoke; text-decoration:none;">Para más desarrollos ConfiguroWeb</a></h3>
    </footer>
    <script src="app.js"></script>

</body>

</html>