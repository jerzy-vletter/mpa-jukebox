@include('includes.header')

<!-- this is the page where all the songs are displayed base on what genre was selected -->

<div class="card-body">
    <h1 href="">{{ __('songs') }}</h1>
</div>
<table border="2">

<tr>
    <th>name</th>
    <th>playlist</th>
</tr>
@foreach($songs as $song)

<tr>
    <td><a href="{{ route('songSelect', [$song->id]) }}">{{$song->name}}</a></td>
    <td><a href="{{ route('PlaylistSelect', [$song->id]) }}">add to playlist</a></td>
</tr>

@endforeach
</table>

@include('includes.footer')
