@include('includes.header')

<!--
    this is the start of the genre hub page, from here the user can go to more specific pages
    or stay on this page and get a random selection of 10 songs
-->

<div class="card-body">
    <h1 href="">{{ __('genres') }}</h1>

    @foreach($genre as $genre)
        <li><a id="genreTitle" href="{{ route('genreSelect', [$genre->name]) }}">{{$genre->name}}</a></li>

    @endforeach
</div>
@include('includes.footer')
