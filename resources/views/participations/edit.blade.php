@extends('layouts.app')

@section('title', 'تعديل البيانات ')

@section('content')
 

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #4040406b;">
                        <div class="card-body">
                            <form action="{{route('participations.update',$participation)}}" method="post">
                                <div class="row">
                                 @csrf
                                 @method('PATCH')
                                 <input type="hidden" name="course_id" @isset($participation) value="{{$participation->course->id}}" @endisset>

                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control"  @isset($participation) value="{{$participation->name}}" @endisset>
                                    </div>

                                    <!--<div class="form-group col-md-12">-->
                                       <!-- <label for="course_id">الكورس </label>-->
                                       <!-- <input type="text" name="course_id" class="form-control"  @isset($participation) value="{{$participation->course->name}}" @endisset>-->
                                   <!-- </div>-->



                                    <div class="form-group col-md-6 ">
                                        <label for="email">الايميل</label>
                                        <input type="email" name="email" class="form-control" @isset($participation) value="{{$participation->email}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6 ">
                                        <label for="available">حاله المستخدم	</label>
                                            <select class="form-select" aria-label="Default select example"  name="available" id="1" @isset($participation) value="{{$participation->available}}" @endisset>>
                                                <option value="0" {{old('available',$participation->available)=="0"? 'selected':''}}  value="$participation->available">لم يجتاز</option>
                                                <option value="1" {{old('available',$participation->available)=="1"? 'selected':''}}  value="$participation->available">اجتاز</option>            

                                            </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">رقم الجوال</label>
                                        <input type="text" name="number" class="form-control" @isset($participation) value="{{$participation->number}}" @endisset>
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
            </div>
        </div>
    </div> 
</section><!-- End Contact Section -->


@endsection
