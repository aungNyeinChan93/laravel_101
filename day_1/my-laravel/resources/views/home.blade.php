@extends("layout")

@section("content")

<h1>home Page</h1>

<?php
foreach($myarray as $key=> $val){
    echo " $key => $val  <br>";
}
?>

@foreach ($myarray as $key => $val )
    {{$key ."=>". $val  }}
@endforeach

@endsection
