<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data['students'] as $index => $result)
          <tr>
            <td> {{$index+1}} </td>
            <td> {{$result['npm']}} </td>
            <td> {{$result['name']}} </td>
            <td> {{$result['gender']}} </td>
            <td> {{$result['alamat']}} </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>