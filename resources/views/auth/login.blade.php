<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

</head>

<body>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"
                        style="margin-top: 14rem; border-width: 5px; border-radius: 5px; border-color: black">
                        <div style="display: flex;">
                            <img src="/assets/CVG-IMAGE.jpg" alt="Logo" class="img-fluid"
                                style="margin-left: 80px; height: 150px;">
                            <img src="/assets/SEPRO.PNG" alt="Logo" class="img-fluid"
                                style="width: 150px; height: 50px; margin-left: -120px; margin-top: 50px;">
                        </div>
                        <h3
                            style="text-align: center; font-family: Loto; color: #000000; font-weight: bold; text-shadow: 1px 1px #ffffff;">
                            Proyectos Especiales</h3>
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <font color="##000000" class="fw-bold"> Usuario </font>
                                <input type="text" name="username" id="username"
                                    class="form-control font-weight-bold">
                            </div>
                            <div class="form-group">
                                <font color="##000000" class="fw-bold"> Contraseña </font>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info"
                                    style="padding: -1rem; margin-top: 0.5rem; margin-left: 13rem;"><strong>Iniciar
                                        Sesión</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
