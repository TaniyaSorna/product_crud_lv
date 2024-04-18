<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-9 mx-auto mt-5">
                <form action="{{ route('crud.store') }}" method="post" enctype="multipart/form-data"
                    class="bg-white px-5 pb-5 mx-auto shadow-lg">
                    @csrf
                    <label for="" class="mt-5">Product Name</label>
                    <input type="text" name="name" class="form-control form-input form-control-sm"><br>
                    <label for="">Product Price</label>
                    <input type="text" name="price" class="form-control form-input form-control-sm"><br>
                    <label for="">Product Qty</label>
                    <input type="text" name="qty" class="form-control form-input form-control-sm"><br>
                    <label for="">Product Image</label>
                    <input type="file" name="img"><br><br>
                    <button type="submit" class="btn btn-sm btn-success  mx-3 px-5 py-3">Submit</button>
                </form>
                <a href="{{ route('crud.index') }}" class="btn btn-sm btn-danger mt-5 px-5 py-3">Index</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
