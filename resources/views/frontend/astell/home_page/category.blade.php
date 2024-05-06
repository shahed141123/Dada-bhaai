<section class="product">
    <div class="tab-ty">

        <ul>
            @foreach ($categories as $key => $category)
                <li>
                    <a href="javascript:void(0);"
                        class="n{{ $key }} {{ $loop->first ? 'on' : '' }}">{{ $category->category_name }}</a>
                </li>
            @endforeach


        </ul>

    </div>
    @foreach ($categories as $key => $category)
        <div
            class="tab-cont n{{ $key }} {{ $loop->first ? 'on' : '' }}"style="background-image: url('images/%40p_bg01.png')">

            <div class="wrap">
                <div class="wl">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            @foreach ($category->products as $image)
                                <li class="swiper-slide">
                                    <a href="">
                                        <img src="{{ asset($image->product_image) }}"
                                            alt="{{ $image->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="wr">
                    @foreach ($category->products as $key => $product)
                        <strong class="tmpProductInfo tmpProductInfo_0"
                            {{ $loop->first ? '' : 'style=display:none;' }}>{{ $product->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_0" {{ $loop->first ? '' : 'style=display:none;' }}>
                            The A&amp;ultima SP3000 is the flagship product that is the
                            essence of everything learned and engineered over the last 10+
                            years of digital music processing.
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_0"
                            {{ $loop->first ? '' : 'style=display:none;' }}>
                            <a href="{{ url('product-single' . '/' . $product->id) }}" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="1.png" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="2.png" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="iF_23.jpg" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="2023vgp.png" />
                            </div>
                        </div>
                    @endforeach

                    {{-- <strong class="tmpProductInfo tmpProductInfo_1">SP2000T</strong>

                    <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                        The SP2000T combines the OP AMP configuration of our SP2000
                        with a nostalgic vacuum TUBE AMP, adding a vintage feel to the
                        portable player.
                    </p>

                    <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                        <a href="" class="lnk-ty1">Find store</a>
                        <div class="mark-group">
                            <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                alt="RED_2022.jpg" />
                            <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                alt="iF_GoldAward2022_gold_l_RGB.jpg" />
                        </div>
                    </div> --}}


                    <div class="list">

                        <div class="swiper-container">

                            <ul class="swiper-wrapper">

                                @foreach ($category->products as $key => $image)
                                    <li class="swiper-slide">
                                        <a href="javascript:;" class="{{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($image->product_image) }}" alt="sp3000_list_1.png" />
                                            <span>SP3000</span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-slider"></div>
                    </div>

                </div>

            </div>
        </div>
    @endforeach
    {{-- <div class="tab-cont n2" style="background-image: url('images/%40p_bg01.png')">
        <div class="wrap">
            <div class="wl">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKT5P2_main_1.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="earphone_AKT1p_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="earphone_AKT5p_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="aura_list.jpg" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="zero2 (1).png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Odyssey_list.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="pathfinder.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="uw100_list.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="akzero1_02.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="solarisx_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="ak_t9ie_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="layla_aion_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="diana_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="billie_jean_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="michelle_limited_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Michelle_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKT8iE_2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Layla_2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Roxanne_2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Angie_2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Rosie_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKT8iE_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Layla_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="Angie_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKR03_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKR02_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                alt="AKR01_01.png" />
                        </li>
                    </ul>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="wr">
                <strong class="tmpProductInfo tmpProductInfo_0">AK T5p 2nd Generation</strong>
                <p class="tmpProductInfo tmpProductInfo_0">
                    AK T5p 2nd Generation is the latest collaboration between
                    beyerdynamic and Astell&amp;Kern, market leader in premium
                    portable music players.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_0">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">AK T1p</strong>
                <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                    Beyerdynamic&rsquo;s top-of-the line T1 model returns with a
                    new and improved tesla driver and lowered ohm impedance in
                    collaboration with Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">AK T5P
                </strong>
                <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                    AK T5p offers an amazing experience to those who seek the
                    ultimate sound quality in a portable device.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">AURA</strong>
                <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                    Expertly crafted in Germany, AURA blends innovation,
                    sophisticated styling and cutting-edge technology to create a
                    listening experience like no other.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">AK ZERO2</strong>
                <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                    The AK ZERO2 is an IEM that features a &ldquo;Quad-brid&rdquo;
                    design centered around an advanced driver array and Super Low
                    Noise Cross-Over Network perfectly tuned.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF_23.jpg" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">ODYSSEY</strong>
                <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                    Astell&amp;Kern and Empire Ears completed Odyssey to present
                    our most extraordinary sound, containing the essence of
                    A&amp;K and Empire Ears.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">PATHFINDER</strong>
                <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                    A whole new hybrid IEM jointly developed by Campfire Audio and
                    Astell&amp;Kern, offers amazing new technologies and sound.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2023_winner.png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_7" style="display: none">AK UW100</strong>
                <p class="tmpProductInfo tmpProductInfo_7" style="display: none">
                    The AK UW100, Astell&amp;Kern's first fully wireless earphone,
                    based on our proprietary audio technology, provides
                    uncompromising wireless Hi-Fi sound with no cables required.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_7" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="RED_2022.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="1 (1).png" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2 (1).png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_8" style="display: none">AK ZERO1</strong>
                <p class="tmpProductInfo tmpProductInfo_8" style="display: none">
                    The AK ZERO1 is a brand-new In-Ear Monitor product from
                    Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_8" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF-DESIGN-AWARD-2022_l_RGB_jpg.jpg" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_9" style="display: none">AK SOLARIS X</strong>
                <p class="tmpProductInfo tmpProductInfo_9" style="display: none">
                    AK SOLARIS X is a culmination of Campfire Audio's technology.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_9" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_10" style="display: none">AK T9iE</strong>
                <p class="tmpProductInfo tmpProductInfo_10" style="display: none">
                    The AK T9iE is the third in-ear collaboration product by
                    beyerdynamic and Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_10" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_11" style="display: none">Layla AION</strong>
                <p class="tmpProductInfo tmpProductInfo_11" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_11" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_12" style="display: none">Diana</strong>
                <p class="tmpProductInfo tmpProductInfo_12" style="display: none">
                    Diana is a product created by combining the world renowned IEM
                    technology of Jerry Harvey Audio.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_12" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_13" style="display: none">Bille Jean</strong>
                <p class="tmpProductInfo tmpProductInfo_13" style="display: none">
                    Billie Jean is the latest collaboration of In-Ear-Monitors
                    (IEMs) between Astell&amp;Kern and Jerry Harvey Audio.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_13" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_14" style="display: none">Michelle Limited</strong>
                <p class="tmpProductInfo tmpProductInfo_14" style="display: none">
                    Michelle Limited, a special edition product produced in Korea,
                    is the result of a dedicated collaboration between
                    Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_14" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_15" style="display: none">Michelle</strong>
                <p class="tmpProductInfo tmpProductInfo_15" style="display: none">
                    The Michelle represents another collaboration to provide a
                    more affordable version for all music lovers.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_15" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_16" style="display: none">AK T8iE Mk II</strong>
                <p class="tmpProductInfo tmpProductInfo_16" style="display: none">
                    The AK T8iE Mk&#8545; succeeds and improves on the AK T8iE,
                    the world&rsquo;s first Tesla in-ear headphone,
                    collaboratively developed by Astell&amp;Kern and beyerdynamic.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_16" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_17" style="display: none">LAYLA II</strong>
                <p class="tmpProductInfo tmpProductInfo_17" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_17" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_18" style="display: none">ROXANNE II</strong>
                <p class="tmpProductInfo tmpProductInfo_18" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_18" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_19" style="display: none">ANGIE II</strong>
                <p class="tmpProductInfo tmpProductInfo_19" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_19" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_20" style="display: none">ROSIE</strong>
                <p class="tmpProductInfo tmpProductInfo_20" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_20" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_21" style="display: none">AK T8iE</strong>
                <p class="tmpProductInfo tmpProductInfo_21" style="display: none">
                    The Essence OF Tesla Techonolgy
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_21" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_22" style="display: none">LAYLA</strong>
                <p class="tmpProductInfo tmpProductInfo_22" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_22" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_23" style="display: none">ANGIE</strong>
                <p class="tmpProductInfo tmpProductInfo_23" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_23" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_24" style="display: none">AKRO3</strong>
                <p class="tmpProductInfo tmpProductInfo_24" style="display: none">
                    Jerry Harvey Audio custom earphones world's leading creator
                    and collaboration Astell&amp;Kern
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_24" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_25" style="display: none">AKRO2</strong>
                <p class="tmpProductInfo tmpProductInfo_25" style="display: none">
                    The Balanced Armature (BA) driver used in the AKR02 is the
                    same unit found in their BA-SS earphones which gives a deep
                    and rich sound.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_25" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_26" style="display: none">AKR01</strong>
                <p class="tmpProductInfo tmpProductInfo_26" style="display: none">
                    The AKR01 with a balanced armature driver and special tuning
                    are premium earphones that deliver Astell&amp;Kern's deep and
                    rich sound.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_26" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <div class="list">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="product_detail.html" class="active">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT5P2_main_1.png" />
                                    <span>AK T5p 2nd Generation</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="earphone_AKT1p_01.png" />
                                    <span>AK T1p</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="earphone_AKT5p_01.png" />
                                    <span>AK T5P </span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="aura_list.jpg" />
                                    <span>AURA</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="zero2 (1).png" />
                                    <span>AK ZERO2</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Odyssey_list.png" />
                                    <span>ODYSSEY</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="pathfinder.png" />
                                    <span>PATHFINDER</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="uw100_list.png" />
                                    <span>AK UW100</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="akzero1_02.png" />
                                    <span>AK ZERO1</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="solarisx_01.png" />
                                    <span>AK SOLARIS X</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="ak_t9ie_01.png" />
                                    <span>AK T9iE</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="layla_aion_01.png" />
                                    <span>Layla AION</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="diana_01.png" />
                                    <span>Diana</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="billie_jean_01.png" />
                                    <span>Bille Jean</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="michelle_limited_01.png" />
                                    <span>Michelle Limited</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Michelle_01.png" />
                                    <span>Michelle</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT8iE_2_01.png" />
                                    <span>AK T8iE Mk II</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Layla_2_01.png" />
                                    <span>LAYLA II</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Roxanne_2_01.png" />
                                    <span>ROXANNE II</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Angie_2_01.png" />
                                    <span>ANGIE II</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Rosie_01.png" />
                                    <span>ROSIE</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT8iE_01.png" />
                                    <span>AK T8iE</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Layla_01.png" />
                                    <span>LAYLA</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Angie_01.png" />
                                    <span>ANGIE</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR03_01.png" />
                                    <span>AKRO3</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR02_01.png" />
                                    <span>AKRO2</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR01_01.png" />
                                    <span>AKR01</span>
                                </a>
                            </li>
                        </ul>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-slider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-cont n3" style="background-image: url('images/%40p_bg01.png')">
        <div class="wrap">
            <div class="wl">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="ca1000t_list.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="ca1000_list.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="acro_l1000.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="BE100_B.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="acro_s1000.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="AKT1_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                alt="AK500Series.png" />
                        </li>
                    </ul>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="wr">
                <strong class="tmpProductInfo tmpProductInfo_0">ACRO CA1000T</strong>
                <p class="tmpProductInfo tmpProductInfo_0">
                    ACRO CA1000T is an all-in-one Head-Fi audio system created for
                    those who want to enjoy the best sound wherever they are.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_0">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2023_winner.png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">ACRO CA1000</strong>
                <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                    The ACRO CA1000 sets a new standard for headphone amplifiers,
                    providing powerful and clear sound with the features never
                    available on any other headphone amplifiers.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="RED_2022.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF-DESIGN-AWARD-2022_l_RGB_jpg.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2023_winner.png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">ACRO L1000</strong>
                <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                    The ACRO L1000 is the first Desktop Headphone Amplifier from
                    Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">ACRO BE100</strong>
                <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                    The Astell&amp;Kern ACRO BE100 is a Bluetooth speaker that
                    provides Hi-Fi sound quality with wireless freedom.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="RED_2022.jpg" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">ACRO S1000</strong>
                <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                    The ACRO S1000 enclosure not only provides acoustic benefits,
                    but it completes the aesthetically pleasing design.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">AK T1</strong>
                <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                    The AK T1 is Astell&amp;Kern's very first all-in-one sound
                    system.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">AK500 Series</strong>
                <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                    The AK500 Series consists of the AK500N (network player),
                    AK500A (power amplifier), and AK500P (power supply unit).
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <div class="list">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="product_detail.html" class="active">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="ca1000t_list.png" />
                                    <span>ACRO CA1000T</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="ca1000_list.png" />
                                    <span>ACRO CA1000</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="acro_l1000.png" />
                                    <span>ACRO L1000</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="BE100_B.png" />
                                    <span>ACRO BE100</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="acro_s1000.png" />
                                    <span>ACRO S1000</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="AKT1_01.png" />
                                    <span>AK T1</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="AK500Series.png" />
                                    <span>AK500 Series</span>
                                </a>
                            </li>
                        </ul>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-slider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-cont n4" style="background-image: url('images/%40p_bg01.png')">
        <div class="wrap">
            <div class="wl">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="se300_case_list2.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="list1 (1).png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sp3000_case_list.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="11 (1).png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sr25-mk2-case_1.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SP2000T_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="se180_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="kannalpha_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SE200_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SR25_Case_02.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SA700_Case__01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SP2000_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="KANNCUBE_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="2-Split.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="3-Split.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SP1000M_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SE100_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SR15_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SP1000_CoCase_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="SP1000_Case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK70_2_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK380_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK320_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK240_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK120_2_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK100_2_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK70_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK70_ivory_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AKJr_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK120_case_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="hc3_list (1).png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="hc2.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pep11.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pee51.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pee41_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pee31_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef21_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef31_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef30_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef29_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef28_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pee12_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef25_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef24_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef23_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef22_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef16_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef15_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef14_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef13_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="PEF12_PEF21_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="PEF12_PEF21_02.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pef11_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pa10_list-(1).png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sem2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sem3.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sem2_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="sp1000amp_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK380_AMP_Copper_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK380_AMP_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK10_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="AK-XB10_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pem15_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pem14_main_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pem13_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="pem12_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="PEM11_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="aks02_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="aks01_01.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="PRF11_Single.png" />
                        </li>
                        <li class="swiper-slide">
                            <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                alt="PRF11_Stereo.png" />
                        </li>
                    </ul>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="wr">
                <strong class="tmpProductInfo tmpProductInfo_0">SE300 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_0">
                    The case is wrapped around the entire product, providing
                    excellent protection and the best grip with a perfect fit.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_0">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">SR35 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                    The material selected for SR35 Leather Case was created by
                    Synt3, a world-class manufacturer of polyurethane located in
                    Milan, Italy.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">SP3000 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                    The case is made of high-quality vegetable leather from
                    BADALASSI CARLO, and boasts a high level of completeness that
                    matches the dignity of the A&amp;ultima SP3000.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">KANN MAX Case</strong>
                <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                    The case of KANN MAX is made of high-quality vegetable tanned
                    leather from BADALASSI CARLO and CONCERIA WALPIER
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">SR25 MKII Case</strong>
                <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                    The material selected for SR25 MKII Leather Case was created
                    by Synt3, a world-class manufacturer of polyurethane located
                    in Milan, Italy.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">SP2000T Case</strong>
                <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                    Exceptionally high quality makes Badalassi Carlo the perfect
                    choice of leather case for the SP2000T in the A&amp;Ultima
                    range.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">SE180 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                    In order to raise the bar of the SE180 even higher, much
                    attention was devoted to the selection of leather for the
                    case.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_7" style="display: none">KANN ALPHA Case</strong>
                <p class="tmpProductInfo tmpProductInfo_7" style="display: none">
                    The KANN ALPHA leather case is featured in two colors that
                    best match the concept of the product.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_7" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_8" style="display: none">SE200 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_8" style="display: none">
                    The unique curved part of the SE200 case is made by stretching
                    the leather by hand in order to achieve a perfect fit.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_8" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_9" style="display: none">SR25 PU Case</strong>
                <p class="tmpProductInfo tmpProductInfo_9" style="display: none">
                    The SR25 case is designed to wrap around the entire player.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_9" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_10" style="display: none">SA700 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_10" style="display: none">
                    The SA700 Leather Case compliments the string bridge inspired
                    volume knob protector and LED light design of the SA700 .
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_10" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_11" style="display: none">SP2000 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_11" style="display: none">
                    The SP2000 Case emphasizes the beauty of the original
                    material.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_11" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_12" style="display: none">KANN CUBE Case</strong>
                <p class="tmpProductInfo tmpProductInfo_12" style="display: none">
                    KANN CUBE is the most powerful digital music player in the
                    Astell&amp;Kern lineup.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_12" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_13" style="display: none">2 Split Carrying
                    Case</strong>
                <p class="tmpProductInfo tmpProductInfo_13" style="display: none">
                    The collaboration project was created to give customers a
                    convenient way to protect their audio products while on the
                    move.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_13" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_14" style="display: none">3 Split Carrying
                    Case</strong>
                <p class="tmpProductInfo tmpProductInfo_14" style="display: none">
                    The collaboration project was created to give customers a
                    convenient way to protect their audio products while on the
                    move.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_14" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_15" style="display: none">SP1000M Case</strong>
                <p class="tmpProductInfo tmpProductInfo_15" style="display: none">
                    The A&amp;ultima SP1000M leather case has a value that is more
                    than just protecting the device.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_15" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_16" style="display: none">SE100 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_16" style="display: none">
                    The leather case of A&amp;futura SE100 is designed to have the
                    best combination of trapezoidal straight lines.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_16" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_17" style="display: none">SR15 PU Case</strong>
                <p class="tmpProductInfo tmpProductInfo_17" style="display: none">
                    The SR15 case embraces the unique elegance of the center
                    rectangle display and the interconnected triangles of the
                    body.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_17" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_18" style="display: none">SP1000 Cordovan Case</strong>
                <p class="tmpProductInfo tmpProductInfo_18" style="display: none">
                    SP1000 that embodies the unique beauty to the original
                    material will need a case for protection
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_18" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_19" style="display: none">SP1000 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_19" style="display: none">
                    SP1000 that embodies the unique beauty to the original
                    material will need a case for protection.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_19" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_20" style="display: none">AK70 MK II PU Case</strong>
                <p class="tmpProductInfo tmpProductInfo_20" style="display: none">
                    AK70 MK&#8545; Case is available in three colors that will
                    enable more focus on the black body which resembles black sea
                    at night.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_20" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_21" style="display: none">AK380 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_21" style="display: none">
                    The AK380 leather case captures the essence of naturally-
                    reflected moving light and the cast shadows.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_21" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_22" style="display: none">AK320 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_22" style="display: none">
                    The AK320 leather case is made of Tuscany Belly leather,
                    processed and supplied by the world-famous Walpier Tannery of
                    Italy.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_22" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_23" style="display: none">AK240 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_23" style="display: none">
                    In order to raise the bar of the AK240 even higher, much
                    attention was devoted to the selection of leather for the
                    case.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_23" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_24" style="display: none">AK120 II Case</strong>
                <p class="tmpProductInfo tmpProductInfo_24" style="display: none">
                    The 2nd generation of AK120, adopts the Buttero Leather.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_24" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_25" style="display: none">AK100 II Case</strong>
                <p class="tmpProductInfo tmpProductInfo_25" style="display: none">
                    The 2nd generation of AK100, adopts the Buttero Leather.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_25" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_26" style="display: none">AK70 PU Case</strong>
                <p class="tmpProductInfo tmpProductInfo_26" style="display: none">
                    The AK70's casing, with its simple design and compact size, is
                    made with the thinnest material available in the market.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_26" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_27" style="display: none">AK70 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_27" style="display: none">
                    The AK70's casing, with its simple design and compact size, is
                    made with the thinnest material available in the market
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_27" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_28" style="display: none">AK Jr PU Case</strong>
                <p class="tmpProductInfo tmpProductInfo_28" style="display: none">
                    The AK Jr's slim, eye-catching contours deserve to be both
                    accentuated and protected.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_28" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_29" style="display: none">AK120 Case</strong>
                <p class="tmpProductInfo tmpProductInfo_29" style="display: none">
                    Like a fine tailored suit for the Astell&amp;Kern, the
                    Astell&amp;Kern AK120 Buttero Leather Case.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_29" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_30" style="display: none">AK HC3</strong>
                <p class="tmpProductInfo tmpProductInfo_30" style="display: none">
                    USB-C Hi-Fi Dual DAC AK HC3, supports headset microphones,
                    provides Ultra High-Resolution Sound from ES9219MQ Dual-DAC
                    and connects to a variety of smartphones and PCs to enjoy
                    Astell&amp;Kern's premium sound anywhere.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_30" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF_23.jpg" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_31" style="display: none">AK HC2</strong>
                <p class="tmpProductInfo tmpProductInfo_31" style="display: none">
                    The second USB-CH Hi-Fi Dual DAC AK HC2, provides Ultra
                    High-Resolution Sound from Dual-DAC and superior noise-free
                    sound, and connects to a variety of smartphones and PCs to
                    enjoy Astell&amp;Kern's premium sound anywhere.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_31" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="RED_2022.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF-DESIGN-AWARD-2022_l_RGB_jpg.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2023_winner.png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_32" style="display: none">PEP11</strong>
                <p class="tmpProductInfo tmpProductInfo_32" style="display: none">
                    Astell&amp;Kern 4.4mm MMCX Cable for Audiophile.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_32" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_33" style="display: none">PEE51</strong>
                <p class="tmpProductInfo tmpProductInfo_33" style="display: none">
                    The Astell&amp;Kern USB-C DUAL DAC CABLE has been designed as
                    an extension of existing Astell&amp;Kern DAP lines.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_33" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_34" style="display: none">PEE41</strong>
                <p class="tmpProductInfo tmpProductInfo_34" style="display: none">
                    The PEE41 is designed to easily connect your KANN CUBE to a
                    Hi-Fi audio AMP for home use and output to speakers.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_34" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_35" style="display: none">PEE31</strong>
                <p class="tmpProductInfo tmpProductInfo_35" style="display: none">
                    Astell&amp;Kern&rsquo;s attractive auxiliary cable will change
                    your perception of AUX cables.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_35" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_36" style="display: none">DEF21</strong>
                <p class="tmpProductInfo tmpProductInfo_36" style="display: none">
                    Dutch cable specialist Crystal Cable designs and manufactures
                    the thinnest high-end wires possible from one of Europe's most
                    ambitious R&amp;D laboratories.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_36" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_37" style="display: none">PEF31</strong>
                <p class="tmpProductInfo tmpProductInfo_37" style="display: none">
                    Crystal Cable has developed a new generation in-ear cable for
                    her co-branding with Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_37" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_38" style="display: none">PEF30</strong>
                <p class="tmpProductInfo tmpProductInfo_38" style="display: none">
                    Crystal Cable has developed a new generation in-ear cable for
                    her co-branding with Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_38" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_39" style="display: none">PEF29</strong>
                <p class="tmpProductInfo tmpProductInfo_39" style="display: none">
                    Crystal Cable has developed a new generation in-ear cable for
                    her co-branding with Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_39" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_40" style="display: none">PEF28</strong>
                <p class="tmpProductInfo tmpProductInfo_40" style="display: none">
                    Crystal Cable has developed a new generation in-ear cable for
                    her co-branding with Astell&amp;Kern.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_40" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_41" style="display: none">PEE12</strong>
                <p class="tmpProductInfo tmpProductInfo_41" style="display: none">
                    OTG Cable (USB C to Micro 5pin) to connect AK CD-RIPPER with
                    SP1000.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_41" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_42" style="display: none">PEF25</strong>
                <p class="tmpProductInfo tmpProductInfo_42" style="display: none">
                    Astell&amp;Kern have set the standard for portable audio
                    performance.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_42" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_43" style="display: none">PEF24</strong>
                <p class="tmpProductInfo tmpProductInfo_43" style="display: none">
                    Astell&amp;Kern have set the standard for portable audio
                    performance.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_43" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_44" style="display: none">PEF23</strong>
                <p class="tmpProductInfo tmpProductInfo_44" style="display: none">
                    Astell&amp;Kern have set the standard for portable audio
                    performance.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_44" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_45" style="display: none">PEF22</strong>
                <p class="tmpProductInfo tmpProductInfo_45" style="display: none">
                    Astell&amp;Kern have set the standard for portable audio
                    performance.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_45" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_46" style="display: none">PEF16</strong>
                <p class="tmpProductInfo tmpProductInfo_46" style="display: none">
                    The PEF16 designs and manufactures the thinnest high-end wires
                    possible from one of Europe's R&amp;D laboratories.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_46" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_47" style="display: none">PEF15</strong>
                <p class="tmpProductInfo tmpProductInfo_47" style="display: none">
                    The PEF15 designs and manufactures the thinnest high-end wires
                    possible from one of Europe's R&amp;D laboratories.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_47" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_48" style="display: none">PEF14</strong>
                <p class="tmpProductInfo tmpProductInfo_48" style="display: none">
                    The PEF14 designs and manufactures the thinnest high-end wires
                    possible from one of Europe's R&amp;D laboratories.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_48" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_49" style="display: none">PEF13</strong>
                <p class="tmpProductInfo tmpProductInfo_49" style="display: none">
                    The PEF13 designs and manufactures the thinnest high-end wires
                    possible from one of Europe's R&amp;D laboratories.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_49" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_50" style="display: none">PEF12</strong>
                <p class="tmpProductInfo tmpProductInfo_50" style="display: none">
                    The PEF12 is a unique cable allowing the portable AK240 to be
                    used as a high-end source audio player by matching the AK240
                    to an audio system.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_50" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_51" style="display: none">PEF21</strong>
                <p class="tmpProductInfo tmpProductInfo_51" style="display: none">
                    The PEF21 is a unique cable allowing the portable AK240 to be
                    used as a high-end source audio player by matching the AK240
                    to an audio system.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_51" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_52" style="display: none">PEF11</strong>
                <p class="tmpProductInfo tmpProductInfo_52" style="display: none">
                    The PEF11 is a unique cable allowing the portable AK240 to be
                    used as a high-end source audio player by matching the AK240
                    to an audio system.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_52" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_53" style="display: none">AK PA10</strong>
                <p class="tmpProductInfo tmpProductInfo_53" style="display: none">
                    AK PA10 is the first AK model to introduce a Class-A AMP based
                    on Astell&amp;Kern&rsquo;s know-how in AMP circuit design
                    technology.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_53" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group">
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="iF_gold_23.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="reddot.jpg" />
                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                            alt="2023vgp.png" />
                    </div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_54" style="display: none">SEM4</strong>
                <p class="tmpProductInfo tmpProductInfo_54" style="display: none">
                    SEM4 is an interchangeable all-in-one module for the SE180.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_54" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_55" style="display: none">SEM3</strong>
                <p class="tmpProductInfo tmpProductInfo_55" style="display: none">
                    SEM3 is an Interchangeable All-in-One module for the SE180.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_55" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_56" style="display: none">SEM2</strong>
                <p class="tmpProductInfo tmpProductInfo_56" style="display: none">
                    SEM2 is an Interchangeable All-in-One module for the SE180.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_56" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_57" style="display: none">SP1000 AMP</strong>
                <p class="tmpProductInfo tmpProductInfo_57" style="display: none">
                    The SP1000 AMP offers High Gain output of 10Vrms for Balanced
                    output and 6.2Vrms for Unbalanced output.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_57" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_58" style="display: none">AK380 AMP Copper</strong>
                <p class="tmpProductInfo tmpProductInfo_58" style="display: none">
                    Introducing AK380 AMP Copper, the first accessory to
                    complement the AK380 Copper.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_58" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_59" style="display: none">AK380 AMP</strong>
                <p class="tmpProductInfo tmpProductInfo_59" style="display: none">
                    Introducing AK380 AMP, the first accessory to complement the
                    AK380.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_59" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_60" style="display: none">AK10</strong>
                <p class="tmpProductInfo tmpProductInfo_60" style="display: none">
                    The AK10 serves as a portable DAC for your iPhone 5, 5th Gen
                    iPod Touch, and the Samsung Galaxy Series of Smartphones.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_60" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_61" style="display: none">AK XB10</strong>
                <p class="tmpProductInfo tmpProductInfo_61" style="display: none">
                    High-quality Bluetooth, AK XB10. We added high sound quality
                    to the wireless freedom!
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_61" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_62" style="display: none">CD RIPPER MKII</strong>
                <p class="tmpProductInfo tmpProductInfo_62" style="display: none">
                    AK CD-RIPPER MK&#8545;, the second model of AK CD-RIPPER,
                    seamlessly delivers CD music to the Astell&amp;Kern player
                    with a single touch.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_62" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_63" style="display: none">CD RIPPER</strong>
                <p class="tmpProductInfo tmpProductInfo_63" style="display: none">
                    Easily rip your CD collection using the Astell&amp;Kern music
                    player and AK CD-RIPPER.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_63" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_64" style="display: none">PEM13</strong>
                <p class="tmpProductInfo tmpProductInfo_64" style="display: none">
                    Experience the AK380 Cradle's incredible features for
                    yourself.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_64" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_65" style="display: none">PEM12</strong>
                <p class="tmpProductInfo tmpProductInfo_65" style="display: none">
                    Detailed design with a combination of light and shadow when
                    shown at different angles takes on a different shape.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_65" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_66" style="display: none">PEM11</strong>
                <p class="tmpProductInfo tmpProductInfo_66" style="display: none">
                    Detailed design with a combination of light and shadow when
                    shown at different angles takes on a different shape.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_66" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_67" style="display: none">AKS02</strong>
                <p class="tmpProductInfo tmpProductInfo_67" style="display: none">
                    Same Gun Metal body with AK240. Use same material with AK240
                    to give design continuity.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_67" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_68" style="display: none">AKS01</strong>
                <p class="tmpProductInfo tmpProductInfo_68" style="display: none">
                    Same Aluminum body with Astell&amp;Kern. Use same material
                    with Astell&amp;Kern to give design continuity.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_68" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_69" style="display: none">PRF11 AK Recorder Single
                    Kit</strong>
                <p class="tmpProductInfo tmpProductInfo_69" style="display: none">
                    We at Astell&amp;Kern wanted to go beyond merely listening to
                    music to creating it.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_69" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <strong class="tmpProductInfo tmpProductInfo_70" style="display: none">PRF11 - AK Stereo MIC
                    Kit</strong>
                <p class="tmpProductInfo tmpProductInfo_70" style="display: none">
                    Through our collaboration with DPA(Danish Professional Audio),
                    manufacturer of world-class microphones, we proudly present
                    the AK Stereo MIC Kit.
                </p>
                <div class="btn-group tmpProductInfo tmpProductInfo_70" style="display: none">
                    <a href="" class="lnk-ty1">Find store</a>
                    <div class="mark-group"></div>
                </div>
                <div class="list">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="product_detail.html" class="active">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="se300_case_list2.png" />
                                    <span>SE300 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="list1 (1).png" />
                                    <span>SR35 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sp3000_case_list.png" />
                                    <span>SP3000 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="11 (1).png" />
                                    <span>KANN MAX Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sr25-mk2-case_1.png" />
                                    <span>SR25 MKII Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SP2000T_Case_01.png" />
                                    <span>SP2000T Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="se180_Case_01.png" />
                                    <span>SE180 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="kannalpha_Case_01.png" />
                                    <span>KANN ALPHA Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SE200_Case_01.png" />
                                    <span>SE200 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SR25_Case_02.png" />
                                    <span>SR25 PU Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SA700_Case__01.png" />
                                    <span>SA700 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SP2000_Case_01.png" />
                                    <span>SP2000 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="KANNCUBE_Case_01.png" />
                                    <span>KANN CUBE Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="2-Split.png" />
                                    <span>2 Split Carrying Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="3-Split.png" />
                                    <span>3 Split Carrying Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SP1000M_Case_01.png" />
                                    <span>SP1000M Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SE100_Case_01.png" />
                                    <span>SE100 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SR15_Case_01.png" />
                                    <span>SR15 PU Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SP1000_CoCase_01.png" />
                                    <span>SP1000 Cordovan Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="SP1000_Case_01.png" />
                                    <span>SP1000 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK70_2_case_01.png" />
                                    <span>AK70 MK II PU Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK380_case_01.png" />
                                    <span>AK380 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK320_case_01.png" />
                                    <span>AK320 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK240_case_01.png" />
                                    <span>AK240 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK120_2_case_01.png" />
                                    <span>AK120 II Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK100_2_case_01.png" />
                                    <span>AK100 II Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK70_case_01.png" />
                                    <span>AK70 PU Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK70_ivory_01.png" />
                                    <span>AK70 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AKJr_case_01.png" />
                                    <span>AK Jr PU Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK120_case_01.png" />
                                    <span>AK120 Case</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="hc3_list (1).png" />
                                    <span>AK HC3</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="hc2.png" />
                                    <span>AK HC2</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pep11.png" />
                                    <span>PEP11</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pee51.png" />
                                    <span>PEE51</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pee41_main_01.png" />
                                    <span>PEE41</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pee31_main_01.png" />
                                    <span>PEE31</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef21_main_01.png" />
                                    <span>DEF21</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef31_main_01.png" />
                                    <span>PEF31</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef30_main_01.png" />
                                    <span>PEF30</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef29_main_01.png" />
                                    <span>PEF29</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef28_main_01.png" />
                                    <span>PEF28</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pee12_main_01.png" />
                                    <span>PEE12</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef25_main_01.png" />
                                    <span>PEF25</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef24_main_01.png" />
                                    <span>PEF24</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef23_main_01.png" />
                                    <span>PEF23</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef22_main_01.png" />
                                    <span>PEF22</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef16_main_01.png" />
                                    <span>PEF16</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef15_main_01.png" />
                                    <span>PEF15</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef14_main_01.png" />
                                    <span>PEF14</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef13_main_01.png" />
                                    <span>PEF13</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="PEF12_PEF21_01.png" />
                                    <span>PEF12</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="PEF12_PEF21_02.png" />
                                    <span>PEF21</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pef11_main_01.png" />
                                    <span>PEF11</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pa10_list-(1).png" />
                                    <span>AK PA10</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sem2_01.png" />
                                    <span>SEM4</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sem3.png" />
                                    <span>SEM3</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sem2_01.png" />
                                    <span>SEM2</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="sp1000amp_01.png" />
                                    <span>SP1000 AMP</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK380_AMP_Copper_01.png" />
                                    <span>AK380 AMP Copper</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK380_AMP_01.png" />
                                    <span>AK380 AMP</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK10_01.png" />
                                    <span>AK10</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="AK-XB10_01.png" />
                                    <span>AK XB10</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pem15_main_01.png" />
                                    <span>CD RIPPER MKII</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pem14_main_01.png" />
                                    <span>CD RIPPER</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pem13_01.png" />
                                    <span>PEM13</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="pem12_01.png" />
                                    <span>PEM12</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="PEM11_01.png" />
                                    <span>PEM11</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="aks02_01.png" />
                                    <span>AKS02</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="aks01_01.png" />
                                    <span>AKS01</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="PRF11_Single.png" />
                                    <span>PRF11 AK Recorder Single Kit</span>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="product_detail.html">
                                    <img src="https://i.ibb.co/dWkXd2S/20230511165947-ce722c38-f080-4ca5-8410-3273bc24e015.png"
                                        alt="PRF11_Stereo.png" />
                                    <span>PRF11 - AK Stereo MIC Kit</span>
                                </a>
                            </li>
                        </ul>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-slider"></div>
                </div>
            </div>
        </div>
    </div> --}}

</section>