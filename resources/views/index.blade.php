@extends("main-layout")

@section("title", "Home")

@section("main")
  <table>
    <thead>
      <tr>
        <th>Title</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dvds as $dvd)
        <tr>
          <td>{{$dvd->title}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
