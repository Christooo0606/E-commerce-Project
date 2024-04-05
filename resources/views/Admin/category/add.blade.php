@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Agregar Categorías</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('insert-category')}}" enctype="multipart/form-data"> 
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Nombre <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese el nombre de la categoría. Ejemplo: 'Electrónica'"></i></label>
                    <input type="text" class="form-control border border-dark" name="name" id="name">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="slug">Etiqueta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese la etiqueta de la categoría para la URL. Ejemplo: 'electronica'"></i></label>
                    <input type="text" class="form-control border border-dark" name="slug" id="slug">
                </div> 
                <div class="col-md-12 mb-3">
                    <label for="description">Descripción <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese una breve descripción de la categoría. Ejemplo: 'Encuentra los últimos gadgets electrónicos aquí'"></i></label>
                    <textarea name="description" rows="3" class="form-control border border-dark" id="description"></textarea>   
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="status">Estado <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione si la categoría está activa o inactiva"></i></label>
                    <input type="checkbox" class="border border-dark" name="status" id="status">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="popular">Popular <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione si la categoría es popular"></i></label>
                    <input type="checkbox" class="border border-dark" name="popular" id="popular">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="meta_title">Título Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese el título meta para la categoría"></i></label>
                    <input type="text" class="form-control border border-dark" name="meta_title" id="meta_title">
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="meta_keyword">Palabra Clave Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese las palabras clave meta para la categoría"></i></label>
                    <textarea name="meta_keyword" rows="3" class="form-control border border-dark" id="meta_keyword"></textarea> 
                </div>    
                <div class="col-md-12 mb-3">
                    <label for="meta_description">Descripción Meta <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Ingrese la descripción meta para la categoría"></i></label>
                    <textarea name="meta_description" rows="3" class="form-control border border-dark" id="meta_description"></textarea> 
                </div>    
                <div class="col-md-12 mb-3">
                   <label for="image">Imagen <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Seleccione una imagen para la categoría"></i></label>
                   <input type="file" name="image" class="form-control border border-dark" id="image">
                </div>    
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Enviar</button>
                </div>    
            </div>    
        </form>
    </div>
</div>
@endsection
