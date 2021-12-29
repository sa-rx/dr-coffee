@extends('layouts.app')

@section('title', 'اضافة كورس ')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #4040406b;">
                        <div class="card-body">
                            <form action="{{route('courses.store')}}" method="post">
                                <div class="row">
                                 @csrf
                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="available">الحاله</label>
                                            <select class="form-select" aria-label="Default select example"  name="available" id="1">
                                                <option value="1">انتهى </option>
                                                <option value="0">التسجيل متاح</option>

                                            </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">تاريخ التدريب</label>
                                        <input class="form-control" type="date" id="time" name="date" >
                                    </div>

                                    <div class="form-group ">
                                        <label for="content">المحتوى</label>
                                        <textarea type="content" name="content" class="form-control"></textarea>
                                    </div>



                                        <br>
                                        <br>
                                    <div class="form-group">
                                            <button class="btn btn btn-outline-light"> اضافة <i class="fas fa-paper-plane"></i>   </button>
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
