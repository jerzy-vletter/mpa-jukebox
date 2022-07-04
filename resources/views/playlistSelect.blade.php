@include('includes.header')

<!-- this is the page where the user is send if they want to add a song to a playlist
     here they can select what playlist they want to add it to.
-->

<table border='2'>
<tr>
    <th>playlist</th>
    <th>add</th>
</tr>

@foreach($playlists as $playlists)

    <tr>
        <td>{{$playlists->name}}</td>
        <td><a href="{{ route('storeSong', [$playlists->id] ) }}">add to playlist</a></td>
    </tr>

@endforeach
</table>

@include('includes.footer')
