<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UF4 Abraham</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: grey;
        }

        .class_nav {
            background-color: black;
            width: 100%;
            min-height: 10%;
            color: white;
        }

        article {
            background-color: white;
            width: 100%;
            min-height: 10%;
            color: black;
        }

        /* los articulo par estara alineado a la derecha y los impares a las izquierda */
        article:nth-child(even) {
            text-align: right;
        }

        div {
            padding: 10px;
            align-content: left;
            background-color: grey;

        }

        .title {
            /* mayusculas */
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <nav class="class_nav">UF4 Abraham</nav>
    <script>
        fetch('http://127.0.0.1:8000/api/help', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(function(response) {
            return response.json();
        }).then(function(myJson) {
            $('#code1_res').text(JSON.stringify(myJson));
            $('#code1_pet').text(" fetch('http://127.0.0.1:8000/api/help', {     method: 'GET',     headers: {         'Content-Type': 'application/json'     }) }) .then(function(response) {     return response.json(); }) .then(function(myJson) { $('#code1_res').text(JSON.stringify(myJson)); });");

        });
        fetch('http://127.0.0.1:8000/api/location/41.3399628/2.1210822', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(function(response) {
            return response.json();
        }).then(function(myJson) {
            $('#code2_res').text(JSON.stringify(myJson));
            $('#code2_pet').text(" fetch('http://127.0.0.1:8000/api/location/41.3399628/2.1210822', {     method: 'GET',     headers: {         'Content-Type': 'application/json'     }) }) .then(function(response) {     return response.json(); }) .then(function(myJson) { $('#code3_res').text(JSON.stringify(myJson)); });");

        });
        fetch('http://127.0.0.1:8000/api/filter', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    "id_cam_seguretat": 417105
                })
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(myJson) {
                $('#code3_res').text(JSON.stringify(myJson));
                $('#code3_pet').text(" fetch('http://127.0.0.1:8000/api/filter', {     method: 'POST',     headers: {         'Content-Type': 'application/json'     },     body: JSON.stringify({         'id_cam_seguretat': 417105     }) }) .then(function(response) {     return response.json(); }) .then(function(myJson) { $('#code3_res').text(JSON.stringify(myJson)); });");

            });
        fetch('http://127.0.0.1:8000/api/insert', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "id_cam_seguretat": 1,
                "codi_cam_seguretat": "CIM Ronda",
                "tipus_cam_seguretat": "Càmera mòbil",
                "num_cam_seguretat": null,
                "codi_suport": "Mastil",
                "codi_districte": 3,
                "nom_districte": " Sants-Montjuïc",
                "codi_barri": 12,
                "nom_barri": "la Marina del Prat Vermell",
                "X_ETRS89": 426462403,
                "Y_ETRS89": 4576869858,
                "longitud": 2.1210822,
                "latitud": 41.3399628,
                "data_alta": "2000-01-01"
            })
        }).then(function(response) {
            return response.json();
        }).then(function(myJson) {
            $('#code4_res').text(JSON.stringify(myJson));
            $('#code4_pet').text('fetch("http://127.0.0.1:8000/api/insert", {method: "POST",headers: {    "Content-Type": "application/json"},body: JSON.stringify({    "id_cam_seguretat": 1,    "codi_cam_seguretat": "CIM Ronda",    "tipus_cam_seguretat": "Càmera mòbil",    "num_cam_seguretat": null,    "codi_suport": "Mastil",    "codi_districte": 3,    "nom_districte": " Sants-Montjuïc",    "codi_barri": 12,    "nom_barri": "la Marina del Prat Vermell",    "X_ETRS89": 426462403,    "Y_ETRS89": 4576869858,    "longitud": 2.1210822,    "latitud": 41.3399628,    "data_alta": "2000-01-01"})});');
        });


        fetch('http://127.0.0.1:8000/api/ubicacio_exacta/417105', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(function(response) {
            return response.json();
        }).then(function(myJson) {
            $('#code7_res').text(JSON.stringify(myJson));
            $('#code7_pet').text(" fetch('http://127.0.0.1:8000/api/ubicacio_exacta/417105', {     method: 'GET',     headers: {         'Content-Type': 'application/json'     }) }) .then(function(response) {     return response.json(); }) .then(function(myJson) { $('#code3_res').text(JSON.stringify(myJson)); });");

        });
    </script>

    <section>

        <?php
        $json_array = '[
                        {"url":"/api/help",
                        "body":"PEticion Get, no contiene body",
                        "method":"GET",
                        "response":"Nos devuelve un JSON con la informacion de las peticiones que podemos hacer",
                        "example_petition":"",
                        "example_response":"",
                        "id":"1",
                        "title":"Help"} ,
                        {"url":"/api/location/{lat}/{lon}",
                        "body":"En este caso la peticion es get y se envia la latitud y longitud de la camara que queremos buscar",
                        "method":"GET",
                        "response":"la respuesta es un JSON con la direccion de la camara que se ha buscado",
                        "example_petition":"",
                        "example_response":"",
                        "id":"2",
                        "title":"Search camera or cameras by location"},
                        {"url":"/api/filter",
                        "body":"Se introduce los parametros en formato JSON para poder filtrar, por ejemplo; {\"id_cam_seguretat\": 1}",
                        "method":"POST",
                        "response":"La respuesta es un JSON con los datos de la camara o camaras que coinciden con los parametros introducidos",
                        "example_petition":"",
                        "example_response":"",
                        "id":"3",
                        "title":"Filter camera or cameras"},
                        {"url":"/api/insert",
                        "body":"En este caso lo que se va a enviar es la informacion de la camara que se quiere insertar en formato JSON",
                        "method":"POST",
                        "response":"",
                        "example_petition":"",
                        "example_response":"",
                        "id":"4",
                        "title":"Insert camera or cameras"},
                        {"url":"/api/update",
                        "body":"",
                        "method":"POST",
                        "response":"",
                        "example_petition":"",
                        "example_response":"",
                        "id":"5",
                        "title":"Update camera or cameras"},
                        {"url":"/api/destroy",
                        "body":"",
                        "method":"POST",
                        "response":"",
                        "example_petition":"",
                        "example_response":"",
                        "id":"6",
                        "title":"Delete camera or cameras"},
                        {"url":"/ubicacio_exacta/{id_cam_seguretat}",
                        "body":"Petición get, no contiene body",
                        "method":"GET",
                        "response":"Nos dice la ubicacion exacta de la camara que se ha buscado segun su id",
                        "example_petition":"",
                        "example_response":"",
                        "id":"7",
                        "title":"Ubicacion excta cameras"}
                         ]';

        $php_array = array();
        $json_objects = json_decode($json_array);

        foreach ($json_objects as $object) {
            array_push($php_array, $object);
        }

        foreach ($php_array as $object) {
            echo "<article>";
            echo "<div>";
            echo "<h3 class='title'>" . $object->title . "</h3>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "URL";
            echo "</label><br>";
            echo "<span id='span" . $object->id . "' name='span" . $object->id . "'>  " . $object->url . "</span>";
            echo "</h4>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "BODY";
            echo "</label><br>";
            echo "<code id='span" . $object->id . "' name='span" . $object->id . "'> " . $object->body . "</code>";
            echo "</h4>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "method";
            echo "</label><br>";
            echo "<span id='span" . $object->id . "' name='span" . $object->id . "'> " . $object->method . "</span>";
            echo "</h4>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "response";
            echo "</label><br>";
            echo "<span id='span" . $object->id . "' name='span" . $object->id . "'> " . $object->response . "</span>";
            echo "</h4>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "exaple petition";
            echo "</label><br>";
            echo "<span id='span" . $object->id . "' name='span" . $object->id . "'><br> ";
            echo "<code id='code" . $object->id . "_pet'>";
            echo $object->example_petition;
            echo "</code>";
            echo "</span>";
            echo "</h4>";
            echo "<h4>";
            echo "<label class='title' for='url1'>";
            echo "exaple response";
            echo "</label>";
            echo "<span id='span" . $object->id . "' name='span" . $object->id . "'><br> ";
            echo "<code id='code" . $object->id . "_res' lang='json'>";
            echo $object->example_response;
            echo "</code>";
            echo "</span>";
            echo "</h4>";
            echo "</div>";
            echo "</article>";
        }

        ?>


    </section>
</body>

</html>