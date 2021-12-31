@extends('layouts.app')

@section('title', ' بيانات الامتياز التجاري ')

@section('content')
 
<div class="container">
            <div style=" color: #122c14;" class="pull-left">
                <h2>بيانات الامتياز التجاري</h2>
            </div>
    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col"> رقم الجوال</th>
                <th scope="col"> التخصص</th>
                <th scope="col"> توفر الملائه الماليه؟</th>

                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>

        <tbody>
            @forelse($franchises as $franchise)
                <tr>
                    <td><a class="text-dark" href="{{route('franchises.show',$franchise)}}"> {{$franchise->name}}</a></td>
                    <td>{{$franchise->number}}</td>
                    <td>{{$franchise->qualification}}</td>

                    @if($franchise->solvency == 0)
                    <td>لا تتوفر</td>

                    @else
                    <td> تتوفر</td>

                    @endif
                    
                    

                    <td> <a class="btn btn-outline-primary" href="{{route('franchises.edit',$franchise)}}">  <i class="fas fa-pen-square"></i></a> </td>

                    <td>
                        <form method="post" action="{{route('franchises.destroy',$franchise)}}"href="">
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
