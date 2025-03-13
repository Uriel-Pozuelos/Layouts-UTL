<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <link href="../resource/css/icon_material_design_4495/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../resource/javascript/VueJs/vuetify/3.7.14/vuetify.min.css" rel="stylesheet">
        <!-- <link href="../resource/javascript/VueJs/vuetify/vuetify.min.css" rel="stylesheet"> -->
        <link href="../resource/css/estilos.css" rel="stylesheet">

        <script src="../resource/javascript/VueJs/vue/vue.js"></script>
        <script type="" src="../resource/javascript/VueJs/vue/vue-composition-api.prod.js" ></script>
        <script src="../resource/javascript/VueJs/vuetify/3.7.14/vuetify.min.js"></script>
        <title>Test</title>
        <style>
            [v-cloak] {
                display: none;
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
                    {{menuOpened}} {{isOpenOnHover}}
                    <v-menu
                        open-on-hover
                        offset-y 
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                dark
                                text
                                v-bind="attrs"
                                v-on="on"
                            >
                                Inicio
                            </v-btn>
                        </template>

                        <v-list>
                            <v-menu 
                                :open-on-hover="isOpenOnHover"
                                offset-x 
                                right
                                v-model="menuOpened"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-list-item href="lorem-ipsum" v-bind="attrs" v-on="on">
                                        <v-list-item-title>Lorem ipsum</v-list-item-title>
                                    </v-list-item>
                                </template>
                                <v-list>
                                    <v-list-item>
                                        <v-list-item-title>Dolor sit</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item>
                                        <v-list-item-title>Amet</v-list-item-title>
                                    </v-list-item>
                                </v-list>
                            </v-menu>
                            <v-list-item>
                                <v-list-item-title>Dolor sit</v-list-item-title>
                            </v-list-item>
                            <v-list-item>
                                <v-list-item-title>Amet</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                </v-row>
            </v-container>
        </div>    
    </body>
    <!-- Desarrollo -->
    <script type="application/x-javascript" src="../resource/javascript/sweetalert2/sweetalert2.all.js"></script>
    <script type="module">
        import {preloader, guardar, errorGuardar, actualizar, errorActualizar, eliminar, errorEliminar, cerrar, confirmarE, aviso, confirmar} from '../resource/javascript/sweetalert2/mensajes_sweetalert_vue.js';

        const vuetify = window.Vuetify.createVuetify();
        new Vue({
            el: "#app2",
            vuetify,
            setup(){
                const {ref, onMounted, watch} = VueCompositionAPI;
                
                const url = ref('');
                const menuOpened = ref(false);
                const isOpenOnHover = ref(true);

                onMounted(() => {
                    url.value = window.location.search;

                });

                watch(menuOpened, (newMenuOpened) => {
                    isOpenOnHover.value = !newMenuOpened;
                })

                return {
                    url, menuOpened, isOpenOnHover
                }
            }
        });
    </script>
</html>
    
