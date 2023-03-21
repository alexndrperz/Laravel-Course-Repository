<div class="mb-3" id="manager-lastname" style="display: none">
    <label for="" class="form-label">Apellido</label>
    <input type="text" class="form-control input" id="input-name" aria-describedby="emailHelp" name="lastName_managers" value="{{old('lastName_managers')}}" >
</div>



<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Añadir
</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="Modal-title">Añadir {{request()->routeIs('get.companies') ? 'negocio' : 'encargado'}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{request()->routeIs('get.companies') ?  route('post.companies') : route('post.managers')}} " method="POST" id="modal-form">
                @csrf
                <div class="container text-center">
                    <div class="row">
                        <div class="col-4" id="div-input-id" style="display: none;" >
                            <div class="mb-3" >
                                <label for="exampleInputEmail1" class="form-label"  >ID</label>
                                <input type="text" class="form-control input" id="input-id" aria-describedby="emailHelp" onkeyup="mayus(this);" maxlength="6" name="id_companie">
                              </div>
                        </div>
                        <div class="col-12" id="div-input-name">
                            <div class="mb-3" >
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="35" name="nombre_companie" value=" {{request()->routeIs('get.companies') ? old('nombre_companie') : old('nombre_managers')}} ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3" id="div-input-phone">
                                <label for="" class="form-label">Telefono</label>
                                <input type="phone" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="19" name="telefono_companie" value=" {{request()->routeIs('get.companies') ? old('telefono_companie') : old('telefono_managers')}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3" id="div-input-email">
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="20" name="email_companie" value=" {{request()->routeIs('get.companies') ? old('email_companie') : old('email_managers')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3" id="div-input-location">
                                <label for="" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control input" id="input-name" aria-describedby="emailHelp" maxlength="50" name="location_companie" value=" {{request()->routeIs('get.companies') ? old('location_companie') : old('location_managers')}}">
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