<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .error {
            color: #ae1c17;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('radars/create') }}">Add Station</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('radars/all') }}">Display Stations</a>
            </li>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item active">
                    <a class="nav-link"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                        <span class="sr-only">(current)</span></a>
                </li>
            @endforeach


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


@if(Session::has('success'))

    <div class="alert alert-success">
           {{Session::get('success')}}
    </div>
    @endif


@if(Session::has('error'))
     <div class="alert alert-danger">
         {{Session::get('error')}}
     </div>
@endif

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('messages.station name')}}</th>
        <th scope="col">{{__('messages.location')}}</th>
        <th scope="col">{{__('messages.supply date')}}</th>
        <th scope="col">{{__('messages.installation')}}</th>
        <th scope="col">{{__('messages.operation_date')}}</th>
        <th scope="col">{{__('messages.delivery')}}</th>
        <th scope="col">{{__('messages.status_of_tower')}}</th>
        <th scope="col">{{__('messages.LetterDate')}}</th>
        <th scope="col">{{__('messages.Remarks')}}</th>
        <th scope="col">صوره المحطة</th>
        <th scope="col">{{__('messages.operation')}}</th>


    </tr>
    </thead>
    <tbody>


    @foreach($radars as $radar)
        <tr>
            <th scope="row">{{$radar -> id}}</th>
            <td>{{$radar -> station_name}}</td>
            <td>{{$radar -> location}}</td>
            <td>{{$radar -> supply_date}}</td>
            <td>{{$radar->installation}}</td>
            <td>{{$radar->operation_date}}</td>
            <td>{{$radar->delivery}}</td>
            <td>{{$radar->status_of_tower}}</td>
            <td>{{$radar->LetterDate}}</td>
            <td>{{$radar->Remarks}}</td>

            @if($radar->photo)
{{--            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->photo)}}"></td>--}}
            <td><embed src="{{asset('images/radars/'.$radar->photo)}}" width="300px" height ="300px"></td>
            @else
                <td></td>
            @endif

            <td>
                <a href="{{url('radars/edit/'.$radar -> id)}}" class="btn btn-success"> {{__('messages.update')}}</a>
                {{--                <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>--}}
            </td>

        </tr>
    @endforeach

    </tbody>



    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


</table>
</body>
</html>
