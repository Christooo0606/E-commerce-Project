@extends('layouts.customer')
@section('title')
    Mis Órdenes
@endsection

@section('content')
<div class="py-5">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-head">
                    <h4>Mi Orden</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Número de Seguimiento</th>
                                <th>Precio Total</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td> {{$item->tracking_no}} </td>
                                    <td> {{$item->total_price}} </td>
                                    <td> {{$item->status == '0' ? "Pendiente" : "Completada"}} </td>
                                    <td>    
                                        <a href="{{url("view-order/".$item->id)}}" class="btn btn-outline-info">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="py-5"></div>
<div class="py-5"></div>
<div class="py-5"></div>


@endsection
