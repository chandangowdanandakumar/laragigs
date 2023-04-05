{{-- 
<h1><?php echo $heading; ?></h1>
<?php foreach ($listings as $listing) : ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> 

this is the php code, which can be cleaned up using the blade template

we can use directives 

 --}}
<x-layout>

 @include('partials._hero')
 @include('partials._search')


 @if(count($listings)==0)
 <p>No listings found</p>
 @endif


 {{-- we can use if statements to for conditional expressions  --}}

{{-- an alternative to @if derective is the @unless directive  --}}


@unless(count($listings) == 0)
 @foreach($listings as $listing)
<div class="card" style="width: 18rem; margin: 30px;">
    <img src={{$listing->image}} class="card-img-top" alt="...">
    <div class="card-body">
        <a class="card-title" href="/listings/{{$listing['id']}}">{{$listing->title}}</a>
        <x-listings-tags :tagsCsv='$listing->tags' />
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


@endforeach

@else
<p> unless directive - No listings found </p>

@endunless
</x-layout>

