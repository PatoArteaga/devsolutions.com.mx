<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
          <div><a class="btn btn-primary btn-flat" href="?c=productos&a=FormCrear"><i class="fa fa-lg fa-plus"></i></a>
          
          <a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a>
          
          <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Id Producto</th>
                      <th>Nombre Producto</th>
                      <th>Marca Producto</th>
                      <th>Costo Producto</th>
                      <th>Precio Producto</th>
                      <th>Cantidad Producto</th>
                      <th>Imagen Producto</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody><?php 
                  foreach($this->modelo->Listar() as $r){
                  ?>
                    <tr>
                      <td><?=$r->id_prod; ?></td>
                      <td><?=$r->nombre_prod; ?></td>
                      <td><?=$r->marca_prod; ?></td>
                      <td><?=$r->costo_prod; ?></td>
                      <td><?=$r->precio_prod; ?></td>
                      <td><?=$r->cantidad_prod; ?></td>
                      <td><?=$r->img_prod; ?></td>
                      <td>Borrar|Editar</td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>