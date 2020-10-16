<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Agency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div  style="padding: 50px">
    <form method="post" action="{{route('agency.update',['id' => $agency->id])}}">
        @csrf
        <table class="table table-dark">
            <tr>
                <th colspan="2" style="color: lightgoldenrodyellow; font-size: xx-large">Edit agency</th>
            </tr>
            <tr>
                <th>Code</th>
                <td>
                    <input name="code" value="{{$agency->code}}">
                </td>
            </tr>
            <tr>
                <th>Name</th>
                <td>
                    <input name="name" value="{{$agency->name}}">
                </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>
                    <input name="phone" value="{{$agency->phone}}">
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input name="mail" value="{{$agency->mail}}">
                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <textarea name="address">{{$agency->address}}</textarea>
                </td>
            </tr>
            <tr>
                <th>Manager</th>
                <td>
                    <input name="manager" value="{{$agency->manager}}">
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <select name="status">
                        <option value="0"
                            @if($agency->status == 0)
                                selected
                            @endif
                        >Hoat dong</option>
                        <option value="1"
                            @if($agency->status == 1)
                            selected
                            @endif
                        >Ngung hoat dong</option>
                    </select>
                </td>
            </tr>
        </table>
        <div style="float: right">
            <td colspan="2" style="text-align: right"><a href="{{route('agency.index')}}"><button class="btn btn-primary">Cancle</button></a></td>
            <td colspan="2" style="text-align: right"><a href="{{route('agency.update',['id' => $agency->id])}}"><button type="submit" class="btn btn-primary">Update</button></a></td>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
