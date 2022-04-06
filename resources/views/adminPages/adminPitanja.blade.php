@extends('adminPages/adminNav')
@section('content')
<div class="w-100 mx-2">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">ID</th>
        <th scope="col">ID Autora</th>
        <th scope="col">Ime autora</th>
        <th scope="col">Naslov</th>
        <th scope="col">Sadržaj</th>
        <th scope="col">Ime doktora</th>
        <th scope="col">Sadržaj odgovora</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pitanja as $pitanje)
      <tr class="text-center">
      <th scope="row">{{$pitanje->id}}</th>
      <td>{{$pitanje->id_autora}}</td>
      <td>{{$pitanje->ime_autora}}</td>
      <td>{{$pitanje->naslov}}</td>
      <td>{{$pitanje->sadrzaj}}</td>
      <td>{{$pitanje->imeDoktora}}</td>
      <td>{{$pitanje->sadrzajOdgovora}}</td>
        <td>{!!Form::open(['action'=>['App\Http\Controllers\AdminController@deletePitanje', $pitanje->id], 'method'=>'POST'])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close()!!}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection