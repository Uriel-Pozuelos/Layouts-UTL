<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <link href="../resource/css/icon_material_design_4495/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../resource/javascript/VueJs/vuetify/vuetify.min.css" rel="stylesheet">
        <link href="../resource/css/estilos.css" rel="stylesheet">
        <link href="../resource/css/roboto.css" rel="stylesheet">
        <link rel="stylesheet" href="/vista/styles.css">

        <script src="../resource/javascript/VueJs/vue/vue.js"></script>
        <script type="" src="../resource/javascript/VueJs/vue/vue-composition-api.prod.js" ></script>
        <script src="../resource/javascript/VueJs/vuetify/vuetify.min.js"></script>
        <title>Test</title>
        <style>
            [v-cloak] {
                display: none;
            }

            

        </style>
    </head>
   <body>
        
        <?php include_once("headerUriel.php") ?>
        
        
        <div class="container">
            <?php include_once("sideBar.php") ?>

            <main class="content">
                <section >
                    
                </section>
            </main>
        </div>
        
        <!-- <div id="app">
            <v-app v-cloak>
                <div class="margenes">
                    <div class="ruta">Inicio / Soy estudiante / Nuestro Rector </div>
                    <v-container fluid style="padding-top: 0px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at molestie lacus. Maecenas dictum est ligula, ut mattis erat condimentum et. Mauris et massa vel quam aliquet egestas. Nunc vulputate nisl velit, sit amet lacinia odio euismod mattis. Nunc et arcu a nisl ullamcorper feugiat vitae a lorem. Donec lacus eros, vehicula quis tempus in, mollis sed libero. Praesent porttitor nibh non sodales placerat.</p>
                        <p>Duis luctus ipsum sed lectus porttitor, at cursus nisi tincidunt. Fusce erat metus, rhoncus suscipit lorem vitae, elementum ultricies eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut at feugiat velit. Mauris nec sollicitudin odio. Nunc non neque mollis, porta nibh in, luctus nibh. Fusce quis scelerisque nulla. Nulla aliquet quam quis quam porta, vitae lacinia neque tincidunt. Integer mattis, orci ut rhoncus viverra, neque lorem dictum nunc, ac feugiat eros dolor ut enim.</p>
                        <p>Etiam elementum dui ut aliquam facilisis. Sed tristique tincidunt finibus. Vestibulum in tempor massa. Integer sodales erat vitae rutrum aliquam. Praesent tortor urna, pulvinar in tempus luctus, facilisis et lacus. Vivamus ut posuere sem. Pellentesque nec felis finibus, ultricies justo non, accumsan ante. Nullam porttitor laoreet nunc, in laoreet ante. Ut convallis turpis malesuada tortor interdum gravida.</p>
                        <p>Cras fermentum enim sit amet cursus placerat. Fusce sed felis vulputate, mattis lorem eget, porta justo. Nunc vestibulum mi id enim sagittis, ac tempus enim varius. Integer vehicula nibh sed justo auctor fringilla. Sed auctor metus non bibendum volutpat. Quisque id sodales ex. Duis in odio enim. Nulla quis lorem nunc. Praesent gravida sem ac rutrum convallis. Praesent porttitor sem risus, at rutrum ligula laoreet a. Fusce vulputate, erat nec auctor euismod, augue risus semper lectus, ut tincidunt ex justo nec erat. Cras ultrices purus sed orci eleifend, a volutpat risus consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam vehicula dictum ante non semper. In nec dolor gravida, convallis libero at, dignissim metus.</p>
                        <p>Pellentesque sit amet hendrerit metus. Curabitur nisi lectus, consectetur at purus eu, consectetur bibendum urna. Morbi scelerisque porttitor vestibulum. Aenean lobortis tempus malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec nec sodales lectus. Phasellus libero risus, facilisis sed metus vitae, bibendum dapibus tortor. Vestibulum tellus sapien, congue sed urna non, lacinia gravida velit. Proin auctor quis purus eget egestas. </p>
                    </v-container>
                </div>
                <?php include_once("footer.php") ?>
            </v-app>
        </div>     -->
    </body>
    <!-- Desarrollo -->
    <script type="application/x-javascript" src="../resource/javascript/sweetalert2/sweetalert2.all.js"></script>
    <script type="module">
        import {preloader, guardar, errorGuardar, actualizar, errorActualizar, eliminar, errorEliminar, cerrar, confirmarE, aviso, confirmar} from '../resource/javascript/sweetalert2/mensajes_sweetalert_vue.js';

        new Vue({
            el: "#app",
            vuetify: new Vuetify(),
            setup(){
                const {ref, onMounted, watch} = VueCompositionAPI;
                
                const url = ref('');

                onMounted(() => {
                    url.value = window.location.search;

                });

                return {
                    url
                }
            }
        });

        console.log("Inicio de debug");

        document.addEventListener("DOMContentLoaded", function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');
            
            submenuToggles.forEach(toggle => {
                
                toggle.addEventListener('mouseover', function () {
                    const submenu = this.nextElementSibling; 
                    submenu.classList.add('open'); 
                });

                
                toggle.addEventListener('mouseout', function () {
                    const submenu = this.nextElementSibling; 
                    submenu.classList.remove('open'); 
                });
            });
        });

        document.querySelectorAll(".submenu-toggle").forEach((toggle) => {
            toggle.addEventListener("click", function (event) {
                event.preventDefault();
                let submenu = this.nextElementSibling;
                submenu.classList.toggle("open");
            });
        });
    

    </script>
</html>