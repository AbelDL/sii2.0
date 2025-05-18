
    function mostrarSeccion(id) {
      const secciones = document.querySelectorAll('.seccion');
      secciones.forEach(seccion => seccion.style.display = 'none');
  
      document.getElementById(id).style.display = 'block';
    }
 
  //Script de generarHorario
 
    function mostrarSeccion(id) {
      const secciones = document.querySelectorAll('.seccion');
      secciones.forEach(seccion => seccion.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }
  
  //Script de evaluacion docente
  
    function mostrarSeccion(id) {
      const secciones = document.querySelectorAll('.seccion');
      secciones.forEach(seccion => seccion.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }
  
    function buscarDocente() {
      const input = document.getElementById('busqueda').value.toLowerCase();
      const carrera = document.getElementById('carreraSelect').value;
  
      if (carrera && (input === "102" || input.includes("laura"))) {
        document.getElementById('resultadoDocente').style.display = 'block';
      } else {
        alert("Docente no encontrado o carrera no seleccionada.");
      }
    }
  
    function guardarObservaciones() {
      const observaciones = document.getElementById('observaciones').value;
      alert("Observaciones guardadas: " + observaciones);
    }
 
    //Script de grupo
    
        function buscarGrupo() {
          const carrera = document.getElementById('carreraGrupo').value;
          const semestre = document.getElementById('semestreGrupo').value;
          const tabla = document.getElementById('tablaHorario');
          const resultado = document.getElementById('resultadoGrupo');
      
          tabla.innerHTML = "";
      
          if (!carrera || !semestre) {
            alert("Selecciona carrera y semestre");
            return;
          }
      
          // Simulamos horario ejemplo para 1° semestre
          const horariosEjemplo = [
            { grupo: "A", materia: "Programación I", profesor: "Ing. Luis Pérez", hora: "Lun 08:00-10:00" },
            { grupo: "A", materia: "Matemáticas I", profesor: "Mtra. Ana Gómez", hora: "Mar 10:00-12:00" },
            { grupo: "A", materia: "Taller de Ética", profesor: "Lic. Marta Ruiz", hora: "Mié 12:00-14:00" },
          ];
      
          horariosEjemplo.forEach(item => {
            tabla.innerHTML += `
              <tr>
                <td>${item.grupo}</td>
                <td>${item.materia}</td>
                <td>${item.profesor}</td>
                <td>${item.hora}</td>
              </tr>
            `;
          });
      
          resultado.style.display = "block";
        }
      
       //Script de alumno
       
        function buscarAlumno() {
          const carrera = document.getElementById('carreraAlumno').value;
          const semestre = document.getElementById('semestreAlumno').value;
          const alumno = document.getElementById('nombreAlumno').value.trim();
          const materiasContenedor = document.getElementById('materiasAlumno');
          const reticula = document.getElementById('reticulaAlumno');
      
          materiasContenedor.innerHTML = "";
      
          if (!carrera || !semestre || !alumno) {
            alert("Selecciona carrera, semestre y escribe el nombre del alumno.");
            return;
          }
      
          // Simulación de materias con estado
          const materiasEjemplo = [
            { nombre: "Programación I", estado: "Acreditado" },
            { nombre: "Matemáticas I", estado: "Cursando" },
            { nombre: "Química", estado: "Cursada Sin Acreditar" },
            { nombre: "Ética", estado: "A Curso Especial" },
            { nombre: "Algebra", estado: "Curso Esp. Reprobado" },
            { nombre: "Inglés", estado: "Reprobado" },
            { nombre: "Física", estado: "No Permitida Hasta Avance" }
          ];
      
          const colores = {
            "Acreditado": "green",
            "Cursando": "purple",
            "Cursada Sin Acreditar": "brown",
            "A Curso Especial": "yellow",
            "Curso Esp. Reprobado": "red",
            "Reprobado": "blue",
            "No Permitida Hasta Avance": "gray"
          };
      
          materiasEjemplo.forEach(m => {
            materiasContenedor.innerHTML += `
              <div class="col-md-3 mb-2">
                <div style="background-color:${colores[m.estado]}; color:white; padding:10px; border-radius:5px;">
                  ${m.nombre} <br>
                  <small>${m.estado}</small>
                </div>
              </div>
            `;
          });
      
          reticula.style.display = "block";
        }
     
      
//Script de docente


    function buscarDocente() {
      const nombre = document.getElementById('nombreDocente').value.trim();
      const tabla = document.getElementById('tablaHorario');
      const contenedorHorario = document.getElementById('horarioDocente');
  
      if (!nombre) {
        alert("Por favor, escribe el nombre del docente.");
        return;
      }
  
      // Simulación de horario (esto se puede conectar a base de datos después)
      const horarioEjemplo = [
        { dia: "Lunes", hora: "8:00 - 9:00", grupo: "1A", materia: "Matemáticas I" },
        { dia: "Lunes", hora: "9:00 - 10:00", grupo: "1A", materia: "Matemáticas I" },
        { dia: "Martes", hora: "10:00 - 11:00", grupo: "3B", materia: "Física II" },
        { dia: "Miércoles", hora: "12:00 - 13:00", grupo: "5A", materia: "Programación" },
        { dia: "Jueves", hora: "14:00 - 15:00", grupo: "7C", materia: "Base de Datos" },
        { dia: "Viernes", hora: "8:00 - 10:00", grupo: "1B", materia: "Taller de Ética" }
      ];
  
      tabla.innerHTML = "";
  
      horarioEjemplo.forEach(clase => {
        tabla.innerHTML += `
          <tr>
            <td>${clase.dia}</td>
            <td>${clase.hora}</td>
            <td>${clase.grupo}</td>
            <td>${clase.materia}</td>
          </tr>
        `;
      });
  
      contenedorHorario.style.display = "block";
    }
 