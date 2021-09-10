

<h1>welcome {{$index}}{{$role}}</h1>

@php 

    print_r($data);

@endphp
   

@for($i=0; $i<100;$i++)
<h1>Hellow World {{$i}}</h1>

@endfor


@php 
   $name = "tamim";
   $name1 = "<h1>tamim</h1>";
@endphp


@if ($name =="tamim")
   {{"im tamim"}}
@elseif($name=="tamimur")
  <h1>not currect Name</h1>
@else
{{"hellow else"}}

@endif



@isset($name)

"name 1 found"

@endisset


{!! $name1 !!}

@foreach($informatio as $info)

Name is :{{$info['Name']}}
Rile is :{{$info['Role']}}
Saction is :{{$info['Sectoion']}}</br>

@endforeach

