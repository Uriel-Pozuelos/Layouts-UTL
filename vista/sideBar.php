<aside class="sidebar">
    <h2 class="sidebar-title">Oferta Educativa</h2>
    <ul>
        <li class="has-submenu">
            <a href="javascript:void(0);"  class="submenu-toggle">Conoce la UTL</a>
            <ul class="submenu-sidebar">
                <li><a href="">Estructura organizacional</a></li>
                <li><a href="">Historia</a></li>
                <li><a href="">Filosofía</a></li>
                <li><a href="">Decalogo Universitario</a></li>
                <li><a href="">Ejes estratégicos</a></li>
                <li><a href="">León Cósmico</a></li>
                <li><a href="">Conjunto muralístico</a></li>
                <li><a href="">Planteles León</a></li>
            </ul>
        </li>
            
        <li class="has-submenu">
            <a href="javascript:void(0)" class="submenu-toggle">Sitios Comunidad UTL</a>
            <ul class="submenu-sidebar">
                <li><a href="">SITO</a></li>
                <li><a href="">SGI</a></li>
                <li><a href="">Aula virtual</a></li>
                <li><a href="">Centro de idiomas</a></li>
                <li><a href="">SysAid (IT support)</a></li>
                <li><a href="">Correo institucional</a></li>
                <li><a href="">Correo Alumnado</a></li>
            </ul>
        </li>
        <li class="has-submenu">
            <a href="javascript:void(0)" class="submenu-toggle">Servicios Universitarios</a>
            <ul class="submenu-sidebar">
                <li><a href="">Cultura y deporte</a></li>
                <li class="has-sub-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">Laboratorios</a>
                    <ul class="sub-submenu-sidebar" >
                        <li><a href="">Tecnologías de la información</a></li>
                        <li><a href="">Económico administrativa</a></li>
                        <li><a href="">Electromecánica industrial</a></li>
                        <li><a href="">Sustenatabilidad para el desarrollo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Servicios informáticos</a>

                </li>
                <li>
                    <a href="">Idiomas</a>

                </li>
                <li><a href="">Centro de impresión</a></li>
                <li><a href="">Centro incubador de empresas</a></li>
                <li><a href="">Psicopedagógico y tutoreo</a></li>
                <li><a href="">Horarios de transporte</a></li>
                <li><a href="">Salud integral</a></li>
                <li><a href="">Biblioteca Digital ECEST</a></li>
                
            </ul>
        </li>


        <li>
            <a href="#">Vinculación</a>
        </li>
        <li>
            <a href="#">Asuntos Internacionales</a>
        </li>
        <li>
            <a href="#">Difusión e Imagen</a>
        </li>
        <li>
            <a href="#">Eventos Institucionales</a>
        </li>
        <li>
            <a href="#">Órganos colegiados</a>
        </li>
        <li>
            <a href="#">Responsabilidad Ambiental</a>
        </li>
        <li>
            <a href="#">Calidad</a>
        </li>
        <li>
            <a href="#">Seguridad Institucional</a>
        </li>
        <li>
            <a href="#">Transparencia</a>
        </li>   
        <li>
            <a href="#">Trabaja en la UTL</a>
        </li>
    </ul>

    <h2 class="sidebar-title">PLANTELES</h2>
    <ul>
        <li><a href="#">Campus II León</a></li>
    </ul>
</aside>

<style>


.sidebar {
    width: 250px;
    padding: 15px;
    height: 100vh;
}

.sidebar-title {
    background: #002F6C;
    color: white;
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    position: relative;
}

.sidebar ul li a {
    color: black;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
    transition: background-color 0.3s;
}

.sidebar a:hover {
    background-color: rgb(156, 211, 198);
    border-radius: 5px;
    padding-left: 20px;
    transition: padding-left 0.3s ease-in-out;
}

/* Submenú principal */
.has-submenu {
    position: relative;
}

.submenu-sidebar {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background: rgb(246, 246, 246);
    border: 1px solid rgba(112, 168, 155, 0.81);
    border-left: 4px solid rgba(112, 168, 155, 0.81);
    border-radius: 5px;
    width: 250px;
    height: auto;
    transition: all 0.3s ease-in-out;
    font-size: 12px;
    z-index: 1000;
}

/* Submenú anidado (sub-submenú) */
.has-sub-submenu {
    position: relative;
}

.sub-submenu-sidebar {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background: #f5f5f5;
    border: 1px solid #ccc;
    border-left: 4px solid rgba(112, 168, 155, 0.81);
    border-radius: 5px;
    width: 250px;
    transition: all 0.3s ease-in-out;
    z-index: 1000;
}

/* Mostrar menú al pasar el cursor */
.has-submenu:hover > .submenu-sidebar {
    display: block;
}

.has-sub-submenu:hover > .sub-submenu-sidebar {
    display: block;
}





@media (max-width: 768px) {
    .sidebar {
        width: 180px;
        left: 0;
        margin 0;
        padding: 0;
    }

    .submenu-sidebar {
        position: static; 
        display: none;
        width: 90%;
        margin-left: 10%;
    }
    
}

/* Efecto de mostrar el submenú al abrir
.submenu-sidebar.open {
    display: block;
    max-height: auto;  
    visibility: visible;
    transition: max-height 1s ease-in-out;
} */

</style>

