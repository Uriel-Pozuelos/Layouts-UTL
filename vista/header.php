<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <link href="../resource/css/roboto.css" rel="stylesheet">
        <link href="../resource/css/icon_material_design_4495/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../resource/javascript/VueJs/vuetify/vuetify.min.css" rel="stylesheet">
        <link href="../resource/css/estilos.css" rel="stylesheet">

        <script src="../resource/javascript/VueJs/vue/vue.js"></script>
        <script type="" src="../resource/javascript/VueJs/vue/vue-composition-api.prod.js" ></script>
        <script src="../resource/javascript/VueJs/vuetify/vuetify.min.js"></script>
        <title>Test</title>
        <style>
            [v-cloak] {
                display: none;
            }
            * {
                box-sizing: border-box;
            }

            body {
                font-family: roboto;
            }

            .navbar {
            overflow: hidden;
            background-color: #003a77;
            }

            .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            .dropdown {
            float: left;
            overflow: hidden;
            }

            .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font: inherit;
            margin: 0;
            }

            .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: lightblue;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 100%;
            left: 0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content .header {
            background: red;
            padding: 16px;
            color: white;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }

            /* Create three equal columns that floats next to each other */
            .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            background-color: #ccc;
            height: 250px;
            }

            .column a {
            float: none;
            color: black;
            padding: 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            .column a:hover {
            background-color: #ddd;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                height: auto;
            }
            }
        </style>
    </head>
    <body>
        <div id="app2">
            <v-container fluid>
                <v-row>
                    <v-img src="../resource/img/Header_web.jpg"></v-img>
                </v-row>
                <v-row style="background-color: #003a77">
                    <div class="navbar">
                        <a href="#home">Home</a>
                        <a href="#news">News</a>
                        <div class="dropdown">
                            <button class="dropbtn">Dropdown 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <div class="header">
                                    <h2>Mega Menu</h2>
                                </div>   
                            <div class="row">
                                <div class="column">
                                    <h3>Category 1</h3>
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                                <div class="column">
                                    <h3>Category 2</h3>
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                                <div class="column">
                                    <h3>Category 3</h3>
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div>
                </v-row>
            </v-container>
        </div>    
    </body>
    <!-- Desarrollo -->
    <script type="application/x-javascript" src="../resource/javascript/sweetalert2/sweetalert2.all.js"></script>
    <script type="module">
        import {preloader, guardar, errorGuardar, actualizar, errorActualizar, eliminar, errorEliminar, cerrar, confirmarE, aviso, confirmar} from '../resource/javascript/sweetalert2/mensajes_sweetalert_vue.js';

        new Vue({
            el: "#app2",
            vuetify: new Vuetify(),
            setup(){
                const {ref, onMounted, watch} = VueCompositionAPI;
                
                const name = ref('');

                onMounted(() => {

                });


                return {
                    name
                }
            }
        });
    </script>
</html>
    
