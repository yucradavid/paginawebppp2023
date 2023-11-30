<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="path/to/your/styles.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>


        <!-- Styles -->
        

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    </head>
<style>
        /* Estilos generales */
        body {
        font-family: 'Figtree', sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px;
    color: #fff;

}

.flex {
    display: flex;
}

a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #ffcc00; /* Color de resaltado al pasar el ratón */
}

.logo {
    flex: 1;
    text-align: center;
}

.login a {
    display: flex;
    align-items: center;
}

.login i {
    margin-right: 5px;
}
/* ... (estilos existentes) */

.slider {
    width: 80%;
    margin: 50px auto;
}

.slick-prev,
.slick-next {
    font-size: 24px;
    color: #333;
}

.slick-prev:hover,
.slick-next:hover {
    color: #ffcc00; /* Color de resaltado al pasar el ratón */
}

.slick-prev {
    left: -40px;
}

.slick-next {
    right: -40px;
}

.slick-prev, .slick-next {
    background: #fff;
    border: 2px solid #333;
    border-radius: 50%;
    padding: 10px;
    z-index: 1;
}

.slick-prev:before, .slick-next:before {
    content: '\2190'; /* Código Unicode de la flecha izquierda */
}

.slick-next:before {
    content: '\2192'; /* Código Unicode de la flecha derecha */
}

/* Estilos adicionales para las imágenes del carrusel */
.slider img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

        /* Estilos para la sección de bienvenida */
        .welcome-section {
            background-image: url('https://blog.fromdoppler.com/wp-content/uploads/main42.png'); /* Cambia la URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .welcome-content {
            background: rgba(0, 0, 0, 0.6); /* Fondo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
        }

        .welcome-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .welcome-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .welcome-content a {
            text-decoration: none;
            color: #ff6600;
            font-weight: bold;
            border: 2px solid #ff6600;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .welcome-content a:hover {
            background-color: #ff6600;
            color: #fff;
        }

        /* Estilos para el carrusel de tarjetas */
        .practice-cards {
            padding: 40px;
            text-align: center;
        }

        .card-carousel {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .card {
            width: 30%;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .card p {
            font-size: 14px;
        }

        .card a {
            text-decoration: none;
            background-color: #ff6600;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }

        .card a:hover {
            background-color: #ff9933;
        }

        /* Estilos para el footer */
.footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    
    bottom: 0;
    width: 100%;
}

.footer .flex {
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-link {
    margin: 0 15px;
}

.footer-link a {
    color: #fff;
    text-decoration: none;
}

.footer-link a:hover {
    color: #ffcc00;
}

.footer-info {
    text-align: center;
    margin-top: 10px;
}

</style>
    
    
    <style>
    /* Estilos para el modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      max-width: 400px;
      text-align: center;
      border-radius: 8px;
      position: relative;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  </style>


<body>
<header>
    <nav class="navbar">
        <div class="flex">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/empresas') }}">Empresas</a>
            <a href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
            <a href="{{ url('/contactanos') }}">Contáctanos</a>
        </div>
        
        <div class="login">
            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
        </div>
    </nav>
</header>
<main>
<div class="slider">
    <div>

            <iframe width="1213" height="550" src="https://www.youtube.com/embed/TyVW3wNjuww" title="UPeU | #UniversidadesQueMejoran" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div>
        <img src="https://www.tooltyp.com/wp-content/uploads/2014/10/1900x920-8-beneficios-de-usar-imagenes-en-nuestros-sitios-web.jpg" alt="Imagen 2">
    </div>
    <div>
        <img src="https://www.tooltyp.com/wp-content/uploads/2014/10/1900x920-8-beneficios-de-usar-imagenes-en-nuestros-sitios-web.jpg" alt="Imagen 3">
    </div>
    <!-- Add more images as needed -->
</div>

</main>

    <section class="welcome-section">
        <div class="welcome-content">
            <h1>Bienvenido a la Universidad Peruana Unión</h1>
            <p>Somos una institución dedicada a la excelencia académica y la formación de profesionales. Descubre nuestro compromiso con la educación de calidad y el desarrollo personal.</p>
            <a href="#mas-informacion">Más información</a>
        </div>
    </section>



    <section class="practice-cards">
        <h2>Prácticas Pre Profesionales</h2>
        <div class="card-carousel">
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 1">
                <h3>Práctica 1</h3>
                <p>Descripción de la práctica 1...</p>
                <a href="#">Más información</a>
            </div>
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 2">
                <h3>Práctica 2</h3>
                <p>Descripción de la práctica 2...</p>
                <a href="#">Más información</a>
            </div>
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 3">
                <h3>Práctica 3</h3>
                <p>Descripción de la práctica 3...</p>
                <a href="#">Más información</a>
            </div>
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 4">
                <h3>Práctica 4</h3>
                <p>Descripción de la práctica 4...</p>
                <a href="#">Más información</a>
            </div>
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 5">
                <h3>Práctica 5</h3>
                <p>Descripción de la práctica 5...</p>
                <a href="#">Más información</a>
            </div>
            <div class="card">
                <img src="https://cdn.www.gob.pe/uploads/document/file/1431540/standard_IMG_1141.JPG" alt="Práctica 6">
                <h3>Práctica 6</h3>
                <p>Descripción de la práctica 6...</p>
                <a href="#">Más información</a>
            </div>
        </div>
    </section>



  </div>
</div>
    
    <footer class="footer">
    <div class="flex">
        <div class="footer-link">
            <a href="#">Política de privacidad</a>
        </div>
        <div class="footer-link">
            <a href="#">Términos y condiciones</a>
        </div>
        <div class="footer-link">
            <a href="#">Mapa del sitio</a>
        </div>
    </div>
    <div class="footer-info">
        <p>&copy; 2023 Tu Sitio. Todos los derechos reservados.</p>
    </div>
</footer>
    

    <!-- Resto del contenido -->
<script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            prevArrow: '<button type="button" class="slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-next"></button>'
            // Puedes ajustar más opciones según tus necesidades
        });
    });
</script>

</body>
</html>
