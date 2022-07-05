@include('includes.header')

@guest
    @if (Route::has('login'))
    <div class="card-body">
        <h1 href="">{{ __('playlist') }}</h1>
        <a>you must be logged in to see your playlists,
            click <a href="{{ route('login') }}">here</a> to login.
        </a>
    </div>
    @endif
@else
    <div class="card-body">
        @if (Route::has('logout'))
            <h1 href="" id="playlistDisplay"> playlist <a href="{{ route('PlaylistForm') }}">{{ __('create a new one') }}</a></h1><br>
            @if(isset($playlists))
                <table border="2">
                    <tr>
                        <th>playlist name</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                @foreach($playlists as $playlist)
                    <tr>
                        <td><a href="{{ route('PlaylistDetails', [$playlist->id]) }}">{{$playlist->name}}</a></td>
                        <td><a href="{{ route('updateform', [$playlist->id]) }}">update this playlist</a></td>
                        <td><a href="{{ route('deletePlaylist', [$playlist->id]) }}">delete this playlist</a></td>
                    </tr>

                @endforeach
            @endif
        @endif
    </div>
@endguest


@include('includes.footer')

