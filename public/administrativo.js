 function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'none' ? 'flex' : 'none';
  }
   function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'flex' : 'none';
  }

  function mostrarSeccion(seccion) {
    // Ocultamos todos los formularios
    document.getElementById('altas').style.display = 'none';
    // Puedes agregar otros formularios aquí si tienes más secciones

    // Mostramos el formulario correspondiente
    if (seccion === 'altas') {
      document.getElementById('altas').style.display = 'block';
    }
  }



   function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    submenu.style.display = submenu.style.display === 'none' ? 'flex' : 'none';
  }

  function mostrarSeccion(seccion) {
    // Ocultar todas las secciones
    document.getElementById('altas').style.display = 'none';
    document.getElementById('bajas').style.display = 'none';
    document.getElementById('adeudo').style.display = 'none';
    document.getElementById('quitar').style.display = 'none';
    document.getElementById('c').style.display = 'none';
    document.getElementById('cal').style.display = 'none';
     document.getElementById('car').style.display = 'none';
      document.getElementById('ca').style.display = 'none';
       document.getElementById('co').style.display = 'none';
       document.getElementById('p').style.display = 'none';
       document.getElementById('s').style.display = 'none';
             document.getElementById('resi').style.display = 'none';

    // Mostrar la sección correspondiente
    if (seccion === 'altas') {
      document.getElementById('altas').style.display = 'block';
    } else if (seccion === 'bajas') {
      document.getElementById('bajas').style.display = 'block';
    } else if (seccion === 'adeudo') {
      document.getElementById('adeudo').style.display = 'block';
    }else if (seccion === 'quitar') {
      document.getElementById('quitar').style.display = 'block';
    }else if (seccion === 'c') {
      document.getElementById('c').style.display = 'block';
    }else if (seccion === 'cal') {
      document.getElementById('cal').style.display = 'block';
    }else if (seccion === 'car') {
      document.getElementById('car').style.display = 'block';
    }else if (seccion === 'ca') {
      document.getElementById('ca').style.display = 'block';
    }else if (seccion === 'co') {
      document.getElementById('co').style.display = 'block';
    }else if (seccion === 'p') {
      document.getElementById('p').style.display = 'block';
    }
    else if (seccion === 's') {
      document.getElementById('s').style.display = 'block';
    } else if (seccion === 'resi') {
      document.getElementById('resi').style.display = 'block';
    }
    
  }

   function buscarAlumno() {
    const matricula = document.getElementById('matricula-baja').value;

    if (matricula.trim() === '') return;

    fetch(`/buscar-alumno/${matricula}`)
      .then(response => {
        if (!response.ok) {
          throw new Error('No se encontró el alumno');
        }
        return response.json();
      })
      .then(data => {
        document.getElementById('alumno-id').textContent = data.id;
        document.getElementById('alumno-nombre').textContent = data.nombre;
        document.getElementById('alumno-carrera').textContent = data.carrera;
        document.getElementById('alumno-semestre').textContent = data.semestre;
        document.getElementById('datos-alumno').style.display = 'block';
      })
      .catch(error => {
        document.getElementById('datos-alumno').style.display = 'none';
        alert('Alumno no encontrado');
      });
  }

  const adeudos = [
    { id: 1, nombre: "Juan Pérez", matricula: 123456, concepto: "Colegiatura", monto: 2500, fecha: "2025-04-10" },
    { id: 2, nombre: "Ana López", matricula: 654321, concepto: "Biblioteca", monto: 150, fecha: "2025-04-20" },
    { id: 3, nombre: "Luis Ramírez", matricula: 789012, concepto: "Colegiatura", monto: 2500, fecha: "2025-04-15" }
  ];

  function renderizarTabla() {
    const tbody = document.getElementById("tablaAdeudos");
    tbody.innerHTML = "";

    adeudos.forEach(adeudo => {
      const fila = document.createElement("tr");
      fila.innerHTML = `
        <td>${adeudo.id}</td>
        <td>${adeudo.nombre}</td>
        <td>${adeudo.matricula}</td>
        <td>${adeudo.concepto}</td>
        <td>$${adeudo.monto.toFixed(2)}</td>
        <td>${adeudo.fecha}</td>
        <td><button class="btn btn-danger btn-sm" onclick="quitarAdeudo(${adeudo.id})">Quitar</button></td>
      `;
      tbody.appendChild(fila);
    });
  }

  function quitarAdeudo(id) {
    const index = adeudos.findIndex(a => a.id === id);
    if (index !== -1) {
      if (confirm("¿Estás seguro de quitar este adeudo?")) {
        adeudos.splice(index, 1);
        renderizarTabla();
        alert("Adeudo eliminado con éxito.");
      }
    }
  }

  renderizarTabla();
    const alumnosMaterias = [
    {
      matricula: 123456,
      nombre: "Juan Pérez",
      materias: [
        { materia: "Matemáticas", profesor: "M. Gómez", creditos: 6, semestre: 3, promedio: 75, avance: 80 },
        { materia: "Programación", profesor: "L. Ramírez", creditos: 8, semestre: 3, promedio: 85, avance: 90 },
      ]
    },
    {
      matricula: 654321,
      nombre: "Ana López",
      materias: [
        { materia: "Química", profesor: "P. Torres", creditos: 7, semestre: 2, promedio: 88, avance: 75 },
        { materia: "Biología", profesor: "R. Mendoza", creditos: 6, semestre: 2, promedio: 90, avance: 95 },
      ]
    },
    {
      matricula: 789012,
      nombre: "Luis Ramírez",
      materias: [
        { materia: "Contabilidad", profesor: "J. Martínez", creditos: 5, semestre: 4, promedio: 70, avance: 60 },
        { materia: "Economía", profesor: "C. Sánchez", creditos: 6, semestre: 4, promedio: 80, avance: 85 },
      ]
    },
  ];

  let alumnoActual = null;

  function buscarMaterias() {
    const matriculaInput = document.getElementById("matriculaConsulta").value.trim();
    const tabla = document.getElementById("tablaMaterias");
    const tbody = document.getElementById("tbodyMaterias");
    const mensajeNoDatos = document.getElementById("mensajeNoDatos");
    const btnGuardar = document.getElementById("btnGuardar");

    tbody.innerHTML = "";
    mensajeNoDatos.style.display = "none";
    btnGuardar.style.display = "none";

    if (!matriculaInput) {
      alert("Por favor ingresa una matrícula.");
      return;
    }

    const matricula = Number(matriculaInput);
    alumnoActual = alumnosMaterias.find(a => a.matricula === matricula);

    if (!alumnoActual) {
      tabla.style.display = "none";
      mensajeNoDatos.style.display = "block";
      mensajeNoDatos.textContent = "No se encontró alumno con esa matrícula.";
      return;
    }

    if (alumnoActual.materias.length === 0) {
      tabla.style.display = "none";
      mensajeNoDatos.style.display = "block";
      mensajeNoDatos.textContent = "Este alumno no tiene materias asignadas.";
      return;
    }

    alumnoActual.materias.forEach((materia, index) => {
      const fila = document.createElement("tr");
      fila.innerHTML = `
        <td>${alumnoActual.matricula}</td>
        <td>${alumnoActual.nombre}</td>
        <td>${materia.materia}</td>
        <td>${materia.profesor}</td>
        <td>${materia.creditos}</td>
        <td>${materia.semestre}°</td>
        <td><input type="number" min="0" max="100" value="${materia.promedio}" id="promedio-${index}" class="form-control" style="width: 80px;"></td>
        <td><input type="number" min="0" max="100" value="${materia.avance}" id="avance-${index}" class="form-control" style="width: 80px;"></td>
      `;
      tbody.appendChild(fila);
    });

    tabla.style.display = "table";
    btnGuardar.style.display = "inline-block";
  }

  function guardarCambios() {
    if (!alumnoActual) {
      alert("No hay alumno seleccionado.");
      return;
    }

    alumnoActual.materias.forEach((materia, index) => {
      const nuevoPromedio = Number(document.getElementById(`promedio-${index}`).value);
      const nuevoAvance = Number(document.getElementById(`avance-${index}`).value);

      // Validar porcentaje entre 0 y 100
      if (nuevoPromedio < 0 || nuevoPromedio > 100 || isNaN(nuevoPromedio)) {
        alert(`Porcentaje de promedio inválido en la materia ${materia.materia}`);
        return;
      }
      if (nuevoAvance < 0 || nuevoAvance > 100 || isNaN(nuevoAvance)) {
        alert(`Porcentaje de avance inválido en la materia ${materia.materia}`);
        return;
      }

      // Actualizar datos
      materia.promedio = nuevoPromedio;
      materia.avance = nuevoAvance;
    });

    alert("Cambios guardados correctamente.");
  }

  //servicio social
  function buscarAlumno() {
    const matricula = document.getElementById("matricula").value.trim();
    if(matricula === "") {
      alert("Por favor ingresa una matrícula.");
      return;
    }

    const alumno = baseAlumnos[matricula];
    if (!alumno) {
      alert("Alumno no encontrado. Verifica la matrícula.");
      return;
    }

    // Mostrar datos en el formulario
    document.getElementById("nombreAlumno").textContent = alumno.nombre;
    document.getElementById("telefonoAlumno").textContent = alumno.telefono;
    document.getElementById("controlAlumno").textContent = alumno.control;
    document.getElementById("sexoAlumno").textContent = alumno.sexo;
    document.getElementById("domicilioAlumno").textContent = alumno.domicilio;
    document.getElementById("periodoAlumno").textContent = alumno.periodo;
    document.getElementById("carreraAlumno").textContent = alumno.carrera;
    document.getElementById("semestreAlumno").textContent = alumno.semestre;

    // Mostrar el formulario y ocultar la búsqueda para que el usuario no busque otro hasta modificar
    document.getElementById("formularioAlumno").style.display = "block";
  }
   // Ejemplo sencillo: base de datos simulada  residencias
  const alumnos = {
    "211070009": {
      nombre: "ROSAS RODRIGUEZ MARCOS ALDAIR",
      telefono: "5558620154",
      sexo: "Masculino",
      domicilio: "HERMENEGILDO GALIANA #18 SAN SALVADOR CUAUHTENCO CDMX",
      noControl: "211070009",
      matricula: "211070009",
      periodo: "ENERO-JUNIO/2025",
      semestre: "8",
      carrera: "INGENIERÍA EN SISTEMAS COMPUTACIONALES"
    },
    // Puedes agregar más alumnos aquí...
  };

  function buscarAlumno() {
    const matricula = document.getElementById('matriculaBusqueda').value.trim();
    if (matricula in alumnos) {
      const datos = alumnos[matricula];
      // Rellenar el formulario con los datos
      document.getElementById('nombre').value = datos.nombre;
      document.getElementById('telefono').value = datos.telefono;
      document.getElementById('sexo').value = datos.sexo;
      document.getElementById('domicilio').value = datos.domicilio;
      document.getElementById('noControl').value = datos.noControl;
      document.getElementById('matricula').value = datos.matricula;
      document.getElementById('periodo').value = datos.periodo;
      document.getElementById('semestre').value = datos.semestre;
      document.getElementById('carrera').value = datos.carrera;

      // Mostrar el formulario
      document.getElementById('formResidencias').style.display = 'block';
    } else {
      alert("Alumno no encontrado");
      // Ocultar el formulario si no se encuentra el alumno
      document.getElementById('formResidencias').style.display = 'none';
    }
  }