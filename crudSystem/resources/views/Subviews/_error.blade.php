    <div class="alert alert-danger" role="alert" style="padding-bottom:5px">
        @error('id_companie')
            <p>El campo ID es requerido</p>
        @enderror
        @error('nombre_companie')
            <p>El campo Nombre es requerido</p>
        @enderror
        @error('id_managers')
        <p>El campo ID es requerido</p>
        @enderror
        @error('nombre_managers')
        <p>El campo nombre es requerido</p>
        @enderror
        @error('lastName_managers')
        <p>El campo Apellido es requerido</p>
        @enderror
    </div>