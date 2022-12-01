@extends('layouts.app')
@section('content')

 <div class="flex position-relative">
    <form action="" method="POST" class="w-6/12 position-absolute top-0 start-50 translate-middle-x" enctype="multipart/form-data">
        @csrf
        <input type="file" class="text-lg" accept="image/*" name="imagenes">
        <br>

        <input type="submit" class="my-12 w-48 text-center p-3 text-white bg-dark rounded" value="Add Image">
    </form>
 </div>
    
@endsection