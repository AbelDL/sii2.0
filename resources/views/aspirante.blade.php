<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Integral de Información - ITMA</title>
   <link rel="stylesheet" href="{{ asset('css/aspirante.css') }}">
   
</head>
<body>

    <header>
        <div class="left">
         <img src="{{ asset('assets/imagenes/secretaria.png') }}" alt="Logo SEP" class="logo-left">
        </div>
        <div class="center">
            <div>Sistema Integral de Información</div>
            <div><strong>INSTITUTO TECNOLÓGICO DE MILPA ALTA</strong></div>
        </div>
        <div class="right">
            
             <img src="{{ asset('assets/imagenes/nacional.png') }}" alt="Logo TecNM" class="logo-right">
        </div>
    </header>
    
   <video autoplay muted loop width="1150" height="300" controls>
        <source src="../assets/video/tecnm.mp4">
    </video>

    <div class="main-content" id="main-content">
        <!-- Izquierda -->
        <div class="left-section">
            <h3>ASPIRANTES</h3>
            <div class="convocatoria">¡Convocatoria abierta!</div>

            <div class="programa">
                <strong>Sistemas y Computación</strong> 
                <button class="btn btn-light btn-menu" onclick="mostrarRegistro()">Acceder</button>
                <p>Contamos con laboratorios de cómputo para prácticas de programación <p>"Innovamos el presente, programamos el futuro."</p> <p>"Transformamos ideas en tecnología que conecta al mundo."</p></p></p>
                <img src="../assets/imagenes/sistemas.png" alt="Sistemas">
            </div>

            <div class="programa">
                <strong>Bioquímica</strong> 
                <button class="btn btn-light btn-menu" onclick="mostrarRegistro()">Acceder</button>
                <p>Contamos con laboratorios para prácticas<p>"La ciencia de la vida aplicada al bienestar humano."</p> <p>"Unimos la biología con la ingeniería para crear soluciones sostenibles."</p></p></p>
                <img src="../assets/imagenes/bioquimica.png" alt="Bioquímica">
            </div>
        </div>

        <!-- Derecha -->
        <div class="right-section">
            <h3>Registrarse</h3>
            <img src="../assets/imagenes/tec.png" alt="Registro">

            <div class="programa">
                <strong>Gestión Empresarial</strong> 
                <button class="btn btn-light btn-menu" onclick="mostrarRegistro()">Acceder</button>
                <p>Planear, organizar y controlar los recursos de una empresa para alcanzar sus objetivos<p>"Lideramos con estrategia, transformamos con innovación."</p> <p>"Formamos líderes capaces de dirigir el cambio empresarial."</p></p></p>
                <img src="../assets/imagenes/gestion.png" alt="Gestión">
            </div>

            <div class="programa">
                <strong>Alimentos</strong> 
                <button class="btn btn-light btn-menu" onclick="mostrarRegistro()">Acceder</button>
                <p>Conocimientos científicos y tecnológicos para producir alimentos seguros y de calidad.<p>"Calidad y seguridad alimentaria para el mundo de hoy."</p> <p>"Innovamos en la cadena alimentaria, desde el campo hasta tu mesa."</p></p></p>
                <img src="../assets/imagenes/alimentos.png" alt="Alimentos">
            </div>
        </div>
    </div>

    <!--Contenido de registro-->
    <div id="registro-section" style="display: none;">
      
    
        <img class="registro-fondo" src="../assets/imagenes/tecnm-removebg-preview.png" alt="Logo Milpa Alta">
    
        <main class="registro-container">
            <h2>ASPIRANTES</h2>
            <p>¡Sé parte de nuestra Comunidad Universitaria!</p>
    
            <div class="registro-box">
                <div class="registro-titulo">¡Convocatoria abierta!</div>
    
                <form>
                    <input type="text" placeholder="Nombre(s)">
                    <input type="text" placeholder="Apellido Materno">
                    <input type="text" placeholder="Apellido Paterno">
    
                    <div class="radio-group">
                        <label><input type="radio" name="carrera" value="ISC"> ISC</label>
                        <label><input type="radio" name="carrera" value="IBQ"> IBQ</label>
                        <label><input type="radio" name="carrera" value="IGE"> IGE</label>
                        <label><input type="radio" name="carrera" value="IGA"> IGA</label>
                    </div>
    
                    <input type="text" placeholder="Teléfono">
                    <input type="email" placeholder="Correo electrónico">
    
                    <div class="registro-aviso">
                        <strong>¡AVISO!</strong><br>
                        ¡El registro se mandará a centro de información,<br>posteriormente será notificado al correo electrónico!
                    </div>
    
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </main>
    </div>

    <footer>
        <p>Redes Sociales en:</p>
        <div class="social-icons">
            <img src="../assets/imagenes/facebook.png" alt="Facebook">
            <img src="../assets/imagenes/instagram.png" alt="Instagram">
            <img src="../assets/imagenes/gmail.png" alt="Gmail">
            <img src="../assets/imagenes/sitio-web.png" alt="Sitio Web">
        </div>
    </footer>

    <script>
        function mostrarRegistro() {
            // Ocultar la sección principal
            document.getElementById("main-content").style.display = "none";
            
            // Mostrar la sección de registro
            document.getElementById("registro-section").style.display = "block";
        }
    </script>
<script>
    window.addEventListener('load', () => {
        const headerHeight = document.querySelector('header').offsetHeight;
        const video = document.querySelector('.video-banner video');
        video.style.height = headerHeight + 'px';
    });
</script>

</body>
</html>
