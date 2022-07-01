@include('includes.header')

<!-- this is the page where all the songs are displayed base on what genre was selected -->

<div class="card-body">
    <h1 href="">{{ __('songs') }}</h1>
</div>
<table border="2">

<tr>
    <th>name</th>
</tr>
@foreach($songs as $songs)

<tr>
    <td><a href="{{ route('songSelect', [$songs->id]) }}">{{$songs->name}}</a><a href="">add to playlist</a></td>
</tr>

@endforeach
</table>

@include('includes.footer')
