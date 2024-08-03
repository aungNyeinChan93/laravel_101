@extends("layout")

@section("content")

<div class="container">
    <h1>Home Page</h1>
    <div class="card">
        <div class="card-header">
           <?php
           foreach($data as  $key=>$val){
               echo "$val->id .=>. $val->name . || email=>  .$val->email <br>";

            }
            ?>
        </div>
    </div>
</div>

<?php
foreach ($myarray as $key => $val) {
    echo " $key => $val  <br>";
}
?>

@foreach ($myarray as $key => $val)
    {{$key . "=>" . $val  }}
@endforeach




@endsection
