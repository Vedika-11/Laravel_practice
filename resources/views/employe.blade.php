<h1>All Employes Data!</h1>
@foreach($data as $key)
    <h4>{{$key -> id }} |
        {{$key -> name }} |
        {{$key -> email }} |
        {{$key -> age}} |
        {{$key -> salary}} |
        {{$key -> city_name}} |
    </h4>
@endforeach