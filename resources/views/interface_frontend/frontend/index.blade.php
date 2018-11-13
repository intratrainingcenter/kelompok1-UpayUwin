@extends('index_frontend')
@section('content')
    <!--=== Slider ===-->
    @include('interface_frontend.master_frontend.element.slider')
    <!--=== End Slider ===-->

    <!--=== Product Content ===-->
    <div class="container content-md">
        <!--=== Illustration v1 ===-->
            @include('interface_frontend.master_frontend.element.promo')
        <!--=== End Illustration v1 ===-->

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Featured products</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

                <!--=== Illustration v3 ===-->
                    @include('interface_frontend.master_frontend.element.illustration')
                <!--=== End Illustration v3 ===-->            
    </div>
    <!--=== End Product Content ===-->

    <!--=== Twitter-Block ===-->
        @include('interface_frontend.master_frontend.element.twitter')
    <!--=== End Twitter-Block ===-->

    <div class="container">
            <!--=== Product Service ===-->
                @include('interface_frontend.master_frontend.element.service')
            <!--=== End Product Service ===-->
        
    </div><!--/end cotnainer-->

    <!--=== Collection Banner ===-->
        @include('interface_frontend.master_frontend.element.collection')
    <!--=== End Collection Banner ===-->

        <!--=== Sponsors ===-->
                @include('interface_frontend.master_frontend.element.sponsors')
        <!--=== End Sponsors ===-->

            <!--=== Shop Suvbscribe ===-->
                @include('interface_frontend.master_frontend.shop.subscribe')
            <!--=== End Shop Suvbscribe ===-->
@endsection