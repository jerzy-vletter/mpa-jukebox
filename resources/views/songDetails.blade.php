@include('includes.header')

<!-- this is the display page for the all details of every song, the item displayed is determined dynamicly via item id -->

<div class="card-body">

        <h1>TITLE: {{$songData->name}}</h1>
        <td>SONG DURATION: {{$songData->song_duration}} seconds</td><br>
        <td>ARTIST: {{$songData->artist}}</td><br>
</div>

@include('includes.footer')
