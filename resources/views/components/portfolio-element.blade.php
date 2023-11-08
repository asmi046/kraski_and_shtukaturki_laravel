<h2>{{$item->title}}</h2>
        <div class="_project_container">
            <swiper
                :effect="'coverflow'"
                :grab-cursor="true"
                :centered-slides="true"
                :slides-per-view="'auto'"
                :initial-slide="2"
                :coverflow-effect="{
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                }"
                :pagination="true"
                :modules="modules"
                class="mySwiper"
            >

                @if (!empty($item->img))
                    <swiper-slide>
                        <img src="{{$item->img}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img1))
                    <swiper-slide>
                        <img src="{{$item->img1}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img2))
                    <swiper-slide>
                        <img src="{{$item->img2}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img3))
                    <swiper-slide>
                        <img src="{{$item->img3}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img4))
                    <swiper-slide>
                        <img src="{{$item->img4}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img5))
                    <swiper-slide>
                        <img src="{{$item->img5}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img6))
                    <swiper-slide>
                        <img src="{{$item->img6}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img7))
                    <swiper-slide>
                        <img src="{{$item->img7}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img8))
                    <swiper-slide>
                        <img src="{{$item->img8}}" />
                    </swiper-slide>
                @endif

                @if (!empty($item->img9))
                    <swiper-slide>
                        <img src="{{$item->img9}}" />
                    </swiper-slide>
                @endif

            </swiper>
        </div>
