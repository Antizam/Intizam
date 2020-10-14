<script>
    $(document).ready(function() {
        setInterval(function() {
            $('#res').load('UserController@autoscreen');
        },1000);
    });
</script>