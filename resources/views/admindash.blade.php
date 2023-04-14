@extends('layouts.admin')

@section('content')
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                      <thead>
                        <tr>
                          <th scope="col">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            </div>
                          </th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Rol</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                            </div>
                          </th>
                          <td>Rodrigo Alvarez</td>
                          <td>ralvarez@ryatma.com</td>
                          <td>2290-2290</td>
                          <td>Agente de Ventas</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm px-3">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger btn-sm px-3">
                                Eliminar
                            </button>
                          </td>
                        </tr>
                        <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Pedro Chaves</td>
                            <td>pchaves@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Agente de Ventas</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Andres Chavarria</td>
                            <td>achava@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Administrador</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Cesar Melendez</td>
                            <td>cmelendez@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Agente de Ventas</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Alejandro Chavarria</td>
                            <td>achavarria@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Administrador</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Helen Corrales</td>
                            <td>hcorrales@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Agente de Ventas</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Mario Alberto</td>
                            <td>malberto@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Administrador</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Jose Brenes</td>
                            <td>jbrenes@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Administrador</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                              </div>
                            </th>
                            <td>Felipe Villalobos</td>
                            <td>fvillalobos@ryatma.com</td>
                            <td>2290-2290</td>
                            <td>Administrador</td>
                            <td>
                              <button type="button" class="btn btn-info btn-sm px-3">
                                  Editar
                              </button>
                              <button type="button" class="btn btn-danger btn-sm px-3">
                                  Eliminar
                              </button>
                            </td>
                          </tr>
                        
                      </tbody>
                      <div class="position-fixed bottom-0 end-0 p-3">
                        <a href="/AgregarUsuario">
                          <button type="button" class="btn btn-primary">Ingresar Usuario</button>
                      </a>
                        
                    </div>
                      
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection