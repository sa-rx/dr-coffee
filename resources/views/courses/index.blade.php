@extends('layouts.app')

@section('title', 'الكورسات ')

@section('content')

<div class="container">
    <a  style=" color: #98a175; "  class=" btn btn-outline-light mx-auto mb-2" href="{{route('courses.create')}}"><i class="fas fa-plus-square"></i>  اضافة كورس </a>
    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col"> الحاله</th>
                <th scope="col"> تاريخ التدريب </th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td><a class="text-dark" href="{{route('courses.show',$course)}}"> {{$course->name}}</a></td>
                    
                    @if($course->available ==0)
                    <td>التسجيل متاح</td>
                    @else
                    <td>  انتهى التسجيل</td>
                    @endif

                    <td>{{$course->date}}</td>

                    <td> <a class="btn btn-outline-primary" href="{{route('courses.edit',$course)}}">  <i class="fas fa-pen-square"></i></a> </td>

                    <td>
                        <form method="post" action="{{route('courses.destroy',$course)}}"href="">
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
