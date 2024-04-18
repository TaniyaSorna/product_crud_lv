<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-9 mx-auto mt-5">
                <form action="{{ route('crud.update', $data->id) }}" method="post" enctype="multipart/form-data"
                    class="bg-white px-5 pb-5 mx-auto shadow-lg">
                    @csrf
                    @method('PUT')
                    <label for="" class="mt-5">Product Name</label>
                    <input type="text" name="name" value="{{ $data->Product_Name }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Product Price</label>
                    <input type="text" name="price" value="{{ $data->Product_Price }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Product Qty</label>
                    <input type="text" name="qty" value="{{ $data->Product_Qty }}"
                        class="form-control form-input form-control-sm"><br>
                    <label for="">Product Image</label>
                    <input type="file" name="img" value="{{ $data->Product_Img }}"><br><br>
                    <button type="submit" class="btn btn-sm btn-success  mx-3 px-5 py-3">Submit</button>

                </form>

                <a href="{{ route('crud.index') }}" class="btn btn-sm btn-success mt-5 px-5 py-3">Index</a>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
