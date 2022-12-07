{{-- <x-app-layout>
    
</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .div_center {

            text-align: center;
            align-items: center;
        }

        .font_size {

            font-size: 40px;
            padding-bottom: 40px;

        }

        .text_color {

            color: black;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-top: 15px;
        }
    </style>
    
@include('admin.css')
</head>

<body>
    <div class="container">
       @include('admin.header')
        <div class="main-panel" style="margin:auto; width: 48rem;margin-top: 18rem;margin-bottom: 10rem;" >
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">x</button>{{ session()->get('message') }}
                    </div>
                @endif
                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>
                    <form action="{{ url('/addfood') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Product Title:</span>
                                <input type="text" name="foodtitle" class="form-control" style="padding: 12px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                              </div>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Product Description:</span>
                            <input type="text" name="fooddesc" class="form-control" style="padding: 12px; aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                          </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Product Price:</span>
                            <input type="text" name="pricetitle" class="form-control" style="padding: 12px; aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                          </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Product Quantity:</span>
                            <input type="text" name="quantitytitle" class="form-control"  style="padding: 12px; aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                          </div>
                        <div class="div_design">
                            <label>Product Image:</label>
                            <input type="file" name="image" required="">
                        </div>
                        <div class="div_design">

                            <input class="btn btn-primary" type="submit" value="Add product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>

</html>
