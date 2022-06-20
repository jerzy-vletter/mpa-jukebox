@include('includes.header')

<!-- this is the start of the lofi genre page, here all the songs that are in the logi genre are displayed -->

<div class="card-body">
    <h1 href="">{{ __('songs') }}</h1>
</div>
<table>

<tr>
    <td>name</td>
    <td>duration</td>
    <td>artist</td>
</tr>
@foreach($songs as $songs)

<tr>
    <td>{{$songs->name}}</td>
</tr>

@endforeach
</table>
@include('includes.footer')

