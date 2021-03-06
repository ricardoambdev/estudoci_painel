<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=pt-BR> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=pt-BR> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=pt-BR> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=pt-BR> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1" />
        <title>{title}</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <!-- BEGIN CORE CSS -->
        {coreCSS}
        <!-- END CORE CSS -->

        <!-- BEGIN PLUGINS CSS -->
        {pluginsCSS}
        <!-- END PLUGINS CSS -->

        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
        {headerIncludes}

        <!-- MODERNIZR -->
        {headerJS}
    </head>
    <body class="{bodyClass}">
    <span id="configs" data-url="<?php echo base_url(); ?>"></span>