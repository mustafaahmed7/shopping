
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendor/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{ asset('dist/js/sb-admin-2.js')}}"></script>
<script src="{{ asset('admin-dist/js/js.js')}}"></script>
<script src="{{ asset('js/ajax/admin.js')}}"></script>
<script src="{{ asset('js/ajax/mail.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>
</html>