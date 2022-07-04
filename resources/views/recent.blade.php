@include('includes.header')

@foreach($sessionData as $index)

    <a>{{$index->name}}</a><br>


@endforeach

@include('includes.footer')
