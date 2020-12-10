<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .contain {
            position: relative;
            width: 100%;
          }

          .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
          }

          .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 170px;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
          }

          .contain:hover .image {
            opacity: 0.3;
          }

          .contain:hover .middle {
            opacity: 1;
          }

          .text {
            background-color: #000000;
            color: rgb(21, 250, 0);
            font-size: 16px;
            width: 255px;
            height: 345px;
            opacity: 0.6;
          }
          </style>
</head>
<body>
    <div class="container">
        <div class="col-md">
            <a href="/"><button type="button" class="btn btn-primary">Add</button></a>
        </div>
        <br>
        <form action="/search" method="get">
            <div class="col-md-6">
                <input type="search" class="form-control" name="search"  placeholder="Type to search...">
            </div>
            <div class="col-md">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <br>
    </div>
        <div class="container">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($show as $post)
                            <div class="col-sm-3">
                                <div class="contain">
                                    <img src="image/{{$post->image}}" alt="" style="float:left" width="250px" class="image">
                                    <div class="middle">
                                        <div class="text">
                                            <table>
                                                <tr>
                                                    <td>Name : </td>
                                                    <td>{{ $post->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gmail : </td>
                                                    <td>{{ $post->gmail }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Group : </td>
                                                    <td>{{ $post->group }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <a href="/delete/{{ $post->id }}"><button type="button" class="btn btn-primary">Delete</button></a>
                            <a href="/update/{{ $post->id }}"><button type="button" class="btn btn-primary">Edit</button></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
