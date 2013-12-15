<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <style type='text/css'>
            html, body, #galleria {
                height: 100%;
                width: 100%;
                margin: 0px;
                padding: 0px;
            }
        </style>
        <script type='text/javascript'>
            function close_lightbox_parent() {
                if (top.nplModalRouted) {
                    top.nplModalRouted.close_modal();
                }
            }
        </script>
        <?php wp_print_styles(); ?>
        <?php wp_print_head_scripts(); ?>
    </head>
    <body onUnload="close_lightbox_parent();">
        <!-- tabindex is necessary for some browsers to focus #galleria after loading -->
        <div id='galleria' tabindex='1'></div>
        <script type='text/javascript'>
            (function($) {
                window.lightbox_settings = <?php echo json_encode($lightbox_settings); ?>;
                window.Galleria_Instance.create('<?php echo $displayed_gallery_id; ?>');
            })(jQuery);
        </script>
    </body>
</html>
