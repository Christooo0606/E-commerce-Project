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
                    <label for="name">Nombre <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese el nombre de la categoría. Ejemplo: 'Aceite'"></i></label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $category->name }}" name="name" placeholder="Ingrese el nombre de la categoría">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="slug">Etiqueta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese la etiqueta de la categoría. Ejemplo: 'aceites'"></i></label>
                    <input type="text" class="form-control border border-dark p-2" value="{{ $category->slug }}" name="slug" placeholder="Ingrese la etiqueta de la categoría">
                </div> 
                <div class="col-md-12 mb-3">
                    <label for="description">Descripción <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese una breve descripción de la categoría. Ejemplo: 'Lubricante de Technosynthese® reforzado con una base Ester para garantizar las propiedades anti-desgaste y asegurar la longevidad de los engranajes de la caja de cambios.'"></i></label>
                    <textarea name="description"  rows="3" class="form-control p-2 border border-dark" placeholder="Ingrese la descripción de la categoría">{{ $category->description }}</textarea>   
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="status">Estado <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione si la categoría está activa o inactiva"></i></label>
                    <input type="checkbox"  class="border border-dark p-2" name="status" {{ $category->status == "1" ? "checked" : "" }}>
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="popular">Popular <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione si la categoría es popular"></i></label>
                    <input type="checkbox"  class="border border-dark p-2" name="popular" {{ $category->popular == "1" ? "checked" : ""}}>
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="meta_title">Título Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese el título meta para la categoría"></i></label>
                    <input type="text" class="form-control border border-dark p-2" name="meta_title" value="{{ $category->meta_title }}" placeholder="Ingrese el título meta de la categoría">
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="meta_keyword">Palabras Clave Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese las palabras clave meta para la categoría"></i></label>
                    <textarea name="meta_keyword"  rows="3" class="form-control border border-dark p-2" placeholder="Ingrese las palabras clave meta de la categoría">{{ $category->meta_keyword }}</textarea> 
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="meta_description">Descripción Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese la descripción meta para la categoría"></i></label>
                    <textarea name="meta_description"  rows="3" class="form-control border border-dark p-2" placeholder="Ingrese la descripción meta de la categoría">{{ $category->description }}</textarea> 
                </div>    
                @if ($category->image)
                    <div class="col-md-12 mb-3">
                        <img src="{{asset('upload/category/'.$category->image)}}" class="w-40 h-40" alt="no image">
                    </div>
                @endif
                <div class="col-md-12 mb-3">
                   <label for="image">Imagen <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione una imagen para la categoría"></i></label>
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
