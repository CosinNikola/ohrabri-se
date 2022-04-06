@extends('adminPages/adminNav')
@section('content')
<div class="w-100 mx-2">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">ID</th>
        <th scope="col">Ime</th>
        <th scope="col">Prezime</th>
        <th scope="col">Specijalizacija</th>
        <th scope="col">Slika</th>
        <th scope="col">Email</th>
        <th scope="col">Br. Telefona</th>
      </tr>
    </thead>
    <tbody>
      @foreach($doktori as $doktor)
      <tr class="text-center">
      <th scope="row">{{$doktor->id}}</th>
      <td>{{$doktor->ime}}</td>
      <td>{{$doktor->prezime}}</td>
      <td>{{$doktor->specijalizacija}}</td>
      <td>{{$doktor->slika}}</td>
      <td>{{$doktor->email}}</td>
      <td>{{$doktor->brTel}}</td>
        <td><a class="btn btn-primary" href="/admin/doktori/update/{{$doktor->id}}">Edit</a></td>
        <td>{!!Form::open(['action'=>['App\Http\Controllers\DoktorController@destroy', $doktor->id], 'method'=>'POST'])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close()!!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/doktori/create">Kreiraj doktora</a>
</div>
@endsection