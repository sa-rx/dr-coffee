@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')

<div class="container">
            <div style=" color: #122c14;" class="pull-left">
                <h2> الرسائل</h2>
            </div>
    <table  style=" color: #98a175; "  class="table table-striped table-light table-hover  ">
        <thead  class="">
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col">الايميل</th>
                <th scope="col"> الرساله</th>
                <th scope="col">حذف</th>
            </tr>
        </thead>
        
        <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td><a class="text-dark" href="{{route('contacts.show',$contact)}}"> {{$contact->name}}</a></td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->content}}</td>
                    <td>
                    
                        <form method="post" action="{{route('contacts.destroy',$contact)}}"href="">
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
