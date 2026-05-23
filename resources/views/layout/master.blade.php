<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Pengeluaran</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">
      <style>

    body{
        background-color: #f5f7fb;
        font-family: 'Poppins', sans-serif;
    }

    .card{
        border: none;
        border-radius: 20px;
    }

    .table{
        border-radius: 15px;
        overflow: hidden;
    }

    .btn{
        border-radius: 12px;
        transition: 0.3s;
    }

    .btn:hover{
        transform: translateY(-2px);
    }

    .navbar{
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

</style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a href="/pengeluaran" class="navbar-brand">
                Sistem Pencatatan Pengeluaran Harian
            </a>
        </div>
    </nav>

    
    <div class="container">

        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
        @endif

       
        @yield('content')

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>