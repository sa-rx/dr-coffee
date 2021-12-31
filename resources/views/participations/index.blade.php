@extends('layouts.app')

@section('title', 'بيانات المتدربين')

@section('content')

<div class="container">
            <div style=" color: #122c14;" class="pull-left">
                <h2>بيانات المتدربين</h2>
            </div>
    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
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
            @forelse($participations as $participation)
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
