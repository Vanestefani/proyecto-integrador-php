<?php 
require_once '../modelo/daoRegistroInmueble.php';
require_once '../modelo/claseRegistroInmueble.php';
$ref = daoRegistroInmueble::EditarDatos($_GET['ref']);
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR INMUEBLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="../controlador/controlador.php?a=editarInmueble" method="post" enctype="multipart/form-data">
              <table class="table">
                  <tr>
                        <td>Tipo Inmueble</td>
                        <td><input type="text" name="inmueble" size="15" value="<?=$ref[1]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Tipo operacion</td>
                        <td><input type="text" name="operacion" size="15" value="<?=$ref[2]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Amueblado</td>
                        <td><input type="text" name="amueblado" size="15" value="<?=$ref[3]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>habitaciones</td>
                        <td><input type="text" name="habitaciones" size="15" value="<?=$ref[4]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Baños</td>
                        <td><input type="text" name="baños" size="15" value="<?=$ref[5]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Metro Cuadrado</td>
                        <td><input type="text" name="metro" size="15" value="<?=$ref[6]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Antiguedad</td>
                        <td><input type="text" name="antiguedad" size="15" value="<?=$ref[7]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Estrato</td>
                        <td><input type="text" name="estrato" size="15" value="<?=$ref[8]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Parqueadero</td>
                        <td><input type="text" name="parqueadero" size="15" value="<?=$ref[9]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Administracion</td>
                        <td><input type="text" name="administracion" size="15" value="<?=$ref[10]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>pisos</td>
                        <td><input type="text" name="pisos" size="15" value="<?=$ref[11]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Titulo Anuncio</td>
                        <td><input type="text" name="titulo" size="15" value="<?=$ref[12]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Referencia</td>
                        <td><input type="text" name="referencia" size="15" value="<?=$ref[13]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Ubicacion</td>
                        <td><input type="text" name="ubicacion" size="15" value="<?=$ref[14]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Precio</td>
                        <td><input type="text" name="precio" size="15" value="<?=$ref[15]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Foto</td>
                        <td><input type="text" name="foto" size="15" value="<?=$ref[16]?>" readonly="readonly"></td>
                    </tr>
                     
              </table>
              <button type="button" class="btn btn-outline-success">Editar</button>
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
          </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
