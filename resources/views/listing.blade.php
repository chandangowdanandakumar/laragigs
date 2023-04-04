@extends('layout')
@section('content')
@include('partials._search')
<a href="/">back</a>
<div class="card" style="width: 18rem; margin: 30px;">
    <img src={{$listing->image}} class="card-img-top" alt="...">
    <div class="card-body">
        <a class="card-title" href="/listings/{{$listing['id']}}">{{$listing->title}}</a>
        <x-listings-tags :tagsCsv='$listing->tags' />
        {{-- <p>{{ $listing->tags}}</p> --}}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $listing->company}}</li>
      <li class="list-group-item">{{ $listing->email}}</li>
      <li class="list-group-item">{{ $listing->website}}</li>
      <li class="list-group-item">{{ $listing->location}}</li>
    </ul>
    <div class="card-body">
        <p class="card-text">{{ $listing->description}}
        </p>
 
    </div>
  </div>


@endsection