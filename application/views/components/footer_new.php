<script>
        function toastr_call(type,title,msg,override){
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            } 
            toastr[type](msg, title,override); 
        }
    </script>
    <!-- jQuery-2.2.4 js -->
    <script src="/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/assets/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="/assets/js/active.js"></script>
    <script src="/assets/js/others/toastr.min.js"></script>

    <script src="/assets/min/dropzone.min.js"></script>
    <script src="/assets/min/dropify/js/dropify.min.js"></script>
    <script src="/assets/min/form-fileuploads.init.js"></script>

    <script src="/assets/dist/js/datepicker.min.js"></script>
    <!-- Include English language -->
    <script src="/assets/dist/js/i18n/datepicker.en.js"></script>
    
