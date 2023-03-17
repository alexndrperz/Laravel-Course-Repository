
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Añadir
</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="Modal-title">Añadir {{request()->routeIs('stores') ? 'negocio' : 'encargado'}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('post.stored')}}" method="POST" id="modal-form">
                @csrf
                <div class="container text-center">
                    <div class="row">
                        <div class="col-4" id="div-input-id" style="display: none;" >
                            <div class="mb-3" >
                                <label for="exampleInputEmail1" class="form-label"  >ID</label>
                                <input type="text" class="form-control input" id="input-id" aria-describedby="emailHelp" onkeyup="mayus(this);" maxlength="6" name="id">
                              </div>
                        </div>
                        <div class="col-12" id="div-input-name">
                            <div class="mb-3" >
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="35" name="nombre">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3" id="div-input-phone">
                                <label for="" class="form-label">Telefono</label>
                                <input type="phone" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="19" name="telefono">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3" id="div-input-email">
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="20" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3" id="div-input-location">
                                <label for="" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" id="input-name" aria-describedby="emailHelp" maxlength="50" name="location">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-check" style="margin-left: 10px;">
                    <input type="checkbox" class="form-check-input " id="checkbox">
                    <label class="form-check-label" for="exampleCheck1">Manual ID</label>
                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>