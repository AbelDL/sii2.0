 function mostrarSeccion(id) {
    const secciones = ['recibo', 'notificacion', 'alumnos-section', 'pag'];
    secciones.forEach(function (sec) {
      const elemento = document.getElementById(sec);
      if (elemento) elemento.style.display = 'none';
    });

    const reciboGenerado = document.getElementById('gene');
    if (reciboGenerado) {
      reciboGenerado.classList.add('d-none');
    }

    const activa = document.getElementById(id);
    if (activa) activa.style.display = 'block';
  }

  function generarRecibo(idRecibo) {
    const nombre = document.getElementById('nombre').value.trim();
    const concepto = document.getElementById('concepto').value.trim();
    const monto = document.getElementById('monto').value.trim();

    if (!nombre || !concepto || !monto) {
      alert('Por favor completa todos los campos.');
      return;
    }

    const fechaActual = new Date().toLocaleDateString('es-MX', {
      day: '2-digit',
      month: 'long',
      year: 'numeric'
    });

    document.getElementById('recibo-nombre').textContent = nombre;
    document.getElementById('recibo-concepto').textContent = concepto;
    document.getElementById('recibo-monto').textContent = parseFloat(monto).toFixed(2);
    document.getElementById('recibo-fecha').textContent = fechaActual;

    document.getElementById(idRecibo).classList.remove('d-none');
  }

  function enviarCorreo() {
    const correo = document.getElementById('correo').value;
    if (correo) {
      alert('Correo enviado a: ' + correo);
    } else {
      alert('Por favor ingresa un correo válido.');
    }
  }

  function enviarCorreoNotificacion() {
    const correo = document.getElementById('correoNotificacion').value;
    if (correo) {
      alert('Notificación enviada a: ' + correo);
    } else {
      alert('Por favor ingresa un correo válido.');
    }
  }

  function buscarAlumno() {
    const id = document.getElementById('buscarId').value;
    if (id === '211070009') {
      document.getElementById('infoAlumno').style.display = 'block';
      document.getElementById('nombre').value = 'Marcos Aldair';
      document.getElementById('apellidoP').value = 'Rosas';
      document.getElementById('apellidoM').value = 'Rodríguez';
      document.getElementById('numControl').value = '211070009';
      document.getElementById('telefono').value = '5533445566';
      document.getElementById('direccion').value = 'Av. Siempre Viva #123';
      document.getElementById('nss').value = '12345678901';
      document.getElementById('fechaInscripcion').value = '2021-08-15';
      document.getElementById('adeudo').value = 'Sí - Reinscripción 2024';
      document.getElementById('fechaRegistro').value = '2024-05-17';
    } else {
      alert('Alumno no encontrado.');
      document.getElementById('infoAlumno').style.display = 'none';
    }
  }

  function generarLineaCaptura() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let clave = '';
    for (let i = 0; i < 18; i++) {
      clave += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return clave;
  }

  function generarPago() {
    const correo = document.getElementById('correoPago').value;
    const clave = generarLineaCaptura();
    document.getElementById('lineaCaptura').textContent = clave;
    document.getElementById('correoConfirmado').textContent = correo;
    document.getElementById('resultadoPago').style.display = 'block';
    console.log(`Enviando a ${correo} la clave: ${clave}`);
  }