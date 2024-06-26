@extends('layouts.customer')

@section('title')
   Realizar Pedido
@endsection

@section('content')
<div class="py-5"></div>
    <div class="container mt-3">
        <form action="{{url('place-order')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5>Detalles Básicos</h5>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 my-2">
                                    <label for="firstname">Nombre</label>
                                    <input type="text" name="fname" class="form-control" value="{{Auth::user()->name}}" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="firstname">Apellido</label>
                                    <input type="text" name="lname" class="form-control" value="{{Auth::user()->name}}" placeholder="Apellido" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="correo@ejemplo.com" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Número de Teléfono</label>
                                    <input type="number" name="phoneno" class="form-control" value="{{Auth::user()->phoneno}}" placeholder="numero celular" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Dirección 1</label>
                                    <input type="text" name="address1" class="form-control" value="{{Auth::user()->address1}}" placeholder="Ingrese Dirección 1" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Dirección 2</label>
                                    <input type="text" name="address2" class="form-control" value="{{Auth::user()->address2}}" placeholder="Ingrese Dirección 2" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Ciudad</label>
                                    <input type="text" name="city" class="form-control" value="{{Auth::user()->city}}" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Estado</label>
                                    <input type="text" name="state" class="form-control" value="{{Auth::user()->state}}" placeholder="Estado" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">País</label>
                                    <input type="text" name="country" class="form-control" value="{{Auth::user()->country}}" placeholder="País" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="email">Código Postal</label>
                                    <input type="number" name="pincode" class="form-control" value="{{Auth::user()->pincode}}" placeholder="Código Postal" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 ">
                        <div class="card-body">
                            <h5>Detalles del Pedido</h5>
                            <hr>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitem as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>    
                                            <td>{{$item->prod_qty}}</td>    
                                            <td>{{$item->products->selling_price}}</td>    
                                            <td></td>    
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-outline-primary float-end">Realizar Pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('css')
<style>

.checkout-form input
{

    font-size: 1rem;
    padding: 10px;
    font-weight: 400;
}
    
.checkout-form label
{
    font-size: .9rem;
    font-weight: 700;
}
    
</style>
@endsection
