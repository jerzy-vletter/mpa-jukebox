@include('includes.header')

@foreach($sessionData as $index)

    <a>{{$index->name}}</a><br>

@endforeach
<form action="/createRecentPlaylist" method="get">
    <input name="recentPlName" type="text" placeholder="playlist name">
    <input type="submit" id='submitButton'>
</form>
@include('includes.footer')
