<head>
  <base href="../../">
  <meta charset="utf-8">
  <title> EXILEDNONAME | @stack('title') </title>
  <meta name="author" content="EXILEDNONAME">
  <meta name="description" content="Dashboard Application">
  <link rel="shortcut icon" href="/assets/backend/media/logos/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="/assets/backend/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/header/base/light.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/header/menu/light.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/brand/dark.css?v=7.0.5" rel="stylesheet" type="text/css">
  <link href="/assets/backend/css/themes/layout/aside/dark.css?v=7.0.5" rel="stylesheet" type="text/css">
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

  Pusher.logToConsole = true;

  var pusher = new Pusher('748fa3ef274df9e61cd4', { cluster: 'ap1' });
  var channel = pusher.subscribe('my-channel');

  channel.bind('my-event', function(data){
    target = data.id;
    value = data.message;
    document.getElementById('text1').innerHTML = value;
  });
  </script>
  @stack('head')
</head>
