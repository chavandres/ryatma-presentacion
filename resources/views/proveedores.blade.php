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
                        <button type="button" class="btn btn-success btn-sm px-3">
                            Imprimir
                        </button>
                      <thead>
                        <tr>
                          <th scope="col">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            </div>
                          </th>
                          <th scope="col">Codigo</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Solicitar</th>
                          <th scope="col">Codigo Proveedor</th>
                          <th scope="col">Numero Orden</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                            </div>
                          </th>
                          <td>45</td>
                          <td>alternador</td>
                          <td>15</td>
                          <td>53fe727632542</td>
                          <td>13</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                            </div>
                          </th>
                          <td>45</td>
                          <td>alternador45v</td>
                          <td>133</td>
                          <td>53727632454542</td>
                          <td>14</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                            </div>
                          </th>
                          <td>443</td>
                          <td>alternadorg45</td>
                          <td>86</td>
                          <td>53464627632542</td>
                          <td>15</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                            </div>
                          </th>
                          <td>445</td>
                          <td>alternadorh2</td>
                          <td>166</td>
                          <td>5372763435542</td>
                          <td>16</td>
                        </tr>
                        <tr> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection