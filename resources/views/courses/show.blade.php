@extends('layouts.app')

@section('title', 'بيانات الكورس')

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

        </section>  
   


       
    
<div class="container">
    <div class="section-title">
      <h2>بيانات المتدربين</h2>
    </div>

    <table class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col">الايميل</th>
                <th scope="col"> رقم الجوال</th>
                <th scope="col"> اسم الكورس</th>
                <th scope="col"> حاله المستخدم</th>

                <th scope="col">عرض</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>

        <tbody>
        @forelse($course->participations as $participation)
                <tr>
                    <td><a class="text-dark" href="{{route('participations.show',$participation)}}"> {{$participation->name}}</a></td>
                    <td>{{$participation->email}}</td>
                    <td>{{$participation->number}}</td>
                    <td>{{$participation->course->name}}</td>
                    
                    @if($participation->available ==0)
                    <td>لم يجتاز</td>
                    @else
                    <td> اجتاز</td>
                    @endif
 

                    <td> <a class="btn btn-outline-primary" href="{{route('participations.edit',$participation)}}">  <i class="fas fa-pen-square"></i></a> </td>

                    <td>
                        <form method="post" action="{{route('participations.destroy',$participation)}}"href="">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>

            @empty
                <p>لا توجد بيانات</p>
            @endforelse
        </tbody>
        
    </table>


    </div>


    


@endsection
