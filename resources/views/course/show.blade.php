@extends('layouts.app')

@section('title', 'التسجيل في الكورس')

@section('content')

<section id="why-us" class="why-us container">
  <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="box container" data-aos="zoom-in" data-aos-delay="100">
                    <span> <a  href="{{route('course.show',$course)}}">{{$course->name}} </a></span>
                    <h4> {!! nl2br( $course->content )!!}</h4>

                    @if($course->available ==0)
                    <p>التسجيل متاح</p>
                    @else
                    <p>  انتهى التسجيل</p>
                    @endif
                
                    <p>يبدأ الكورس في {{$course->date}}</p>
                </div>
            </div>
        </div>
  </div>

                <br>
                <br>

    <div class="section-title">
      <h2>ادخل بياناتك للتسجيل</h2>
    </div>

    
    <form action="{{route('participations.store')}}" method="post">
        @csrf
        <input type="hidden" name="course_id" value="{{$course->id}}">

        <div class="row">
            @csrf
            <div class="form-group col-md-12">
                <label for="name">الاسم </label>
                <input type="text" name="name" class="form-control">
            </div>



            <div class="form-group ">
                <label for="email">الايميل</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group ">
                <label for="number">رقم الجوال</label>
                <input type="text" name="number" class="form-control">
            </div>

                <br>
                <br>
            <div class="form-group">
                    <button class="btn btn btn-outline-light"> ارسال <i class="fas fa-paper-plane"></i>   </button>
            </div>
        </div>
    </form>

        
</section>

    


@endsection
