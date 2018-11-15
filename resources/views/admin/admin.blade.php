@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Administrador</div>
                @foreach ($sellos as $sello)
                    {{ $sello->nsello }}
                @endforeach

                <div class="card-body">
                  <table class="table table-condensed table-striped">
                      <thead>
                          <th>nsello</th>
                          <th>fecha</th>
                          <th>linea</th>
                          <th>caja</th>
                          <th>cliente</th>
                          <th>operador</th>
                          <th>sellador</th>
                      </thead>
                      <tbody>
                    @foreach ($sellos as $sello)  
                     <tr>
                        <td>{{$sello->num_sello}}</td>
                         <td>{{$sello->fecha_coloc}}</td>
                         <td>{{$sello->linea_trans}}</td>
                         <td>{{$sello->num_caja}}</td>
                         <td>{{$sello->cliente}}</td>
                         <td>{{$sello->operador}}</td>
                         <td>{{$sello->sellador}}</td> 
                    </tr>
                    @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
