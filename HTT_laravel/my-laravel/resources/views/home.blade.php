@extends("layout")

@section("content")

<h1 class="text-center">Home Page</h1>
<div class="text-end me-2">
    <a href="logout" class="btn btn-danger ">logout</a>
</div>
<div class="container w-100">

    @foreach ($data as $item)
    <div class="card my-2 mx-auto w-75">
        <div class="card-header">
            {{$item->name}}
        </div>
        <div class="card-body">
            <h6 class="card-title">{{$item->email}}</h6>
            <p class="card-text">{{$item->description}}</p>
            <a href="#" class="btn btn-sm btn-primary">Detail</a>
        </div>
        </div>
   @endforeach
</div>

<!-- <?php
foreach ($myarray as $key => $val) {
    echo " $key => $val  <br>";
}
?> -->

<!-- @foreach ($myarray as $key => $val)
    {{$key . "=>" . $val  }}
@endforeach -->




@endsection
