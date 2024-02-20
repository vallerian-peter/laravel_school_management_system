
</body>
        {{-- index - js --}}
    <script src="{{ asset('js\index.js') }}"></script>
        <!-- jQuery -->
    <script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
          setTimeout(() => {
              $('.alert-notification').fadeOut();
          }, 5000);
        });
      </script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
        {{-- bootstrap js --}}
    <script src="{{ asset('bootstrap-5.3.2/bootstrap-5.3.2/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.2/bootstrap-5.3.2/dist/js/bootstrap.bundle.js') }}"></script>

</html>