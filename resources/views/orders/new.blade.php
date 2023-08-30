 @extends('layouts.app')

 @section('title', 'Gửi yêu cầu thiết kế website')
 @section('seo')
     <meta name=description
         content="Gửi yêu cầu thiết kế website, báo giá thiết kế trang web bán hàng online, báo giá thiết kế web công ty">
 @stop
 @php
     $price_id = request()->input('price_id') ?? '';
 @endphp
 @section('content')
     <!-- contact-area -->
     <section class="contact-area pt-120 pb-120">
         <div class="container">
             <div class="container-inner-wrap">
                 <div class="row justify-content-center justify-content-lg-between">
                     <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                         <div class="section-title-two mb-30">
                             <h2 class="sub-title">Gửi yêu cầu thiết kế website<span>!</span></h2>
                         </div>
                         <div class="contact-wrap-content">

                             <form action="{{ route('orders.store') }}" class="contact-form" method="POST">
                                 @csrf
                                 <input type="hidden" name="captcha" value="{{ $hash }}">
                                 <div class="form-grp">
                                     <label for="name">Chọn loại thiết kế <span>*</span></label>
                                     <select required id="price_id" name="price_id" class="form-control frm-ctr">
                                         <option value="">---Chọn---</option>
                                         @foreach ($prices as $price)
                                             <option value="{{ $price->id }}"
                                                 {{ $price_id == $price->id ? 'selected' : '' }}>
                                                 {{ $price->name }}
                                             </option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-grp">
                                     <label for="name">Họ tên <span>*</span></label>
                                     <input type="text" required id="name" name="order[name]"
                                         placeholder="Jon Deo..." class="frm-input">
                                 </div>
                                 <div class="form-grp">
                                     <label for="email">Điện thoại <span>*</span></label>
                                     <input type="text" required name="order[phone]" id="phone"
                                         placeholder="0900...." class="frm-input">
                                 </div>
                                 <div class="form-grp">
                                     <label for="email">Email</label>
                                     <input type="text" name="order[email]" id="email"
                                         placeholder="info.example@.com" class="frm-input">
                                 </div>
                                 <div class="form-grp">
                                     <label for="message">Nội dung yêu cầu<span>*</span></label>
                                     <textarea required name="order[description]" id="description" placeholder="Yêu cầu về trang web cần thiết kế..."></textarea>
                                 </div>
                                 <button type="submit" class="btn">
                                     Gửi yêu cầu
                                     <span></span>
                                 </button>
                             </form>
                         </div>
                     </div>
                     <div class="col-xl-5 col-lg-6 col-md-8">
                         <div class="contact-info-wrap">
                             <div class="contact-img">
                                 <img src="/images/images/contact_img.png" alt="liên hệ thiết kế website">
                             </div>
                             <div class="contact-info-list">
                                 <ul>
                                     <li>
                                         <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                         <div class="content">
                                             <p>{{ Cache::get('address') }}</p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                         <div class="content">
                                             <p>{{ Cache::get('phone') }}</p>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                         <div class="content">
                                             <p>{{ Cache::get('email') }}</p>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <div class="contact-social">
                                 <ul>
                                     <li>
                                         <a href="https://zalo.me/{{ Cache::get('phone') }}">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
                                                 height="48px">
                                                 <path fill="#2962ff"
                                                     d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z" />
                                                 <path fill="#eee"
                                                     d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z" />
                                                 <path fill="#2962ff"
                                                     d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z" />
                                                 <path fill="#2962ff"
                                                     d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z" />
                                                 <path fill="#2962ff"
                                                     d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z" />
                                                 <path fill="#2962ff"
                                                     d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z" />
                                             </svg>
                                         </a>
                                     </li>
                                     <li><a href="{{ Cache::get('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="{{ Cache::get('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="{{ Cache::get('linkedin') }}"><i class="fab fa-linkedin-in"></i></a></li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- contact-area-end -->
 @stop
