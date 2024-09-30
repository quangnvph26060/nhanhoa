<div id="right-sidebar">
    <div class="nh-sidebar">


        <div class="section-list-article-page">
            <div class="content">
                <div class="section-title ">
                    <h2 class="related-title">Thông báo<span class="titledot"></span>
                        <span class="titleline"></span>
                    </h2>

                </div>
                <div class="sidebar-content">
                  @forelse ($thongbao as $item )
                  <div class="vertical-cat-new">
                    <div class="item-article">
                        <div class="img">
                            <a
                                href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                <img align='left'
                                    src='{{ asset($item->logo) }}'
                                    width='130' height='100' border='0'>
                            </a>
                        </div>
                        <div class="inner-content">
                            <div class="date d-none">
                                05/09/2024, 02:34 pm
                            </div>
                            <div class="name">
                                <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}"
                                style="display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2; /* Giới hạn hiển thị tối đa 2 dòng */
                                overflow: hidden;
                                text-overflow: ellipsis;
                                line-height: 1.5em; /* Điều chỉnh chiều cao dòng */
                                max-height: 3em; "
                                    title="{{ $item->title }}">
                                   {{ $item->title }}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                  @empty

                  @endforelse
                    {{-- <div class="vertical-cat-new">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/thong-bao-thay-doi-gia-ten-mien-com-xyz.html">
                                    <img align='left'
                                        src='https://uploads.nhanhoa.com/news/1725013753_ten-mien-thumb.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="date d-none">
                                    30/08/2024, 05:29 pm
                                </div>
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/thong-bao-thay-doi-gia-ten-mien-com-xyz.html"
                                        title="THÔNG BÁO THAY ĐỔI GIÁ TÊN MIỀN .COM, .XYZ">
                                        THÔNG BÁO THAY ĐỔI GIÁ TÊN MIỀN .COM, .XYZ
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="vertical-cat-new">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/nhan-hoa-thong-bao-lich-nghi-le-quoc-khanh-nam-2024.html">
                                    <img align='left'
                                        src='https://uploads.nhanhoa.com/news/1725002122_tbnl-640360.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="date d-none">
                                    30/08/2024, 02:15 pm
                                </div>
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/nhan-hoa-thong-bao-lich-nghi-le-quoc-khanh-nam-2024.html"
                                        title="Chúng Tôi thông báo Lịch nghỉ lễ Quốc Khánh năm 2024">
                                        Chúng Tôi thông báo Lịch nghỉ lễ Quốc Khánh...
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div> --}}

                    <div class="link-article">
                        <a href="{{ route('page.news-child', ['id'=>2]) }}">
                            Xem tất cả
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-list-article-page">
            <div class="content">
                <div class="section-title ">
                    <h2 class="related-title">Tuyển dụng<span class="titledot"></span>
                        <span class="titleline"></span>
                    </h2>

                </div>
                <div class="sidebar-content">

                    @forelse ($tuyendung as $item )
                    <div class="vertical-cat-new">
                      <div class="item-article">
                          <div class="img">
                              <a
                                  href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}">
                                  <img align='left'
                                      src='{{ asset($item->logo) }}'
                                      width='130' height='100' border='0'>
                              </a>
                          </div>
                          <div class="inner-content">
                              <div class="date d-none">
                                  05/09/2024, 02:34 pm
                              </div>
                              <div class="name">
                                  <a href="{{ route('page.news-detail', ['slug'=>$item->slug, 'id'=>$item->id]) }}"
                                  style="display: -webkit-box;
                                  -webkit-box-orient: vertical;
                                  -webkit-line-clamp: 2; /* Giới hạn hiển thị tối đa 2 dòng */
                                  overflow: hidden;
                                  text-overflow: ellipsis;
                                  line-height: 1.5em; /* Điều chỉnh chiều cao dòng */
                                  max-height: 3em; "
                                      title="{{ $item->title }}">
                                     {{ $item->title }}
                                  </a>
                              </div>

                          </div>
                      </div>
                  </div>
                    @empty

                    @endforelse
                    {{-- <div class="vertical-cat-new">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/tuyen-dung-chuyen-vien-kinh-doanh.html">
                                    <img align='left'
                                        src='https://uploads.nhanhoa.com/news/1709537903_kinh-doanh.png'
                                        width='130' height='100' border='0'>
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="date d-none">
                                    04/03/2024, 02:35 pm
                                </div>
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/tuyen-dung-chuyen-vien-kinh-doanh.html"
                                    style="display: -webkit-box;
                                    -webkit-box-orient: vertical;
                                    -webkit-line-clamp: 2; /* Giới hạn hiển thị tối đa 2 dòng */
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    line-height: 1.5em; /* Điều chỉnh chiều cao dòng */
                                    max-height: 3em; "
                                        title="TUYỂN DỤNG CHUYÊN VIÊN KINH DOANH">
                                        TUYỂN DỤNG CHUYÊN VIÊN KINH DOANH
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="vertical-cat-new">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/tuyen-dung-chuyen-vien-content-marketing.html">
                                    <img align='left'
                                        src='https://uploads.nhanhoa.com/news/1709536958_content.png'
                                        width='130' height='100' border='0'>
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="date d-none">
                                    04/03/2024, 02:22 pm
                                </div>
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/tuyen-dung-chuyen-vien-content-marketing.html"
                                        title="TUYỂN DỤNG CHUYÊN VIÊN CONTENT MARKETING">
                                        TUYỂN DỤNG CHUYÊN VIÊN CONTENT MARKETING
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="vertical-cat-new">
                        <div class="item-article">
                            <div class="img">
                                <a
                                    href="https://nhanhoa.com/tin-tuc/tuyen-dung-nhan-vien-digital-marketing.html">
                                    <img align='left'
                                        src='https://uploads.nhanhoa.com/news/1708586514_tuyen-dung-thumb.jpg'
                                        width='130' height='100' border='0'>
                                </a>
                            </div>
                            <div class="inner-content">
                                <div class="date d-none">
                                    21/02/2024, 02:11 pm
                                </div>
                                <div class="name">
                                    <a href="https://nhanhoa.com/tin-tuc/tuyen-dung-nhan-vien-digital-marketing.html"
                                        title="TUYỂN DỤNG NHÂN VIÊN DIGITAL MARKETING">
                                        TUYỂN DỤNG NHÂN VIÊN DIGITAL MARKETING
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div> --}}

                    <div class="link-article">
                        <a href="{{ route('page.news-child', ['id'=>3]) }}">
                            Xem tất cả
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
