{{-- @if(count($listings) == 0)
    <h1>No data.</h1>
@endif --}}

<h1>Latest listings</h1>
@unless (count($listings) == 0)
    @foreach($listings as $listing)

        <h3> <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }} </a></h3>
        <p> {{ $listing['description'] }} </p>

    @endforeach
    @else
    <h1>No data.</h1>
@endunless


