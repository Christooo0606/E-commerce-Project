@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Actualizar Categorías</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('update-category/'.$category->id)}}" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $category->name }}" name="name" placeholder="Ingrese el nombre de la categoría">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Etiqueta</label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $category->slug }}" name="slug" placeholder="Ingrese la etiqueta de la categoría">
                </div> 
                <div class="col-md-12 mb-3">
                    <label for="">Descripción</label>
                    <textarea name="description"  rows="3" class="form-control p-2 border border-dark" placeholder="Ingrese la descripción de la categoría">{{ $category->description }}</textarea>   
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Estado</label>
                    <input type="checkbox"  class="border border-dark p-2" name="status" {{ $category->status == "1" ? "checked" : "" }}>
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox"  class="border border-dark p-2" name="popular" {{ $category->popular == "1" ? "checked" : ""}}>
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Título Meta</label>
                    <input type="text" class="form-control border border-dark p-2" name="meta_title" value="{{ $category->meta_title }}" placeholder="Ingrese el título meta de la categoría">
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="">Palabras Clave Meta</label>
                    <textarea name="meta_keyword"  rows="3" class="form-control border border-dark p-2" placeholder="Ingrese las palabras clave meta de la categoría">{{ $category->meta_keyword }}</textarea> 
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="">Descripción Meta</label>
                    <textarea name="meta_description"  rows="3" class="form-control border border-dark p-2" placeholder="Ingrese la descripción meta de la categoría">{{ $category->description }}</textarea> 
                </div>    
                @if ($category->image)
                    <img src="{{asset('upload/category/'.$category->image)}}" class="w-25 h-25" alt="no image">
                @endif
                <div class="col-md-12 mb-3">
                   <input type="file" name="image"  class="form-control border border-dark p-2" value="{{ $category->image }}" placeholder="Seleccione una imagen para la categoría">
                </div>    
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Enviar</button>
                </div>    
            </div>    
        </form>
    </div>
  </div>
@endsection
