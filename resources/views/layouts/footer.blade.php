<!-- footer-area -->
<footer>
    <div class="copyright-wrap">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="copyright-text">
                            <div class="logo">
                                <a href="{{ route('root') }}"><img src="/images/logo/fw_logo.png" alt=""></a>
                            </div>
                            <p>Copyright &copy; 2021 <a href="{{ route('root') }}">thietkeweb99.com</a>.</p>

                            <p>
                                <a href="tel:{{ Cache::get('phone') }}">
                                    <i class="fas fa-phone-alt"></i>
                                    {{ Cache::get('phone') }}
                                </a>
                            </p>
                            <p>
                                <a href="mailto:{{ Cache::get('email') }}">
                                    <i class="fas fa-envelope-open-text"></i>
                                    {{ Cache::get('email') }}
                                </a>
                            </p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-3 d-none d-md-block">
                        <div class="footer-lang text-right">
                            <ul>
                                <li class="header-social">
                                    <span>Follow :</span>
                                    <a href="{{Cache::get('facebook')}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{Cache::get('twitter')}}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{Cache::get('pinterest')}}"><i class="fab fa-pinterest"></i></a>
                                    <a href="{{Cache::get('linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                    
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="hotline-zalo-ring-wrap">
        <div class="hotline-zalo-ring">
            <div class="hotline-zalo-ring-circle"></div>
            <div class="hotline-zalo-ring-circle-fill"></div>
            <div class="hotline-zalo-ring-img-circle">
                <a href="https://zalo.me/{{ Cache::get('phone') }}">
                    <img src="/images/zalo2.png" alt="Chat zalo" width="35">
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
