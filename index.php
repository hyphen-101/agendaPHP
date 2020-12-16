<?php include 'inc/layout/header.php'; ?>

    <div class="contenedor-barra">
        <h1>Agenda de Contactos</h1>
    </div>

    <div class="bg-amarillo contenedor sombra">
        <form action="#" id="contacto">
            <legend>Añada un contacto <span>Todos los campos son obligatorios</span></legend>
            
            <?php include 'inc/layout/formularios.php'; ?>
            <!--Formulario-->

        </form>
        <!--Formulario de Contactos-->
    </div>

    <div class="bg-blanco contenedor contactos sombra">
        <div class="contenedor-contactos">
            <h2>Contactos</h2>
            <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">
            <p class="total-contactos"><span>2 </span>Contactos</p>
            <div class="contenedor-tabla">
                <table id="listado-contacto" class="listado-contacto">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Empresa</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sergio</td>
                            <td>Microsoft</td>
                            <td>789456123</td>
                            <td>
                                <a class="btn-editar btn" href="editar.php?id=1">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sergio</td>
                            <td>Microsoft</td>
                            <td>789456123</td>
                            <td>
                                <a class="btn-editar btn" href="editar.php?id=1">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sergio</td>
                            <td>Microsoft</td>
                            <td>789456123</td>
                            <td>
                                <a class="btn-editar btn" href="editar.php?id=1">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include 'inc/layout/footer.php'; ?>