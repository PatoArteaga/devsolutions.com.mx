<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Productos</h1>
            <p>Ingresa los datos para registrar un nuevo Producto</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Productos</li>
              <li><a href="#"><?=$titulo?> Producto</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=productos&a=Guardar">
                      <fieldset>
                        <legend><?=$titulo?> Producto</legend>

                        <div class="form-group">
                            <input class="form-control" name="id" id="id_id" type="hidden" value="<?=$p->getid_prod()?>" >
                            <label class="col-lg-2 control-label" for="id_nombre">Nombre</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="id_nombre" name="nombre" value="<?=$p->getnombre_prod()?>" type="text" placeholder="Introduce el nombre" required>                            
                            </div>                          
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="id_marca">Marca</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="id_marca" name="marca" value="<?=$p->getmarca_prod()?>" type="text" placeholder="Introduce el nombre" required>                            
                          </div>                          
                        </div>


                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="id_costo">Costo</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="id_costo" name="costo" value="<?=$p->getcosto_prod()?>" type="text" placeholder="Introduce el nombre" required>                            
                          </div>                          
                        </div>


                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="id_precio">Precio</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="id_precio" name="precio" value="<?=$p->getprecio_prod()?>" type="text" placeholder="Introduce el nombre" required>                            
                          </div>                          
                        </div>


                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="id_cantidad">Cantidad</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="id_cantidad" name="cantidad" value="<?=$p->getcantidad_prod()?>" type="text" placeholder="Introduce el nombre" required>                            
                          </div>                          
                        </div>


                        <!-- <div class="form-group">
                          <label class="col-lg-2 control-label" for="id_imagen">Imagen</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="id_imagen" name="imagen" value="<?php //$p->getimg_prod()?>" type="text" placeholder="Introduce el nombre">                            
                          </div>                          
                        </div> -->


                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>