<?php
session_start();
$id = $_SESSION ['idUsuario']; ?>
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
                        <td>tipo</td>
                        <td>
                            <select name="tipo" required>
                                
                                <option value="apartamento" >Apartamento</option>
                                <option value="casa">Casa</option>
                </select>
                        </td>
                    </tr>

                     <tr>
                        <td >Modo</td>
                        
                        <td>
                            <select name="modo" required>
                                
                                <option value="venta" >Venta</option>
                                <option value="arriendo">Arriendo</option>
                                
                </select>
                            </td>
                    </tr>
                    <tr>
                        <td >Amueblado</td>
                       <td>
                            <select name="amueblado" required>
                                
                                <option value="si" >Si</option>
                                <option value="no">No</option>    
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td >Habitaciones</td>
                        <td>
                            <select name="habitaciones" required>
                                
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>Baños</td>
                       <td>
                            <select name="baño" required>
                                
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td>Metro Cuadrado</td>
                        <td ><input type="text" name="metro" size="35" placeholder=" X metros cuadrados"></td>
                    </tr>
                     <tr>
                        <td>Antiguedad</td>
                        <td ><input type="text" name="antiguedad" size="35" placeholder=" X años de antiguedad "></td>

                    </tr>
                     <tr>
                        <td>Estrato</td>
                        <td>
                            <select name="estrato" required>
                                
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td>Parqueadero</td>
                        <td>
                            <select name="parqueadero" required>
                                
                                <option value="no" >no</option>
                                <option value="si">si</option>
                                
                            </select>
                        </td>
                    </tr> <tr>
                        <td>Administracion</td>
                            <td>
                            <select name="administracion" required>
                                
                                <option value="no" >no</option>
                                <option value="si">si</option>
                                
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td>Pisos</td>
                        <td>
                            <select name="piso" required>
                                
                                <option value="1 piso" >1 piso</option>
                                <option value="2 pisos">2 pisos</option>
                                <option value="3 pisos">3 pisos</option>
                                <option value="4 pisos">4 pisos</option>
                                <option value="5 pisos">5 pisos</option>
                                <option value="6 pisos">6 pisos</option>
                                
                            </select>
                        </td>
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
                <input id="propietario_id" name="propietario_id" type="hidden" value="<?= $id ?>">
                                    </tbody>
            </table>
                            <td ><input type="submit" value="Ingresar" type="button" class="btn btn-primary"></td>
                            <td><a href="vistaProductos.php" type="button" class="btn btn-danger">Cancelar</a></td>
        </form>
                  
                </div>
              </div>
            </div>

