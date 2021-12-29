@extends('layouts.app')

@section('title', 'تعديل كورس ')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #4040406b;">
                        <div class="card-body">
                            <form action="{{route('courses.update',$course)}}" method="post">
                                <div class="row">
                                 @csrf
                                 @method('PATCH')

                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control" @isset($course) value="{{$course->name}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6 ">
                                        <label for="available">الحاله</label>
                                            <select class="form-select" aria-label="Default select example"  name="available" id="1" @isset($course) value="{{$course->available}}" @endisset>>
                                                <option value="1" {{old('available',$course->available)=="1"? 'selected':''}}  value="$course->available">انتهى التسجيل</option>
                                                <option value="0" {{old('available',$course->available)=="0"? 'selected':''}}  value="$course->available">التسجيل متاح</option>            

                                            </select>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="date">تاريخ التدريب</label>
                                        <input class="form-control" type="date" id="time" name="date" @isset($course) value="{{$course->date}}" @endisset >
                                    </div>



                                    <div class="form-group ">
                                        <label for="content">المحتوى</label>
                                        <textarea type="content" name="content" class="form-control"> {{$course->content}}</textarea>
                                    </div>

                                   
                                        <br>
                                        <br>
                                    <div class="form-group">
                                            <button class="btn btn btn-outline-light"> تعديل <i class="fas fa-paper-plane"></i>   </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section><!-- End Contact Section -->


@endsection
