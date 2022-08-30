@include('includes.header')
@foreach($plname as $index)
    <form action="{{ url('/updatePlaylist', $index->id) }}" method="get">
        <input name="plName" type="text" placeholder="{{$index->name}}">
        <input type="submit" id='submitButton'>
    </form>
@endforeach
@include('includes.footer')
