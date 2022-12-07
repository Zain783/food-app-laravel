<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahad Foods</title>

@include('admin.css')
</head>
<body>
    <div class="container">
        @include('admin.header')
        <div class="row jumbotron d-flex align-items-center min-vh-50" style="margin-top:200px; margin-bottom:200px; justify-content:center;">
            <div class="col">
                <div class="card" style="width: 38rem;height: 38rem; border-radius:5%;text-align: center;vertical-align: middle;padding-top:140px;" >
                    <div class="card-body">
                        <h5 class="card-title">Total Food Products</h5>
                        <h1 class="card-subtitle mb-2 text-muted">{{}}</h2>
                       
                       
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 38rem;height: 38rem;border-radius:5%;text-align: center;vertical-align: middle;padding-top:140px;" >
                    <div class="card-body" >
                        <h5 class="card-title">Total Food Orders</h5>
                        <h1 class="card-subtitle mb-2 text-muted">14</h1>
                        
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 38rem;height: 38rem;border-radius:5%;text-align: center;vertical-align: middle;padding-top:140px; " >
                    <div class="card-body">
                        <h5 class="card-title">Total Food Sale</h5>
                        <h1 class="card-subtitle mb-2 text-muted">1400$</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
