@extends('layouts.main')

@section('container')
    
    @foreach ($Posts as @post )
    <h2>{{ $post["title"] }}</h2>

@endsection


 
