@extends('layouts.admin')

@section('content')
   <div class="card">
    <div class="card-header">
        <h4>Página de Categorías</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-fixed table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th >Nombre</th>
                    <th >Descripción</th>
                    <th>Imagen</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)    
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td class="col-md-3">
                        <img src="{{asset('upload/category/'.$item->image)}}" class="w-50" style="height: 100px !important" alt="Imagen no encontrada">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('edit-category/'.$item->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{url('delete-category/'.$item->id)}}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection
