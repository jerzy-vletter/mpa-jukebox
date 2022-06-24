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
            <h1 href="" id="playlistDisplay">{{ __('playlist') }}</h1>

        @endif
    </div>
@endguest


@include('includes.footer')

