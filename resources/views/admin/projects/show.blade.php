@extends('layouts.app')


@section('content')

    <div class="container py-5">
        <h2>Titolo: {{$project->title}}</h2>
        <h2>Titolo 2: {{$project->slug}}</h2>
        <p>Tipologia: {{$project->type?$project->type->name:'Nessuna tipologia salvata'}}</p>
        <p>Tecnologia: {{$project->technology?$project->technology->name:'Nessuna tecnologia salvata'}}</p>
        <p>Descrizione: {{$project->content}}</p>
    </div>
@endsection