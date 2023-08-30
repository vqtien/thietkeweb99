<!-- trial-area -->
@php
    $hash = sha1(time());
    session()->put('captcha', $hash);
@endphp
<section class="trial-area">
    <div class="container">
        <div class="container-inner-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="kb-trial-wrap">
                        <h2 class="title">Thiết kế website theo yêu cầu riêng biệt?</h2>
                        <div class="kb-trial-form">
                            <form action="{{route('orders.store')}}" class="contact-form">
                                @csrf
                                <input type="hidden" name="callme" value="1">
                                <input type="hidden" name="captcha" value="{{$hash}}">
                                <input type="text" name="phone" required placeholder="Email hoặc số điện thoại">

                                <button type="submit" class="btn">Gửi yêu cầu <span></span></button>
                            </form>
                        </div>
                        <img src="/images/images/trial_shape01.png" alt="Thiết kế website theo yêu cầu" class="trial-shape top-shape wow fadeInDownBig" data-wow-delay=".3s">
                        <img src="/images/images/trial_shape02.png" alt="Thiết kế website theo yêu cầu" class="trial-shape bottom-shape wow fadeInUpBig" data-wow-delay=".3s">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trial-area-end --> 