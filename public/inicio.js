   function mostrarLogin(role) {
            // Ocultar todas las secciones de login
            document.getElementById("login-alumno").style.display = "none";
            document.getElementById("login-docente").style.display = "none";
            
            // Mostrar la sección correspondiente al rol seleccionado
            if (role === 'alumno') {
                document.getElementById("login-alumno").style.display = "block";
            } else if (role === 'docente') {
                document.getElementById("login-docente").style.display = "block";
            }
        }