@include('includes.header')

<!--
    this is the start of the genre hub page, from here the user can go to more specific pages
    or stay on this page and get a random selection of 10 songs
-->

<div class="card-body">
    <h1 href="">{{ __('genres') }}</h1>
    <li><a id="genreTitle" href="{{ route('genreSelect', 'lofi') }}">lofi</a></li>
    <li><a id="genreTitle" href="{{ route('genreSelect', 'metal') }}">metal</a></li>
    <li><a id="genreTitle" href="{{ route('genreSelect', 'pop') }}">pop</a></li>
    <li><a id="genreTitle" href="{{ route('genreSelect', 'edm') }}">edm</a></li>
    <li><a id="genreTitle" href="{{ route('genreSelect', 'rap') }}">rap</a></li>
</div>

@include('includes.footer')
