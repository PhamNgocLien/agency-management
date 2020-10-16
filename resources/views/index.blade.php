<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agency Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div style="padding: 50px">
    <div>
        <div class="input-group mb-3" style="width: 300px; float: right">
            <form action="{{route('search')}}" method="get">
                <input type="text" name="keyword" id="" placeholder="Please input keyword">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div>
            <h2>List agency</h2>
            <div style=" margin: 20px">
                <a href="{{route('agency.create')}}"><button class="btn btn-primary">Create new</button></a>
            </div>
            <table class="table table-dark">
                <thead></thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Manager</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tbody>
                @forelse($agencies as $key => $agency)
                    <tr>
                        <td>{{$agency->code}}</td>
                        <td>{{$agency->name}}</td>
                        <td>{{$agency->phone}}</td>
                        <td>{{$agency->mail}}</td>
                        <td>{{$agency->address}}</td>
                        <td>{{$agency->manager}}</td>
                        <td>
                            @if($agency->status == 0)
                                Dang hoat dong
                            @else
                                Ngung hoat dong
                            @endif
                        </td>
                        <td>
                            <a href="{{route('agency.edit',['id' => $agency->id])}}">
                                <button class="btn btn-info">Edit</button>
                            </a>
                            <a href="{{route('agency.delete',['id' => $agency->id])}}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
