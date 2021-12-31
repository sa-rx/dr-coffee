@extends('layouts.app')

@section('title', ' بيانات الحجز ')

@section('content')

<div class="container">

    <table class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col">الايميل</th>
                <th scope="col"> رقم الجوال</th>
                <th scope="col"> تاريخ الحجز </th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>

        <tbody>
            @forelse($events as $event)
                <tr>
                    <td><a class="text-dark" href="{{route('events.show',$event)}}"> {{$event->name}}</a></td>
                    <td>{{$event->email}}</td>
                    <td>{{$event->number}}</td>
                    <td>{{$event->date}}</td>
                    

                    <td> <a class="btn btn-outline-primary" href="{{route('events.edit',$event)}}">  <i class="fas fa-pen-square"></i></a> </td>

                    <td>
                        <form method="post" action="{{route('events.destroy',$event)}}"href="">
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
