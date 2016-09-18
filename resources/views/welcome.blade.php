<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sach nha tro</h2>
  <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search" style="text-align:center">
  <form class="form-group" action="" method="GET">
    <select name="feeling" >
        <option value="null">Giá</option>
        <option value="0"> 500000-600000VND</option>
        <option value="1"> 700000-900000VND</option>
        <option value="2"> 100000-1200000VND</option>
    </select>
    <select name="feeling" >
        <option value="null">Dia chi</option>
        @foreach ($houses as $house)
        <option value="0"> {{ $house->address }}</option>
        @endforeach
    </select>
    <select name="feeling" >
        <option value="null">Loai phong</option>
        @foreach ($houses as $house)
        <option value="0">{{ $house->category->name }}</option>
        @endforeach
    </select>
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit" title=""><i class="fa fa-search"></i>Search</button>
    </span>
  </form>
</div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Chủ trọ</th>
        <th>Loại tro</th>
        <th>Địa chỉ</th>
        <th>Số Lượng phòng</th>
        <th>Giá</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($houses as $house)
      <tr>
        <td>{{ $house->id }}</td>
        <td>{{ $house->user->name }}</td>
        <td>{{ $house->category->name }}</td>
        <td>{{ $house->address }}</td>
        <td>{{ $house->number_room }}</td>
        <td>{{ $house->price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{ $houses->appends(Request::except('page'))->links() }}
</div>
</body>
</html>
