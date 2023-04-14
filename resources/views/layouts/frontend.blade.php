<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/jsapp.js"></script>
    <script src="https://kit.fontawesome.com/e32421c37b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-j5XhJpL5cUZmk6UZK6gFdu6UcR6Q0aVh8W6/C3XAGtbPyxuzJhOvcd8W1Qe7VdTwCwFrrrmpy8fH5J5ueozzOw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .banner-image {
            background-image: url('/img/BannerRyatmaModel1.jpg');
            background-size: cover;
            position: relative;
        }

        .contenedor {
            display: flex;
            justify-content: center;
        }

        .circulo-contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 65px;
        }

        .circulo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #0871C5;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: #FCEC07;
        }

        .circulo i {
            font-size: 75px;
        }

        .texto {
            text-align: center;
            color: #1C3180;
            font-weight: bold;
        }

        .subtexto {
            text-align: center;

        }
    </style>
</head>

<body>
    
    @include('partials.frontmenu')

    @yield('content')

    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-secondary', 'shadow');
            } else {
                nav.classList.remove('bg-secondary', 'shadow');
            }
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var botonMenu = document.getElementById("boton-menu");
        var menu = document.getElementById("menu");

        botonMenu.addEventListener("click", function() {
            if (menu.style.display === "none") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        });
    </script>
</body>

</html>
