@include('includes.header')

<!-- this is the start of the lofi genre page, here all the songs that are in the logi genre are displayed -->

<div class="card-body">
    <h1 href="">{{ __('songs') }}</h1>
</div>
<table border="2">

<tr>
    <th>name</th>
    <th>duration</th>
    <th>artist</th>
</tr>
@foreach($songs as $songs)

<tr>
    <td>{{$songs->name}}</td>
    <td>{{$songs->song_duration}}</td>
    <td>{{$songs->artist}}</td>
</tr>

@endforeach
</table>
@include('includes.footer')
