@extends('layouts.app')

@section('title', 'تعديل بيانات الامتياز التجاري ')

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
                    <div class="card" style="background-color: #98a175;">
                        <div class="card-body">
                            <form action="{{route('franchises.update',$franchise)}}" method="post">
                                <div class="row">
                                 @csrf
                                 @method('PATCH')

                                    <div class="form-group col-md-12">
                                        <label for="name">الاسم </label>
                                        <input type="text" name="name" class="form-control" @isset($franchise) value="{{$franchise->name}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">الايميل</label>
                                        <input type="email" name="email" class="form-control" @isset($franchise) value="{{$franchise->email}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="number">رقم الجوال</label>
                                        <input type="text" name="number" class="form-control" @isset($franchise) value="{{$franchise->number}}" @endisset>
                                    </div>
                                    









                                    <div class="form-group col-md-6">
                                        <label for="qualification">المؤهل الاكاديمي او التخصص  </label>
                                        <input type="text" name="qualification" class="form-control" @isset($franchise) value="{{$franchise->qualification}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="commercial_experie">سنوات الخبره </label>
                                        <input type="text" name="commercial_experie" class="form-control" @isset($franchise) value="{{$franchise->commercial_experie}}" @endisset>
                                    </div> 

                                    <div class="form-group col-md-6">
                                        <label for="area">المنطقة المقترحة لبدء الامتياز  </label>
                                        <input type="text" name="area" class="form-control" @isset($franchise) value="{{$franchise->area}}" @endisset>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="investment_value">حجم الاستثمار للوحده  </label>
                                        <input type="text" name="investment_value" class="form-control" @isset($franchise) value="{{$franchise->investment_value}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="solvency">هل تتوفر الملائه الماليه لقيمة الاستثمار؟</label>
                                            <select class="form-select" aria-label="Default select example"  name="solvency" id="1">
                                               
                                                <option value="1" {{old('solvency',$franchise->solvency)=="1"? 'selected':''}}  value="$franchise->solvency">نعم تتوفر</option>            
                                                <option value="0" {{old('solvency',$franchise->solvency)=="0"? 'selected':''}}  value="$franchise->solvency">لا تتوفر</option>
                                            </select>
                                    </div>

                                  











                                    <div class="form-group col-md-6">
                                        <label for="date">الموعد المقترح لبدء العمل</label>
                                        <input class="form-control" type="date" id="time" name="date" @isset($franchise) value="{{$franchise->date}}" @endisset>
                                    </div>

                                    <div class="form-group">
                                        <label for="reason_franchise">ماهو سبب اهتمامك بالامتياز التجاري </label>
                                        <textarea name="reason_franchise" class="form-control">{{$franchise->reason_franchise}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="know_us">كيف سمعت او تعرفت علينا </label>
                                        <textarea name="know_us" class="form-control">{{$franchise->know_us}}</textarea>
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