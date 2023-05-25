@extends('layouts.app')

@section('title', 'Aggiunta projects')

@section('content')

    <div class="container py-5">

        <form method="POST" action="{{route('admin.projects.update', ['project' => $project->slug])}}">
           
            @csrf

            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $project->title)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Selettore tipologia:</label>
                <select class="form-select" @error('type_id') is-invalid @enderror name="type_id" id="type_id">
                    <option @selected(old('type_id', $project->type_id)=='') value="">Nessuna tipologia</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id', $project->type_id)==$type->id) value="{{$type->id}}">{{$type->name}}</option>    
                    @endforeach
                </select>

                @error('type_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto:</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{old('content', $project->content)}}</textarea></textarea>

                @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            
    
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
@endsection