<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro Venta </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="../controlador/controlador.php?a=ingresarventa" method="POST" enctype="multipart/form-data">
        
            <table class="table table-borderless ">
                <tbody>
                    
                    <tr>
                        <td >Tipo</td>
                        <td ><input type="text" name="tipo" size="35" placeholder="Casa o Apartamento"></td>
                    </tr>
                     <tr>
                        <td >Modo</td>
                        <td ><input type="text" name="modo" size="35" placeholder="venta o Arriendo"></td>
                    </tr>
                    <tr>
                        <td >Amueblado</td>
                        <td ><input type="text" name="amueblado" size="3" placeholder="si o no"></td>
                    </tr>
                    <tr>
                        <td >Habitaciones</td>
                        <td ><input type="text" name="habitaciones" size="35" placeholder="x habitaciones"></td>

                    </tr>
                    <tr>
                        <td>Baños</td>
                        <td ><input type="text" name="baño" size="35" placeholder="x baños"></td>
                    </tr>
                     <tr>
                        <td>Metro Cuadrado</td>
                        <td ><input type="text" name="metro" size="35" placeholder=" x metros cuadrados"></td>
                    </tr>
                     <tr>
                        <td>Antiguedad</td>
                        <td ><input type="text" name="antiguedad" size="35" placeholder="años de antiguedad"></td>
                    </tr>
                     <tr>
                        <td>Estrato</td>
                        <td ><input type="text" name="estrato" size="3" placeholder="1 al 7"></td>
                    </tr>
                     <tr>
                        <td>Parqueadero</td>
                        <td ><input type="text" name="parqueadero" size="3" placeholder="si o no"></td>
                    </tr> <tr>
                        <td>Administracion</td>
                        <td ><input type="text" name="administracion" size="3" placeholder="si o no"></td>
                    </tr>
                     <tr>
                        <td>Pisos</td>
                        <td ><input type="text" name="piso" size="35" placeholder="x pisos"></td>
                    </tr> 
                     <tr>
                        <td>Titulo Del Anuncio</td>
                        <td ><input type="text" name="anuncio" size="35" placeholder="Casa o apartamento en x Ciudad"></td>
                    </tr>
                    <tr>
                        <td>Descripcion</td>
                        <td ><input type="text" name="descripcion" size="40" placeholder="Detalles del inmueble"></td>
                    </tr>
                    <tr>
                        <td>Ubicacion</td>
                        <td ><input type="text" name="ubicacion" size="40" placeholder="direccion del inmueble"></td>
                    </tr>
                    <tr>
                        <td>precio del inmueble</td>
                        <td ><input type="text" name="precio" size="35" placeholder="x precio"></td>
                    </tr> 
                                    </tbody>
            </table>
                            <td ><input type="submit" value="Ingresar" type="button" class="btn btn-primary"></td>
                            <td><a href="vistaProductos.php" type="button" class="btn btn-danger">Cancelar</a></td>
        </form>
                  
                </div>
              </div>
            </div>

