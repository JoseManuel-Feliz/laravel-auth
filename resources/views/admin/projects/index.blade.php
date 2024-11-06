@extends('layouts.app')

@section('page-title', 'Projects')

@section('nav-title','Projects')

@section('main-content')

@forelse($projects as $project)

<p>{{$project->title}}</p>
<p>{{$project->status}}</p>
<p>{{$project->author}}</p>
<p>{{$project->contributors}}</p>
<p>{{$project->project_start_date}}</p>
<p>{{$project->description}}</p>

@empty

@endforelse

@endsection