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


              <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapse{{$course->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
              سجل الان
              </a>
              
              <br>
              <br>
              
                      <div class="collapse" id="collapse{{$course->id}}">
                        <div class="">
                        <div class="section-title">
                            <br>
                            <br>
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
                        </div>
                      </div>


                  <div class="collapse">
                          
                  
                         
                  </div>
               
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
