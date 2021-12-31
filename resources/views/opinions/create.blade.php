@extends('layouts.app')

@section('title', ' الاراء')

@section('content')



<section id="testimonials" class="testimonials section-bg container rounded">
    <div class="container" data-aos="fade-up">
        @forelse($opinions as $opinion)
            <div class="alert alert-light container" role="alert">
                <h3 style="color: #768856;">{{$opinion->name}}</h3>
                <p style="color: #122c14;">{{$opinion->content}}</p>  
                <hr>
                @can('حذف الرسايل  في صفحة  الاراء')
                    <form method="post" action="{{route('opinions.destroy',$opinion)}}"href="">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" > <i class="fas fa-trash-alt"></i></button>
                    </form>
                @endcan
            </div>
        @empty
            <p>لا توجد اراء</p>
        @endforelse  
        <a class="btn btn-outline-light btn-sm" href="{{route('opinions.index')}}">جميع الاراء</a>
    </div>
</section>          

<br><br><br>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #768856;">
                <div class="card-header"><h3  style=" color: #f1e4c6;  ">كتابه الاراء</h3></div>
                    <div class="card-body">
                        <form class="" action="{{route('opinions.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="name">الاسم </label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="content">رايك </label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>
                                    
                            <br>
                            <div class="form-group">
                                <button class="btn btn-outline-light"> <i class="fas fa-plus-square"></i> ارسال </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
