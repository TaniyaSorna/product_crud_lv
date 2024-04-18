<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto mt-5">
                <table border="1" cellpadding="10" class="table shadow-lg">
                    <thead>
                        <tr class="table-success">
                            {{-- <td class="fw-bold">id</td> --}}
                            <td class="fw-bold">name</td>
                            <td class="fw-bold">email</td>
                            <td class="fw-bold">phone</td>
                            <td class="fw-bold">Image</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            {{-- <td>{{ $data->id }}</td> --}}
                            <td>{{ $data->Product_Name }}</td>
                            <td>{{ $data->Product_Price }}</td>
                            <td>{{ $data->Product_Qty }}</td>
                            <td>
                                <img src="{{ $data->Product_Img }}" alt="" width="50">

                            </td>
                        </tr>

                    </tbody>
                </table>
                <a href="{{ route('crud.index') }}" class="btn btn-sm btn-success mt-5 px-5 py-3">Index</a>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
