@extends('layouts.app')

@section('title', 'اضافة بيانات الامتياز التجاري ')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="container">
                <div class="section-title">
                     <h2>ادخل بيانات الحجز</h2>
                </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="background-color: #4040406b;">
                        <div class="card-body">
                            <form action="{{route('franchises.store')}}" method="post">
                                <div class="row">
                                 @csrf
                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">الايميل</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">رقم الجوال</label>
                                        <input type="text" name="number" class="form-control">
                                    </div>
                                    









                                    <div class="form-group col-md-6">
                                        <label for="qualification">المؤهل الاكاديمي او التخصص  </label>
                                        <input type="text" name="qualification" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="commercial_experie">سنوات الخبره </label>
                                        <input type="text" name="commercial_experie" class="form-control">
                                    </div> 

                                    <div class="form-group col-md-6">
                                        <label for="area">المنطقة المقترحة لبدء امتياز 1k </label>
                                        <input type="text" name="area" class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="investment_value">حجم الاستثمار للوحده  </label>
                                        <input type="text" name="investment_value" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="solvency">هل تتوفر الملائه الماليه لقيمة الاستثمار؟</label>
                                            <select class="form-select" aria-label="Default select example"  name="solvency" id="1">
                                                <option value="1">نعم تتوفر</option>
                                                <option value="0">لا تتوفر</option>
                                            </select>
                                    </div>

                                  











                                    <div class="form-group col-md-6">
                                        <label for="date">الموعد المقترح لبدء العمل</label>
                                        <input class="form-control" type="date" id="time" name="date" >
                                    </div>

                                    <div class="form-group">
                                        <label for="reason_franchise">ماهو سبب اهتمامك بالامتياز التجاري </label>
                                        <textarea name="reason_franchise" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="know_us">كيف سمعت او تعرفت علينا </label>
                                        <textarea name="know_us" class="form-control"></textarea>
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
