{{-- 
<h1><?php echo $heading; ?></h1>
<?php foreach ($listings as $listing) : ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> 

this is the php code, which can be cleaned up using the blade template

we can use directives 

 --}}


 <h1>{{$heading}}</h1>


 @if(count($listings)==0)
 <p>No listings found</p>
 @endif


 {{-- we can use if statements to for conditional expressions  --}}

{{-- an alternative to @if derective is the @unless directive  --}}


@unless(count($listings) == 0)
 @foreach($listings as $listing)

 <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
<p>{{ $listing['description']}}

    </p>    
@endforeach

@else
<p> unless directive - No listings found </p>

@endunless
