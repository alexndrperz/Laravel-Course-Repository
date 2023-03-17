<section id="Modal">
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Añadir  
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir local</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-3" id="div-id-input">
                                    <div class="mb-3">
                                        <label for="name-input" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="id-input">
                                    </div>
                                </div>
                                <div class="col-6" id="div-name-input">
                                    <div class="mb-3">
                                        <label for="name-input" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name-input">
                                    </div>
                                </div>
                                <div class="col-6"  id="div-phone-input">
                                    <div class="mb-3">
                                        <label for="name-input" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="phone-input">
                                    </div>
                                </div>
                                <div class="col-6" id="div-email-input">
                        <div class="mb-3">
                        <label for="name-input" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="name-input">
                        </div>
                        </div>
                        <div class="col-6" id="div-location-input">
                        <div class="mb-3">
                        <label for="name-input" class="form-label">Ubicacion</label>
                        <input type="text" class="form-control" id="name-input">
                        </div>
                        </div>
                            </div>
                           
                        
                        </div>
                        <div class="mb-3 form-check">
                        <input type="checkbox" id="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Manual ID</label>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="button" class="btn btn-outline-primary" aria-label="Close">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>