@extends('adminPages/adminNav')
@section('content')
<div class="w-75 mx-2">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">ID</th>
        <th scope="col">Ime</th>
        <th scope="col">Email</th>
        <th scope="col">Role ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach($korisnici as $korisnik)
      <tr class="text-center">
      <th scope="row">{{$korisnik->id}}</th>
      <td>{{$korisnik->name}}</td>
      <td>{{$korisnik->email}}</td>
      <td>
        @if($korisnik->role_id === 1)
        Administrator
        @elseif($korisnik->role_id === 2)
        Doktor
        @else
        Korisnik
        @endif
      </td>
        <td><a class="btn btn-primary" href="/admin/korisnici/{{$korisnik->id}}">Edit</a></td>
        <td>{!!Form::open(['action'=>['App\Http\Controllers\UsersController@destroy', $korisnik->id], 'method'=>'POST'])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close()!!}
</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/users/create">Kreiraj korisnika</a>
</div>
@endsection