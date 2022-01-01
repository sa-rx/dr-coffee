@extends('layouts.app')

@section('title', ' اضافة بيانات التوظيف')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
        <div class="section-title">
                     <h2 style="color: #768856;">بيانات التوظيف </h2>
                </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #98a175;">
                        <div class="card-body">
                            <form action="{{route('jobs.store')}}" method="post">
                                <div class="row">
                                 @csrf
                                    <div class="form-group col-md-6">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">رقم الجوال</label>
                                        <input type="text" name="number" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="age">العمر </label>
                                        <input type="number" name="age" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="sex">الجنس</label>
                                            <select class="form-select" aria-label="Default select example"  name="sex" id="1">
                                                <option selected>حدد</option>
                                                <option value="1">ذكر</option>
                                                <option value="0">انثى</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="previous_experience">الخبرات السابقه </label>
                                        <textarea name="previous_experience" class="form-control"></textarea>
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
