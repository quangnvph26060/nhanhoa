<div class="section-table-price-server section-tab-price-service" id="price_table">
    <div class="container">
        <div class="content-table-price">
            <h2 class="title-section">
                Bảng giá CLOUD VPS Quốc tế tại Chúng Tôi
            </h2>

            <div class="tab-content">
                <div class="tab-pane active" id="vps" role="tabpanel" aria-labelledby="vps-tab">
                    <div class="info-table-price">
                        <div class="info-emty">
                            <div class="row">

                                @forelse ($clouds as $item )
                                <div class="col-lg-4 col-md-6 col-12 mb-3 0 pricing-item-order-2">
                                    <div class="item">
                                        <div class="bgr-top">
                                            <img src="https://nhanhoa.com/templates/images/v2/subtract.png"
                                                alt="Bảng giá">
                                        </div>

                                        <div class="icon-name">
                                            <div class="icon">
                                                <img src="https://nhanhoa.com/templates/images/v2/kim_cuong.png"
                                                    alt="Bảng giá">
                                            </div>
                                            <div class="name-price">
                                                <div class="name">
                                                    {{ $item->name }}
                                                </div>
                                                <div class="price">
                                                    <span>{{ number_format($item->price, 0, '', '.') }} đ/</span>Tháng
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <ul class="pl-0">
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> CPU:
                                                    <strong> {{ $item->cpu }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> CORE:
                                                    <strong> {{ $item->core }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> SSD:
                                                    <strong>{{ $item->ssd }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> RAM:
                                                    <strong> {{ $item->ram }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i> IP:
                                                    <strong> {{ $item->ip }}</strong>
                                                </li>
                                                <li><i class="fas fa-check-circle" style="color: #4ABAB9;"></i>
                                                    Bandwidth : <strong>
                                                        {{ $item->bandwidth }}</strong></li>
                                                @forelse ($item->promotion as $key => $promotion )
                                                <li class="promotion-pricing-table"> <i class="fas fa-check-circle"
                                                        style="color: #red;"></i> {{ $promotion->promotion->name }}</li>
                                                @empty

                                                @endforelse
                                            </ul>

                                        </div>
                                        <div class="link-add-cart add_to_cart that_data_service_3101">
                                            <a class="btn-add-cart btn-service add_service_cart" onclick="openPopup({{ $item->id }}, '{{ $item->name }}')"
                                                href="javascript:;">
                                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <span class="btn_text">Liên hệ</span>
                                            </a>
                                            <input type="hidden" name="cloud_virt" value="1" class="cloud_virt">

                                            <div class="select_popup_region">

                                                <div class="select_popup custom_cycle" style="width:100%;">
                                                    <a class="popup-with-move-anim" href="#cloud_region_3101"
                                                        title=""><label>Khu vực: Singapore | Singapore</label>
                                                        <i class="flag-icon flag-icon-sg"></i>
                                                    </a>
                                                </div>
                                                <input type="hidden" name="cloud_region" class="cloud_region"
                                                    value="sgp">
                                                <div id="cloud_region_3101"
                                                    class="plus zoom-anim-dialog mfp-hide cloud_region_popup"
                                                    data-count="">
                                                    <span class="popup-cloud-title" style="">Vui lòng chọn khu
                                                        vực cho gói VPS Global B</span>
                                                    <div class="region-tab-wrapper row">

                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter active"
                                                                data-region_location="all">Tất cả khu vực</a>
                                                        </div>
                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter"
                                                                data-region_location="Africa">Châu Phi</a>
                                                        </div>
                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter"
                                                                data-region_location="America">Châu Mỹ</a>
                                                        </div>
                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter"
                                                                data-region_location="Asia">Châu Á</a>
                                                        </div>
                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter"
                                                                data-region_location="Australia">Châu Úc</a>
                                                        </div>
                                                        <div class="region-tab">
                                                            <a href="javascript:void(0)" class="region_filter"
                                                                data-region_location="Europe">Châu Âu</a>
                                                        </div>

                                                    </div>

                                                    <ul class="row region-data-list">
                                                        <li data-region_code="jnb" data-region_flag="za"
                                                            data-region_location="Africa"
                                                            data-region_country="South Africa"
                                                            data-region_name="Johannesburg" data-cloud_region_id="23"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-za"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Johannesburg</span> <span
                                                                                class="region_country">South
                                                                                Africa</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="mia" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States" data-region_name="Miami"
                                                            data-cloud_region_id="11"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Miami</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="hnl" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Honolulu" data-cloud_region_id="12"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Honolulu</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="sea" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Seattle" data-cloud_region_id="13"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Seattle</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="atl" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Atlanta" data-cloud_region_id="19"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Atlanta</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="atl" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Atlanta" data-cloud_region_id="20"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Atlanta</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="lax" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Los Angeles" data-cloud_region_id="21"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Los Angeles</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="sjc" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Silicon Valley" data-cloud_region_id="22"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Silicon Valley</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="ord" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Chicago" data-cloud_region_id="28"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Chicago</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="mex" data-region_flag="mx"
                                                            data-region_location="America" data-region_country="Mexico"
                                                            data-region_name="Mexico City" data-cloud_region_id="29"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-mx"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Mexico City</span> <span
                                                                                class="region_country">Mexico</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="yto" data-region_flag="ca"
                                                            data-region_location="America" data-region_country="Canada"
                                                            data-region_name="Toronto" data-cloud_region_id="30"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-ca"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Toronto</span> <span
                                                                                class="region_country">Canada</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="scl" data-region_flag="cl"
                                                            data-region_location="America" data-region_country="Chile"
                                                            data-region_name="Santiago" data-cloud_region_id="31"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-cl"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Santiago</span> <span
                                                                                class="region_country">Chile</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="dfw" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="Dallas" data-cloud_region_id="36"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Dallas</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="sao" data-region_flag="br"
                                                            data-region_location="America" data-region_country="Brazil"
                                                            data-region_name="São Paulo" data-cloud_region_id="38"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-br"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>São Paulo</span> <span
                                                                                class="region_country">Brazil</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="ewr" data-region_flag="us"
                                                            data-region_location="America"
                                                            data-region_country="United States"
                                                            data-region_name="New Jersey (NJ)" data-cloud_region_id="39"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-us"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>New Jersey (NJ)</span> <span
                                                                                class="region_country">United
                                                                                States</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="nrt" data-region_flag="jp"
                                                            data-region_location="Asia" data-region_country="Japan"
                                                            data-region_name="Tokyo" data-cloud_region_id="7"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-jp"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Tokyo</span> <span
                                                                                class="region_country">Japan</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="itm" data-region_flag="jp"
                                                            data-region_location="Asia" data-region_country="Japan"
                                                            data-region_name="Osaka" data-cloud_region_id="8"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-jp"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Osaka</span> <span
                                                                                class="region_country">Japan</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="blr" data-region_flag="in"
                                                            data-region_location="Asia" data-region_country="India"
                                                            data-region_name="Bangalore" data-cloud_region_id="15"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-in"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Bangalore</span> <span
                                                                                class="region_country">India</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="icn" data-region_flag="kr"
                                                            data-region_location="Asia"
                                                            data-region_country="South Korea" data-region_name="Seoul"
                                                            data-cloud_region_id="16"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-kr"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Seoul</span> <span
                                                                                class="region_country">South
                                                                                Korea</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="del" data-region_flag="in"
                                                            data-region_location="Asia" data-region_country="India"
                                                            data-region_name="Delhi NCR" data-cloud_region_id="24"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-in"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Delhi NCR</span> <span
                                                                                class="region_country">India</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="sgp" data-region_flag="sg"
                                                            data-region_location="Asia" data-region_country="Singapore"
                                                            data-region_name="Singapore" data-cloud_region_id="25"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region active">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-sg"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Singapore</span> <span
                                                                                class="region_country">Singapore</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="bom" data-region_flag="in"
                                                            data-region_location="Asia" data-region_country="India"
                                                            data-region_name="Mumbai" data-cloud_region_id="32"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-in"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Mumbai</span> <span
                                                                                class="region_country">India</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="tlv" data-region_flag="il"
                                                            data-region_location="Asia" data-region_country="Israel"
                                                            data-region_name="Tel Aviv" data-cloud_region_id="33"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-il"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Tel Aviv</span> <span
                                                                                class="region_country">Israel</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="mel" data-region_flag="au"
                                                            data-region_location="Australia"
                                                            data-region_country="Australia" data-region_name="Melbourne"
                                                            data-cloud_region_id="14"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-au"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Melbourne</span> <span
                                                                                class="region_country">Australia</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="syd" data-region_flag="au"
                                                            data-region_location="Australia"
                                                            data-region_country="Australia" data-region_name="Sydney"
                                                            data-cloud_region_id="37"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-au"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Sydney</span> <span
                                                                                class="region_country">Australia</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="lhr" data-region_flag="gb"
                                                            data-region_location="Europe"
                                                            data-region_country="United Kingdom"
                                                            data-region_name="London" data-cloud_region_id="9"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-gb"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>London</span> <span
                                                                                class="region_country">United
                                                                                Kingdom</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="man" data-region_flag="gb"
                                                            data-region_location="Europe"
                                                            data-region_country="United Kingdom"
                                                            data-region_name="Manchester" data-cloud_region_id="10"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-gb"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Manchester</span> <span
                                                                                class="region_country">United
                                                                                Kingdom</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="ams" data-region_flag="nl"
                                                            data-region_location="Europe"
                                                            data-region_country="Netherlands"
                                                            data-region_name="Amsterdam" data-cloud_region_id="17"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-nl"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Amsterdam</span> <span
                                                                                class="region_country">Netherlands</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="cdg" data-region_flag="fr"
                                                            data-region_location="Europe" data-region_country="France"
                                                            data-region_name="Paris" data-cloud_region_id="18"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-fr"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Paris</span> <span
                                                                                class="region_country">France</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="fra" data-region_flag="de"
                                                            data-region_location="Europe" data-region_country="Germany"
                                                            data-region_name="Frankfurt" data-cloud_region_id="26"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-de"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Frankfurt</span> <span
                                                                                class="region_country">Germany</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="sto" data-region_flag="se"
                                                            data-region_location="Europe" data-region_country="Sweden"
                                                            data-region_name="Stockholm" data-cloud_region_id="27"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-se"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Stockholm</span> <span
                                                                                class="region_country">Sweden</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="mad" data-region_flag="es"
                                                            data-region_location="Europe" data-region_country="Spain"
                                                            data-region_name="Madrid" data-cloud_region_id="34"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-es"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Madrid</span> <span
                                                                                class="region_country">Spain</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                        <li data-region_code="mad" data-region_flag="pl"
                                                            data-region_location="Europe" data-region_country="Poland"
                                                            data-region_name="Warsaw" data-cloud_region_id="35"
                                                            data-class="that_data_service_3101"
                                                            class="col-lg-3 col-md-4 col-sm-6 check_cloud_mmo_region ">
                                                            <figure class="box time">
                                                                <ul>
                                                                    <li>
                                                                        <div class="region-list-item">
                                                                            <i class="flag-icon flag-icon-pl"></i>
                                                                        </div>
                                                                        <div class="region-list-item">
                                                                            <span>Warsaw</span> <span
                                                                                class="region_country">Poland</span>
                                                                        </div>
                                                                    </li>
                                                                    <i class="fa fa-check"></i>
                                                                </ul>
                                                            </figure>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:$.magnificPopup.close();"
                                                        class="close_popup_hosting" title="Đóng">Không, cám
                                                        ơn!</a>
                                                    <button title="Close (Esc)" type="button"
                                                        class="mfp-close">×</button>
                                                </div>
                                                <div class="custom-select fa-angle-down custom_hdh d-none">
                                                    <select name="svc_os" class="ord_templates">
                                                        <option value="">Chọn templates</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                            <div class="popup-cart" id="popup">
                                <div class="content_popup">
                                    <a href="javascript:void(0)" class="re-close-popup close" onclick="closePopup()"
                                        title="close">×</a>
                                    <div class="input-content">
                                        <div class="input-content-intro">
                                            <div class="input-content-intro-icon">
                                                <i class="fas fa-calendar-week" style="color: #4ABAB9;"></i>
                                            </div>
                                            <div class="input-content-intro-des">
                                                <div class="text-hello">Xin chào,</div>
                                                <p class="conten-sub">Vui lòng nhập thông tin để chúng tôi liên hệ lại
                                                    với bạn.</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('page.hosting-pay') }}" method="POST">
                                            @csrf
                                            <input type="hidden" id="cloud_id_input" name="cloud_id">
                                            <input class="form-control" type="text" placeholder="Họ và tên" name="name" id="name">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="name_error"></span>

                                            <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="phone_error"></span>

                                            <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                            <span class="invalid-feedback d-block" style="text-align: left; margin-bottom: 20px" id="email_error"></span>
                                            <div class="product-info">
                                                <p>Gói Cloud : </p>
                                                <span class="product-name">
                                                    {{ $item->cloudtypes_id == 1 ? "Cloud Server - " : "Cloud Quốc Tế - " }} <span id="product_name"></span>
                                                </span>
                                            </div>


                                            <div class="submit-content">
                                                <button type="button" class="btn btn-submit" onclick="submitlienhe(event)">Gửi Đi</button>
                                                <div class="go-hotline">Gọi hotline <span>(024) 7308 6680</span> (24/7)
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                @empty

                                @endforelse

                            </div>
                        </div>
                        {{-- <div class="link-dktv-price cta-tu-van">
                            <a href="#tuvanngay" class="btn_show_popup">
                                Đăng ký tư vấn
                            </a>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('validator/client.js') }}"></script>

<script>
function openPopup(cloudId, productName) {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('cloud_id_input').value = cloudId; // Cập nhật giá trị cloud_id
    document.getElementById('product_name').textContent = productName; // Cập nhật tên sản phẩm
}

function closePopup() {
  document.getElementById('popup').style.display = 'none';
}


$(document).ready(function() {
        @if (session('success'))
            toastr.success("{{ session('success') }}", "Thông báo:", {
                positionClass: "toast-bottom-right",
                timeOut: 3000,
                closeButton: true,
                progressBar: true,
                preventDuplicates: true,
            });
        @endif
    });
</script>

