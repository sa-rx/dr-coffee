@extends('layouts.app')

@section('title', '  اضافة منتج')

@section('content')
 
<div class="container">

<div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card" style="background-color: #4040406b;">
              

                <div class="card-body">
    <form class="" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
      @csrf

        <div class="form-group">
            <label for="name"> اسم المنتج</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">سعر المنتج</label>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="offer_price">  سعر عرض المنتج</label>
            <input type="text" name="offer_price" class="form-control">
        </div>

        

        <div class="form-group ">
            <label for="available">متوفر؟</label>
                <select class="form-select" aria-label="Default select example"  name="available" id="1">
                    <option value="1">متوفر</option>
                    <option value="0">غير متوفر</option>
                </select>
        </div>


        <div class="form-group">
            <label for="img" class="form-label">رفع الصوره</label>
            <input class="form-control" type="file"  name="img" id="img" >
        </div>

 
        <div class="form-group">
            <label for="content">المحتوى </label>
            <textarea name="content" class="form-control"></textarea>
        </div>

                            
        <div class="form-group">
            <button class="btn btn-outline-light"> <i class="fas fa-plus-square"></i> اضافة </button>
        </div>

    </form>
    </div>
</div>
</div>
</div>
</div>


@endsection
