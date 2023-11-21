<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DVDs</title>
</head>
<body>
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
</body>
