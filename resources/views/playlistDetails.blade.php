@include('includes.header')

<div class="card-body">
    <h1>songs</h1>

    @foreach($details as $details)
        <a>{{$details->song_id}}</a>
    @endforeach

</div>

@include('includes.footer')
