<!DOCTYPE html>
<html lang="en">

<head>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-primary">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header bg-success"><b>Form Data</b></div>
                <div class="card-body">
                    <form action="{{ url('request/post-data') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input type="Password" name="Password" id="Password" class="form-control">
                        </div>
                        
                        <button onclick="return confirm(' Yakin Mau Menyimpan Data Bro?? ')" name="submit" id="submit" type="submit" class="btn btn-primary">Send Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>