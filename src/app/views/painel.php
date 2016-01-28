<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang=pt-BR>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1" />
        <title>Primeira Página</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

        <link rel="stylesheet" href="<?php echo base_url('/assets/css'); ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css'); ?>/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css'); ?>/main.css">
    </head>
    <body>
        <-- HTML CODE -->

        <-- END OF HTML CODE -->
            <script src="<?php echo base_url('assets/js')?>/jquery.min.js"></script>
            <script src="<?php echo base_url('assets/js')?>/bootstrap.min.js"></script>
            <script src="<?php echo base_url('assets/js')?>/main.js"></script>
        <-- INTERACTIONS OBJECTS -->
        <div class="modal fade modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="spacer-v-20"></div>
                    <button class="btn btn-default btn-block btn-alert-ok">OK</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <--  END OF INTERACTIONS OBJECTS -->
    </body>
</html>

<?php
/* End of file painel.php */
/* Location ./src/app/views/painel.php */
?>


