<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>company</label>
                <input name="company" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Sector</label>
                <select name="sector" class="form-control">
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Servicios de comunicacion">	Servicios de comunicacion</option>
                    <option value="Materiales Basicos">Materiales Basicos</option>
                    <option value="Servicios financieros">	Servicios financieros</option>
                    <option value="Consumo discrecional">	Consumo discrecional</option>
                    <option value="Industriales">Industriales</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Tiker</label>
        <input name="tiker" type="text" class="form-control i__tiker" required>
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
