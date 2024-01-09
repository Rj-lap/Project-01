  
     <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Dr, R K Desai Marg,Opp.Mission Hospital,Athwalines,Athwa,Surat,Gujarat-395001</span>
                                <p>(+91) 9104670839 , 8758638651 , 9510483601 ,9106964366
                                    <br>rajaprasad.mca22@scet.ac.in , kausalvasoya.mca22@scet.ac.in , 
                                        dhruvparvadiya.mca22@scet.ac.in , dhrupeshsingala.mca22@scet.ac.in</p>
                            </div>
                           
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Our Service </a></li>
                                    <li> <a href="#">Login  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>All Rights Reserved. RKD-2<a href="https://html.design/"> Pvt.Ltd</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{url('pomato/')}}/js/jquery.min.js"></script>
    <script src="{{url('pomato/')}}/js/popper.min.js"></script>
    <script src="{{url('pomato/')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('pomato/')}}/js/jquery-3.0.0.min.js"></script>
    <script src="{{url('pomato/')}}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{url('pomato/')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('pomato/')}}/js/custom.js"></script>
    <!-- javascript -->
    <script src="{{url('pomato/')}}/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    @stack('filter')
    @stack('payment')
</body>

</html>