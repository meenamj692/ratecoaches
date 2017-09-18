

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url() ?>assets/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/holder.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    var logID = 'log',
            log = $('<div id="' + logID + '"></div>');
    $('body').append(log);
    $('[type*="radio"]').change(function () {
        var me = $(this);
        log.html(me.attr('value'));
    });
</script>
</body>
</html>