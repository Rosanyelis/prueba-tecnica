    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../assets/js/plugins.js"></script>

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
    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <script>
        let fechaActual = new Date(); // Fecha actual
        const diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        function actualizarCalendario() {
            document.querySelector(".calendar-day").textContent = diasSemana[fechaActual.getDay()];
            document.querySelector(".calendar-date").textContent = fechaActual.getDate();
            document.querySelector(".calendar-month").textContent = `${meses[fechaActual.getMonth()]} ${fechaActual.getFullYear()}`;
        }

        function cambiarFecha(dias) {
            fechaActual.setDate(fechaActual.getDate() + dias);
            actualizarCalendario();
        }

        actualizarCalendario(); // Mostrar la fecha actual al cargar la página
    </script>
</body>

</html>