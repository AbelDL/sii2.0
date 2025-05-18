
//Registro...........................................................................
document.addEventListener("DOMContentLoaded", () => {
  const tipoPersona = document.getElementById("tipoPersona");
  const selectCarreraDepto = document.getElementById("select-carrera-docente");
  const carreraDepto = document.getElementById("carreraDepto");

  const carrerasEstudiante = ["IGE", "ISC", "IBQ", "IGA"];
  const departamentosDocente = [
    "Sistemas y Computación",
    "Ingeniería Bioquímica",
    "Ingeniería de Gestión",
    "Alimentos",
  ];

  tipoPersona.addEventListener("change", () => {
    const valor = tipoPersona.value;
    carreraDepto.innerHTML = ""; // Limpia opciones

    if (valor === "estudiante") {
      carrerasEstudiante.forEach((carrera) => {
        const option = document.createElement("option");
        option.value = carrera;
        option.text = carrera;
        carreraDepto.appendChild(option);
      });
      selectCarreraDepto.style.display = "block";
    } else if (valor === "docente") {
      departamentosDocente.forEach((dep) => {
        const option = document.createElement("option");
        option.value = dep;
        option.text = dep;
        carreraDepto.appendChild(option);
      });
      selectCarreraDepto.style.display = "block";
    } else {
      selectCarreraDepto.style.display = "none";
    }
  });
});

function mostrarSeccion(id) {
  document.getElementById("formulario").style.display = id === "formulario" ? "block" : "none";
}
//Historial...........................................................................
  
        function mostrarSeccion(id) {
          document.getElementById("formulario").style.display = "none";
          document.getElementById("historial").style.display = "none";
          document.getElementById("tabs").style.display = "none";
          document.getElementById(id).style.display = "block";
        }
    
        function actualizarCarreras() {
          const tipo = document.getElementById("tipo_persona").value;
          const carreraSelect = document.getElementById("carrera_departamento");
          carreraSelect.innerHTML = "";
    
          if (tipo === "alumno") {
            ["IGE", "ISC", "IBQ", "IGA"].forEach(op => {
              let opt = document.createElement("option");
              opt.value = op;
              opt.text = op;
              carreraSelect.add(opt);
            });
          } else if (tipo === "docente") {
            ["Sistemas", "Gestión", "Bioquímica", "Alimento"].forEach(op => {
              let opt = document.createElement("option");
              opt.value = op;
              opt.text = op;
              carreraSelect.add(opt);
            });
          } else {
            let opt = document.createElement("option");
            opt.text = "Selecciona primero el tipo de persona";
            carreraSelect.add(opt);
          }
        }
    
        function mostrarHistorial(e) {
          e.preventDefault();
          const tipo = document.getElementById("tipo_persona_historial").value;
          const id = document.getElementById("id_persona").value;
          const resultado = document.getElementById("resultado");
    
          if (!tipo || !id) {
            resultado.innerHTML = "<div class='alert alert-warning'>Por favor, completa todos los campos.</div>";
            return;
          }
    
          if (tipo === "alumno") {
            resultado.innerHTML = `
              <h5>Datos Generales</h5>
              <p><strong>Nombre:</strong> Juan Pérez</p>
              <p><strong>Matrícula/ID:</strong> ${id}</p>
              <p><strong>Carrera/Departamento:</strong> ISC</p>
              <p><strong>Semestre Actual:</strong> 4</p>
              <h5 class="mt-4">Materias Cursadas</h5>
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr><th>Clave</th><th>Materia</th><th>Calificación</th><th>Periodo</th></tr>
                </thead>
                <tbody>
                  <tr><td>ISC-101</td><td>Programación Básica</td><td>95</td><td>Enero - Junio 2023</td></tr>
                  <tr><td>ISC-102</td><td>Matemáticas Discretas</td><td>88</td><td>Enero - Junio 2023</td></tr>
                  <tr><td>ISC-201</td><td>Estructura de Datos</td><td>90</td><td>Agosto - Diciembre 2023</td></tr>
                </tbody>
              </table>`;
          } else {
            resultado.innerHTML = `
              <h5>Datos Generales</h5>
              <p><strong>Nombre:</strong> Dra. María López</p>
              <p><strong>ID:</strong> ${id}</p>
              <p><strong>Departamento:</strong> Sistemas</p>
              <p><strong>Especialidad:</strong> Inteligencia Artificial</p>
              <h5 class="mt-4">Materias Impartidas</h5>
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr><th>Clave</th><th>Materia</th><th>Grupo</th><th>Periodo</th></tr>
                </thead>
                <tbody>
                  <tr><td>ISC-301</td><td>IA Aplicada</td><td>3A</td><td>Agosto - Diciembre 2023</td></tr>
                  <tr><td>ISC-202</td><td>Base de Datos</td><td>2B</td><td>Enero - Junio 2023</td></tr>
                </tbody>
              </table>`;
          }
        }