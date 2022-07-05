@include('includes.header')

<div class="card-body">
    <h1>songs</h1>
    <table border="2">

    <tr>
        <th>song name</th>
        <th>duration</th>
        <th>delete</th>
    </tr>

    @foreach($details as $index)
        @foreach($index->songs as $song)
            <tr>
                <td>{{$song->name}}</td>
                <td>{{$song->song_duration}}s</td>
                <td><a href="{{ route('deleteFromPlaylist', [$index->id, $song->id]) }}">delete from playlist</a></td>
            </tr>
        @endforeach
    @endforeach
    <div class="card-body">
        <a>Total duration of this playlist - {{$time}} seconds</a>
    </div>
</div>

@include('includes.footer')
