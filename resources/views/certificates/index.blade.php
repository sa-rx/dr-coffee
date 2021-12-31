@extends('layouts.app')

@section('title', 'بيانات المتدربين')

@section('content')

<div class="container">

    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col">الايميل</th>
                <th scope="col"> رقم الجوال</th>
                <th scope="col"> تاريخ التدريب </th>
                <th scope="col">حذف</th>
            </tr>
        </thead> 

        <tbody>
            @forelse($certificates as $certificate)
                <tr>
                    <td><a class="text-dark" href="{{route('certificates.show',$certificate)}}"> {{$certificate->name}}</a></td>
                    <td>{{$certificate->email}}</td>
                    <td>{{$certificate->number}}</td>
                    <td>{{$certificate->date}}</td>
                    <td>
                        <form method="post" action="{{route('certificates.destroy',$certificate)}}"href="">
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
