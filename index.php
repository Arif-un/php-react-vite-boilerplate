<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React App using Vite</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=League+Spartan:wght@600&display=swap" rel="stylesheet">


    <script type="module">
        import RefreshRuntime from 'http://localhost:3000/php-react-vite-boilerplate/src/@react-refresh'
        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => {}
        window.$RefreshSig$ = () => (type) => type
        window.__vite_plugin_react_preamble_installed__ = true
    </script>
    <script type="module" src="http://localhost:3000/php-react-vite-boilerplate/src/@vite/client"></script>
    <script type="module" src="http://localhost:3000/php-react-vite-boilerplate/src/index.jsx"></script>

</head>

<body>
    <div id="root"></div>


</body>

</html>