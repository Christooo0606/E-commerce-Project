@extends('layouts.customer')
@section('title')
    Mis Órdenes
@endsection

@section('content')
<div class="py-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-head">
                    <a href="{{url('/')}}" class="btn btn-outline-info my-1">Volver</a>
                    <h4 class="my-2">Mis Órdenes</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="my-1">Nombre</label>
                            <div class="border p-2 ">{{$order->fname}}</div>
                            <label for="" class="my-1">Apellido</label>
                            <div class="border p-2">{{$order->lname}}</div>
                            <label for="" class="my-1">Correo Electrónico</label>
                            <div class="border p-2">{{$order->email}}</div>
                            <label for="" class="my-1">Número de Contacto</label>
                            <div class="border p-2">{{$order->phoneno}}</div>
                            <label for="" class="my-1">Dirección de Envío</label>
                            <div class="border p-2">
                                {{$order->address1}}
                                <br>
                                {{$order->address2}}
                                <br>
                                {{$order->city}}
                                <br>
                                {{$order->state}}
                                <br>
                                {{$order->country}}
                                <br>
                            </div>
                            <label class="my-1" for="">CÓDIGO POSTAL</label>
                            <div class="border p-2">{{$order->pincode}}</div>
                        
                        </div>
                        <div class="col-md-6 table-responsive">
                            <table class="table align-middle text-center">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td> {{$item->products->name}} </td>
                                            <td> {{$item->qty}} </td>
                                            <td> {{$item->price}} </td>
                                            <td>
                                                <img style="width: 100px; height: 100px;" src="{{asset('upload/product/'.$item->products->image)}}" alt="">
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4 class="px-2">Total General : <span class="float-end">RS {{ $order->total_price }}</span></h4>
                         </div>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="py-3"></div>



@endsection
