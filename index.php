<?php include 'includes/layout/header.php'; ?>

    <div class="contenedor-barra">
        <h1> Agenda de Contactos </h1>
    </div>

    <div class="bgamarillo contenedor sombra">

        <form action="#" id="contacto" >
        <leyend> Añada un contacto <span>Todos los campos son obligatorios.</span> </leyend>
        
        <?php include 'includes/layout/formulario.php'; ?>
        
        </form>

    </div>


    <div class="bg-blanco contenedor sombra contactos">
        <div class="contenedor-contactos">
            <h2>Contactos</h2>

            <input type="text" id="buscar" placeholder="Buscar Contactos..." class="buscador sombra">

            <p class="total-contactos"><span>1</span> Contactos</p>

            <?php //CREAMOS LA TABLA DONDE VAMOS A INSERTAR LA INFORMACIÒN ?>

            <div class="contenedor-tabla">
                <table id="listado-contactos" class="listado-contactos"> 
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
                            <td>Juan</td>
                            <td>Movil-ML</td>
                            <td>3329433026</td>
                            <td>
                                <a href="editar.php" class="btn btn-editar">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button data-id="1" type="button" class="btn btn-borrar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        
        </div>
    </div>

<?php include 'includes/layout/footer.php'; ?>
