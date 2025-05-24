
// Botones escondido de kardex
 
    // Mostrar secciones
function mostrarSeccion(id) {
    const secciones = document.querySelectorAll('[id^="seccion-"]');
    secciones.forEach(seccion => seccion.style.display = 'none');
  
    // Secciones principales
    const seccionMostrar = document.getElementById('seccion-' + id) || document.getElementById(id);
    if (seccionMostrar) {
      seccionMostrar.style.display = 'block';
    } else {
      console.warn('Sección no encontrada:', id);
    }
  }
  
  // Alternar submenús
  function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    if (submenu) {
      submenu.style.display = submenu.style.display === 'none' ? 'block' : 'none';
    }
  }
  
 

  
      
      //Script de becas
    
  function mostrarTaller() {
    // Obtener el div que contiene el contenido del taller
    var contenido = document.getElementById("contenido-taller");
  
    // Mostrar el contenido
    contenido.style.display = "block";
  
    // Opcional: Si quieres ocultar otros contenidos, puedes hacerlo aquí
    // por ejemplo:
    // document.getElementById("otro-contenido").style.display = "none";
  
  }