<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome,{{$name ?? "User"}}</h1>
    <h1>{{time()}}</h1>
    <h1>{{date('d-m-y')}}</h1>
    {{$demo}}
    {!!$demo!!}
    <h1>
    @if($name == "")
        {{"Name is empty"}}
    
    @elseif($name == 'vedika')
        {{"Name is correct"}}
    
    @else
        {{"Name is incorrect"}}
    
    @endif
    </h1>
    <h2>
        @unless($name=='vedika')
        the name is not vedika
        @endunless
    </h2>
    <h2>
        @isset($name)
        Name is: {{$name}}
        @endisset
    </h2>
    {{--for loop--}}
    <h4>{{"Using for loop:"}}</h4>
    
    <div class="container">
    @for ($i=0; $i<=5 ;$i++)
       <h3>{{$i}}</h3>
    @endfor
    </div>
    {{--while loop--}}
    <h4>{{"Using while loop:"}}</h4>
    @php $i=0; @endphp
    @while($i<=5)
    <h3>{{$i}}</h3>
    @php $i++; @endphp
    @endwhile
    {{--foreach loop--}}
    <div class="container">
    <h4>{{"Using Foreach loop:"}}</h4>
        @php
        $arr=[1,2,3,4,5];
        @endphp
        @foreach ($arr as $i)
        <h3>{{$i}}</h3>
        @endforeach
    </div>
    

</body>
</html>