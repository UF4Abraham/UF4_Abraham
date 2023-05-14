<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/3653968724.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <title>API Càmeres Seguretat</title>
</head>
<body>
    <div class="container">

        <h1 class="fw-bold mt-5">API Càmeres Seguretat</h1>
        
        <div class="row mt-5">
            <div class="col">

                <div class="info">
                    
                    Obtenim tota la informació de cadascuna de les càmeres.
                    <p>
                        <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L18">Veure codi del CameresController@cameres_seguretat</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row cameres_seguretat_get mt-5">

            <div class="col-8">
                <div class="div_cameres_seguretat_get">
                    <img class="img-fluid" src="images/imatge_1.png" alt="">
                </div>
                
                <div class="div_cameres_seguretat_get_function mt-4">
                    <img class="img-fluid" src="images/imatge_1_function.png" alt="">
                </div>
                
            </div>
            <div class="col-4">
                <div class="call_exemple_cameres_seguretat_get">
                    <strong class="text-danger">GET </strong>http://localhost:8000/api/cameres_seguretat
                </div>
                <div class="titol_delete mt-4"><h1>RESPONSE</h1></div>

                <div class="div_cameres_seguretat_get_response mt-4">
                    <img class="img-fluid" src="images/imatge_1_response.png" alt="" width="380px">
                </div>
            </div>

        </div>

        <div class="row mb-5 espai">
            <div class="col">
                <div class="info">
                    Insereix dades a la base de dades. Les dades JSON han de contenir totes les columnes de la taula i els paràmetres han de coincidir amb els noms de les columnes..
                    <p>
                        <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L71">Veure codi del CameresController@cameres_seguretat[POST]</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row cameres_seguretat_post">

            <div class="col-7">
                <div class="div_cameres_seguretat_post">
                    <img class="img-fluid" src="images/imatge_2.png" alt="">
                </div>
                <div class="div_cameres_seguretat_post_function mt-5">
                    <img class="img-fluid" src="images/imatge_2_function.png" alt="" >
                </div>
            </div>

            <div class="col-5">
                <div class="call_exemple_cameres_seguretat_post">
                    <strong class="text-danger">POST </strong>http://localhost:8000/api/cameres_seguretat
                </div>

                <div class="div_cameres_seguretat_get_response mt-4">
                    <img class="img-fluid" src="images/imatge_3_response.png" alt="" width="300px">
                </div>

                <div class="titol_delete mt-4"><h1>RESPONSE</h1></div>


                <div class="div_cameres_seguretat_post_response_1 mt-4">
                    <img class="img-fluid" src="images/imatge_2_response_1.png" alt="" width="180px">
                </div>

                <div class="div_cameres_seguretat_post_response_2 mt-4">
                    <img class="img-fluid" src="images/imatge_2_response_2.png" alt="" width="350px">
                </div>

                <div class="div_cameres_seguretat_post_response_3 mt-4">
                    <img class="img-fluid" src="images/imatge_2_response_3.png" alt="" width="340px">
                </div>
            </div>
        </div>

        <div class="row mb-5 espai">
            <div class="col">
                <div class="info">
                    Obtenim tota la informació de la càmera amb l'ID que estem filtrant.
                    <p>
                        <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L135">Veure codi del CameresController@cameres_seguretat</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row cameres_seguretat_get_id">
            <div class="col-7">
                <div class="div_cameres_seguretat_get_id">
                    <img class="img-fluid" src="images/imatge_3.png" alt="" width="680px">
                </div>

                <div class="div_cameres_seguretat_get_id_function mt-4">
                    <img class="img-fluid" src="images/imatge_3_function.png" alt="" width="400px">
                </div>

            </div>

            <div class="col-5">
                <div class="call_exemple_cameres_seguretat_get_id">
                    <strong class="text-danger">GET </strong>http://localhost:8000/api/cameres_seguretat/417365
                </div>

                <div class="titol_delete mt-5"><h1>RESPONSE</h1></div>


                <div class="div_cameres_seguretat_get_response mt-4">
                    <img class="img-fluid" src="images/imatge_3_response.png" alt="" width="390px">
                </div>
            </div>
        </div>

        
        
        <div class="row cameres_seguretat_put_id">
            
            <div class="row mb-5 espai">
                <div class="col">
                    <div class="info">
                        PUT/PATCH: Actualitzem la informació de la càmera específica identificada amb l'ID que estem filtrant.
                        <p>
                            <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L161">Veure codi del CameresController@cameres_seguretat[PUT/PATCH]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="div_cameres_seguretat_put_id">
                        <img class="img-fluid" src="images/imatge_4.png" alt="" width="650px">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-8">
    
                    <div class="div_cameres_seguretat_put_id_function mt-5">
                        <img class="img-fluid" src="images/imatge_4_function.png" alt="" width="535px">
                    </div>
    
                </div>
    
                <div class="col-4">
                    <div class="call_exemple_cameres_seguretat_put_id mt-5">
                        <strong class="text-danger">PUT/PATCH </strong>http://localhost:8000/api/cameres_seguretat/33333
                    </div>
    
                    <div class="div_cameres_seguretat_put_id_call mt-4">
                        <img class="img-fluid" src="images/imatge_4_call_put.png" alt="">
                    </div>
                    <div class="titol_update mt-5"><h1>RESPONSE</h1></div>
    
                    <div class="div_cameres_seguretat_put_id_response_1 mt-4">
                        <img class="img-fluid" src="images/imatge_2_response_1.png" alt="">
                    </div>
    
                    <div class="div_cameres_seguretat_put_id_response_2 mt-4">
                        <img class="img-fluid" src="images/imatge_4_response_2.png" alt="">
                    </div>
                </div>
            </div>

        </div>


        
        <div class="row cameres_seguretat_delete_id">

            <div class="row mb-5 espai">
                <div class="col">
                    <div class="info">
                        DELETE: Esborrem la informació de la càmera específica identificada amb l'ID que estem filtrant.
                        <p>
                            <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L195">Veure codi del CameresController@cameres_seguretat[DELETE]</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="div_cameres_seguretat_delete_id">
                        <img class="img-fluid" src="images/imatge_5.png" alt="" width="650px">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-7">
    
                    <div class="div_cameres_seguretat_delete_id_function mt-5">
                        <img class="img-fluid" src="images/imatge_5_function.png" alt=""  width="665px">
                    </div>
                </div>
    
                <div class="col-5">
                    <div class="call_exemple_cameres_seguretat_delete_id mt-5">
                        <strong class="text-danger">DELETE </strong>http://localhost:8000/api/cameres_seguretat/33333
                    </div>
    
                    <div class="titol_delete mt-4"><h1>RESPONSE</h1></div>
    
                    <div class="div_cameres_seguretat_delete_id_response_1 mt-4">
                        <img class="img-fluid" src="images/imatge_2_response_1.png" alt="">
                    </div>
    
                    <div class="div_cameres_seguretat_delete_id_response_2 mt-4">
                        <img class="img-fluid" src="images/imatge_4_response_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-5 espai">
            <div class="col">
                <div class="info">
                    Filtra els registres de la taula càmeres segons els paràmetres proporcionats a la sol·licitud.
                    Els paràmetres s'han d'enviar en format JSON i han de coincidir amb els noms de les columnes de la taula.
                    Torna una llista de resultats que coincideixen amb els criteris de filtratge.
                    <p>
                        <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L105">Veure codi del CameresController@filter</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row filter">
            <div class="col-8">
                <div class="div_filter">
                    <img class="img-fluid" src="images/imatge_6.png" alt="">
                </div>

                <div class="div_filter_function mt-5">
                    <img class="img-fluid" src="images/imatge_6_function.png" alt="">
                </div>
            </div>

            <div class="col-4">
                <div class="call_exemple_filter">
                    <strong class="text-danger">POST </strong>http://localhost:8000/api/filter
                </div>

                <div class="div_filter_call mt-5">
                    <img class="img-fluid" src="images/imatge_6_call_filter.png" alt="">
                </div>

                <div class="titol_delete mt-5"><h1>RESPONSE</h1></div>

                <div class="div_filter_response_1 mt-4">
                    <img class="img-fluid" src="images/imatge_6_response_1.png" alt="" width="355px">
                </div>

                <div class="div_filter_response_2 mt-4">
                    <img class="img-fluid" src="images/imatge_6_response_2.png" alt="">
                </div>

                <div class="div_filter_response_2 mt-4">
                    <img class="img-fluid" src="images/imatge_6_response_3.png" alt="">
                </div>

            </div>
        </div>



        <div class="row mb-5 espai">
            <div class="col">
                <div class="info">
                    Recupera la ubicació geogràfica a partir de les coordenades de latitud i longitud proporcionades.
                    Retorna les dades d'adreça trobades en format JSON.
                    <p>
                        <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L26">Veure codi del CameresController@location</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row location">
            <div class="col-7">
                <div class="div_location">
                    <img class="img-fluid" src="images/imatge_7.png" alt="" width="600px">
                </div>

                <div class="div_location_function mt-5">
                    <img class="img-fluid" src="images/imatge_7_function.png" alt="" width="600px">
                </div>
            </div>

            <div class="col-5">
                <div class="call_exemple_location">
                    <strong class="text-danger">GET </strong>http://localhost:8000/api/location/41.3399628/2.1210822
                </div>

                <div class="titol_delete mt-5"><h1>RESPONSE</h1></div>

                <div class="div_location_response_1 mt-4">
                    <img class="img-fluid" src="images/imatge_7_response_1.png" alt="">
                </div>

                <div class="div_location_response_2 mt-4">
                    <img class="img-fluid" src="images/imatge_7_response_2.png" alt="">
                </div>
            </div>
        </div>


        
        <div class="row ubicacio_exacta">

            <div class="row mb-5 espai">
                <div class="col">
                    <div class="info">
                        A partir de l'ID de càmera de seguretat, aquesta funció recupera la ubicació geogràfica precisa de la càmera.
                        <p>
                            <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L50">Veure codi del CameresController@ubicacio_exacta</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="div_ubicacio_exacta">
                        <img class="img-fluid" src="images/imatge_8.png" alt="" width="650px">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-7">
    
                    <div class="div_ubicacio_exacta_function mt-5">
                        <img class="img-fluid" src="images/imatge_8_function.png" alt="">
                    </div>
                </div>
    
                <div class="col-5">
                    <div class="call_exemple_ubicacio_exacta mt-5">
                        <strong class="text-danger">GET </strong>http://localhost:8000/api/ubicacio_exacta/417105
                    </div>
    
                    <div class="titol_delete mt-4"><h1>RESPONSE</h1></div>
    
                    <div class="div_ubicacio_exacta_response_1 mt-4">
                        <img class="img-fluid" src="images/imatge_8_response_1.png" alt="" width="335px">
                    </div>
    
                    <div class="div_ubicacio_exacta_response_2 mt-4">
                        <img class="img-fluid" src="images/imatge_8_response_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="row help mb-5">

            <div class="row mb-5 espai">
                <div class="col">
                    <div class="info">
                        Obté tota la informació de cadascuna de les rutes que tenim habilitades per fer consultes, en concret la ruta, els mètodes, els paràmetres i la descripció.
                        <p>
                            <a href="https://github.com/UF4Abraham/UF4_Abraham/blob/main/app/Http/Controllers/CameresController.php#L215">Veure codi del CameresController@help</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <div class="div_help">
                        <img class="img-fluid" src="images/imatge_9.png" alt="" width="835px">
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-7">
    
                    <div class="div_help_function mt-5">
                        <img class="img-fluid" src="images/imatge_9_function.png" alt="">
                    </div>
                </div>
    
                <div class="col-5">
                    <div class="call_exemple_help mt-5">
                        <strong class="text-danger">GET </strong>http://localhost:8000/api/help
                    </div>
    
                    <div class="titol_delete mt-5"><h1>RESPONSE</h1></div>
    
                    <div class="div_help_response mt-4">
                        <img class="img-fluid" src="images/imatge_9_response.png" alt="">
                    </div>
                </div>
            </div>

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>