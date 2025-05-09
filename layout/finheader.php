    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../assets/js/plugins.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="../assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script type="text/javascript" src="../assets/libs/choices/choices.min.js"></script>
    <script type="text/javascript" src="../assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <!-- init js -->
    <script src="../assets/js/pages/form-pickers.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- ckeditor -->
    <script src="../assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <!-- init js -->
    <script src="../assets/js/pages/form-editor.init.js"></script>
    <!-- filepond js -->
    <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

    <script src="../assets/js/pages/form-file-upload.init.js"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script src="../assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <script>
        // Crear un objeto Date con la fecha actual
        // y establecer la zona horaria a UTC-5 (hora de Lima, Perú)
        const fecha = new Date(new Date());
        // definir en formato  Lunes 20 de enero 2025
        const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const fechaFormateada = fecha.toLocaleDateString('es-ES', opciones);
  
        if (document.querySelector(".fecha-dia")) {
            // Mostrar la fecha formateada en el elemento con la clase "fecha-dia"
            document.querySelector(".fecha-dia").textContent = fechaFormateada;
        }
        

        let fechaActual = new Date(); // Fecha actual
        const diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        function actualizarCalendario() {
            document.querySelector(".date-day").textContent = diasSemana[fechaActual.getDay()];
            // mostrar el numero del dia con cero delante cuando sea del 1 al 9
            document.querySelector(".date").textContent = String(fechaActual.getDate()).padStart(2, '0');
            // document.querySelector(".date").textContent = fechaActual.getDate();
        }

        function cambiarFecha(dias) {
            fechaActual.setDate(fechaActual.getDate() + dias); // Cambiar la fecha actual
            actualizarCalendario(); // Actualizar el calendario
        }
        // Asignar eventos a los botones de flechas
        document.querySelector(".arrow-left").addEventListener("click", function() {
            cambiarFecha(-1); // Cambiar la fecha hacia atrás
        });

        actualizarCalendario(); // Mostrar la fecha actual al cargar la página
    </script>
</body>

</html>