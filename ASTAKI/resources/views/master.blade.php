<!DOCTYPE html>

<html>
    <head>
        <title> ASTAKI </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="/styling.css" rel="stylesheet">
    </head>
    <body>
        <div class="header justify-text-center">
            <div class="logo">
                ASTAKI
            </div>
            <div class="headerMenu">
                <i class="bi bi-person-rolodex"></i>
            </div>
            <div class="headerMenu">
                <i class="bi bi-archive-fill"></i>
            </div>
            <div class="headerMenu">
                <i class="bi bi-cart-fill"></i>
            </div>
            <div class="headerMenu">
                <i class="bi bi-receipt-cutoff"></i>
            </div>
            <div class="headerMenu">
                <i class="bi bi-chat-dots-fill"></i>
            </div>
            <div class="headerMenu">
                <i class="bi bi-person-fill-gear"></i>
            </div>
        </div>

        <div class="content">
            @yield ('content')
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
@yield ('footer')    
</html>