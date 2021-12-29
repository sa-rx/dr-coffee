@extends('layouts.app')

@section('title', 'الكورسات ')

@section('content')




<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us container">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>الكورسات</h2>
    </div>

    <div class="row">
      @forelse($courses as $course)

        @if($course->available ==1)

        @else


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
              <a class="btn btn-dark" href="{{route('course.show',$course)}}"> سجل الان </a>

            </div>
          </div>

          
        @endif
      @empty
        <p>لا توجد كورسات</p>
      @endforelse
    </div>

    
    
  </div>
</section><!-- End Why Us Section -->








@endsection
