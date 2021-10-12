@extends('layouts.front')

@section('content')



<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

    <div class="container-fluid">

        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>

        <div class="top-product-style">

            <div>

                <div id="electro1">
                    <div class="custom-row-2">

                        @foreach($allProducts as $product)
                            @include('product._single_product')
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
