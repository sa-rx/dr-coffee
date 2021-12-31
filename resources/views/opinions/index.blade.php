@extends('layouts.app')

@section('title', ' الاراء')

@section('content')



<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
            <div  class="pull-left">
                <h2> الاراء</h2>
            </div>
        @forelse($opinions as $opinion)
            <div  style=" background-color: #f1e4c6; color: #768856;" class="alert container" role="alert">
                <h3>{{$opinion->name}}</h3>
                <p>{{$opinion->content}}</p>  
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
    </div>
</section>      

@endsection
