    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <h1>Mangoes list</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Body</td>
            </tr>
            @foreach($fruits as $mango)
            <tr>
                <td>{{$mango['id']}}</td>
                <td>{{$mango['name']}}</td>
                <td>{{$mango['body']}}</td>
            </tr>
            @endforeach
        </table>

        <span>
            {{$fruits->links()}}
        </span>

        <style>
            .w-5 {
                display: none;
            }
        </style>
    </body>

    </html>