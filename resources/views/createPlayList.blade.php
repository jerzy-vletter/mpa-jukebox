@include('includes.header')

<!-- on this page the user fils out of a form that will give all the data for the playlist tables. -->

<form action="public/createPlaylist" method="get">
    @csrf
    <label>playlist name: </label><br>
    <input name="plName" type="text" placeholder="playlist name">
    <input type="submit" id='submitButton'>
</form>

@include('includes.footer')
