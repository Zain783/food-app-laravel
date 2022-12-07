
    <header class="header" style="justify-content: space-between;">

        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
           <a href="{{url('redirect')}}">Home</a>
            <a href="{{url('addfood')}}">Add Food</a>
            <a href="{{url('showsproducts')}}">Show Foods</a>
            <a href="{{url('orders')}}">Orders</a>
           
            
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart">

        </div>

        {{-- <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form> --}}

    </header>