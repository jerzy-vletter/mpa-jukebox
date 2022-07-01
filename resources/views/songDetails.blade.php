@include('includes.header')

<!-- this is the display page for the all details of every song, the item displayed is determined dynamicly via item id -->

<div class="card-body">
    @foreach($songData as $songDetail)


        <h1>TITLE: {{$songDetail->name}}</h1>
        <td>SONG DURATION: {{$songDetail->song_duration}} seconds</td><br>
        <td>ARTIST: {{$songDetail->artist}}</td><br>

    @endforeach

</div>

@include('includes.footer')
