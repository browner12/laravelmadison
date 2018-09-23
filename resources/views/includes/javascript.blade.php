<!--global vars-->
<script>
    var token = '{{ csrf_token() }}';
</script>

<!--app compiled js-->
<script src="{{ mix('/js/app.js') }}"></script>

<!--scripts stack-->
@stack('scripts')
