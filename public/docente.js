
function mostrarSeccion(id) {
  // Oculta todas las secciones con clase 'page-content' y las que estén visibles
  const secciones = document.querySelectorAll('.page-content, #cur, #tablaAlumnos, #fechas');
  secciones.forEach(el => {
    el.classList.add('d-none');
    el.style.display = 'none';
  });

  // Muestra la sección seleccionada
  const seccion = document.getElementById(id);
  if (seccion) {
    seccion.classList.remove('d-none');
    seccion.style.display = 'block';
  }
}

