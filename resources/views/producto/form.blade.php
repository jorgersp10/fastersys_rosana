     
   
    <div class="row mb-4">
        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Descripcion</label>
        <div class="col-sm-9">
            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Ingrese el Nombre">
            
        </div>
    </div>

    <div class="row mb-4">
        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Cod. de Barra</label>
        <div class="col-sm-9">
            <input type="text" id="cod_barra" name="cod_barra" class="form-control" placeholder="Ingrese el codigo">
            
        </div>
    </div>

    
    <div class="row mb-4">
        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Precio Venta</label>
        <div class="col-sm-9">
            <input type="text" id="precio_venta" name="precio_venta" class="form-control" placeholder="Ingrese el Importe de Venta">
        </div>
    </div>

    <div class="row mb-4">
        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Stock</label>
        <div class="col-sm-9">
            <input type="text" id="stock" name="stock" class="form-control" placeholder="Ingrese el stock">
        </div>
    </div>

    <div class="row mb-4">
        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Unidad de medida</label>
        <div class="col-sm-6">
            <select class="form-control" name="medida_id" id="medida_id">                                     
                <option value="0" disabled>Seleccione</option>                    
                    @foreach($unidades as $uni)
                        <option value="{{$uni->id}}">{{$uni->unidad_medida}}</option>
                    @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-9">
        <input type="file" id="imagen" name="imagen" class="form-control">
    </div>

    <input type="hidden" id="estado" name="estado" value="1" class="form-control" placeholder="Estado">

    <div class="modal-footer">
        <button type="submit" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>