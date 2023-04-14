@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div id="kagepisuceng" class="kagepisuceng">

                <ol class="kagepisuceng__indicators">
                    <li class="kagepisuceng__indicator kagepisuceng__indicator_active" data-slide-to="0"></li>
                    <li class="kagepisuceng__indicator" data-slide-to="1"></li>
                    <li class="kagepisuceng__indicator" data-slide-to="2"></li>
                    <li class="kagepisuceng__indicator" data-slide-to="3"></li>
                </ol>

                <div class="kagepisuceng__items">
                    <div class="kagepisuceng__item kagepisuceng__item_1 kagepisuceng__item_active">
                        <div class="kagepisuceng__item_inner">

  <span class="kagepisuceng__item_img">
  <img class="kagepisuceng__item_photo" src="https://img-global.cpcdn.com/recipes/94147/400x400cq70/photo.jpg" alt="">
  </span>

                            <span class="kagepisuceng__item_testimonial">
  <span class="kagepisuceng__item_name">C food </span>
  <span class="kagepisuceng__item_post"> C Food </span>
  <span class="kagepisuceng__item_text"> سي فود  </span>
                                    <div class="number">
	<span class="minus">-</span>
	<input type="text" value="1"/>
	<span class="plus">+</span>
                       <button type="button" class="btn btn-primary add"> طلب المنتج</button>

    </div>
  </span>
                        </div>
                    </div>
                    <div class="kagepisuceng__item kagepisuceng__item_2">
                        <div class="kagepisuceng__item_inner">
  <span class="kagepisuceng__item_img">
  <img src="https://img-global.cpcdn.com/recipes/94147/400x400cq70/photo.jpg" alt="سي فود">
  </span>
                            <span class="kagepisuceng__item_testimonial">
  <span class="kagepisuceng__item_name">C FOOD</span>
  <span class="kagepisuceng__item_post">C FOOD</span>
  <span class="kagepisuceng__item_text">FOOD@gmail.com</span>
                                    <div class="number">
	<span class="minus">-</span>
	<input type="text" value="1"/>
	<span class="plus">+</span>
                       <button type="button" class="btn btn-primary add"> طلب المنتج</button>

    </div>
  </span>
                        </div>
                    </div>
                    <div class="kagepisuceng__item kagepisuceng__item_3">
                        <div class="kagepisuceng__item_inner">
  <span class="kagepisuceng__item_img">
  <img src="https://media.gemini.media/img/large/2019/1/2/2019_1_2_12_52_31_853.jpg" alt="">
  </span>
                            {{-- num 3--}}
                            <span class="kagepisuceng__item_testimonial">
  <span class="kagepisuceng__item_name">C FOOD</span>
  <span class="kagepisuceng__item_post">C FOOD</span>
  <span class="kagepisuceng__item_text">CFOOD@gmail.com</span>
       <div class="number">
	<span class="minus">-</span>
	<input type="text" value="1"/>
	<span class="plus">+</span>
                       <button type="button" class="btn btn-primary add"> طلب المنتج</button>

    </div>
  </span>

                        </div>

                    </div>

                    <div class="kagepisuceng__item kagepisuceng__item_4">
                        <div class="kagepisuceng__item_inner">
  <span class="kagepisuceng__item_img">
  <img src="https://media.gemini.media/img/large/2019/1/2/2019_1_2_12_52_31_853.jpg" alt="">
  </span>

                            <span class="kagepisuceng__item_testimonial">
  <span class="kagepisuceng__item_name">C FOOD</span>
  <span class="kagepisuceng__item_post">C FOOD</span>
  <span class="kagepisuceng__item_text">CFOOD@gmail.com</span>
                                    <div class="number">
	<span class="minus">-</span>
	<input type="text" value="1"/>
	<span class="plus">+</span>
                       <button type="button" class="btn btn-primary add"> طلب المنتج</button>

    </div>
  </span>
                        </div>
                    </div>
                </div>
                <a class="kagepisuceng__control kagepisuceng__control_prev" href="#" role="button"></a>
                <a class="kagepisuceng__control kagepisuceng__control_next" href="#" role="button"></a>
            </div>



            <div id="slider_new" class="slider_new">

                <ol class="slider_indicator_news">
                    <li class="slider_indicator_new slider_indicator_new_active" data-slide-to="0"></li>
                    <li class="slider_indicator_new" data-slide-to="1"></li>

                </ol>

                <div class="slider_items_new">
                    <div class="slider_item_new slider_item_new_1 slider_item_new_active">

                        <div band threed="1" outlines="0" noselect padded>
                            <div class="threed-parent">
                                <div class="threed-child" block>
                                    <div><img src="https://media.gemini.media/img/large/2019/1/2/2019_1_2_12_52_31_853.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider_item_new slider_item_new_2">
                        <div  band threed="1" outlines="0" noselect padded>
                            <div class="threed-parent">
                                <div class="threed-child" block>
                                    <div><img src="https://media.gemini.media/img/large/2019/1/2/2019_1_2_12_52_31_853.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="slider_control_new slider_control_new_prev" href="#" role="button"></a>
                <a class="slider_control_new slider_control_new_next" href="#" role="button"></a>
            </div>




        </section>


    </div><!-- end of content wrapper -->

@endsection


