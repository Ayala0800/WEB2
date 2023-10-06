<!-- formulario de altas de tarea -->
<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="title" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>IBU</label>
                <input required name="ibu" type="number" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>%ALC</label>
                <input required name="alc" type="number" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-3">
            <div class="form-group">
                <label>Estilo</label>
                <select required name="style" class="form-control">
                    <option value="1">IPA</option>
                    <option value="2">Lager</option>
                    <option value="3">Stout</option>
                    <option value="4">Porter</option>
                    <option value="5">Sour Ale</option>
                    <option value="6">Belgian Ale</option>
                    <option value="7">Barleywine</option>
                </select>
            </div>
        </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>