@include('includes.header')

<div class="card-body">
    <h1>songs</h1>

    @foreach($details as $details)
        <a>{{$details->name}}</a><br>
    @endforeach

</div>

@include('includes.footer')
