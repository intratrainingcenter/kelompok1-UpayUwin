<div class="footer-v4">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4 md-margin-bottom-40">
                        <a href="index.html"><img class="footer-logo" src="{{asset('FrontEnd')}}/assets/img/logo-2.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <br>
                        <ul class="list-unstyled address-list margin-bottom-20">
                            <li><i class="fa fa-angle-right"></i>Kedoya , Jakarta Barat</li>
                            <li><i class="fa fa-angle-right"></i>Phone: -------</li>
                            <li><i class="fa fa-angle-right"></i>Fax: -------</li>
                            <li><i class="fa fa-angle-right"></i>Email: intratrainingcenter</li>
                        </ul>

                        <ul class="list-inline shop-social">
                            <li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="gp rounded-md fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <!-- End About -->                    

                    
                </div><!--/end row-->
            </div><!--/end continer-->
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2014 &copy; Unify. ALL Rights Reserved. 
                            <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">  
                        <ul class="list-inline sponsors-icons pull-right">
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div> 
        </div><!--/copyright--> 
    </div>
<!-- Cart Ajax -->
<script src="{{asset('FrontEnd')}}/cart/cart.js"></script>
<script> var frontend = "{{asset('FrontEnd')}}"; var checkout = "{{ route('checkout') }}"; </script>