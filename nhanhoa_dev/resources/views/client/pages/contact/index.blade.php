@extends('client.layouts.master')


@section('content')
<div class="section-contact-map">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="map company-map" id="ha_noi_map" style="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4554946030657!2d105.81133707599837!3d21.014452988268502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abc4dfdce589%3A0x6f153a1f6f69c9fd!2zQ8O0bmcgVHkgTmjDom4gSMOyYQ!5e0!3m2!1svi!2s!4v1703826904678!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="map company-map" id="hcm_map" style="display: none;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.9101938214222!2d106.65879317076781!3d10.78973476996652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ecc9ced0b1f%3A0x3c3a8fa21f73fd45!2zSOG6u20gOTI3LCAxOSDEkC4gQ8OhY2ggTeG6oW5nIFRow6FuZyA4LCBQaMaw4budbmcgMDcsIFTDom4gQsOsbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1690637842336!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="map company-map" id="vinh_map" style="display: none;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.736747717298!2d105.6644224148951!3d18.675805587318795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDQwJzMyLjkiTiAxMDXCsDM5JzU5LjgiRQ!5e0!3m2!1svi!2s!4v1623752599915!5m2!1svi!2s" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>


                </div>
                <div class="col-md-6 col-12">
                    <div class="tab-office">
                        <div class="title-section text-left">
                            Công ty TNHH Phần mềm Nhân Hòa
                        </div>
                        <div class="tab-content-office">
                            <ul class="nav nav-tabs" id="tab_company_map" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="ha_noi-tab" data-toggle="tab" href="#ha_noi" role="tab" aria-controls="ha_noi" aria-selected="true">
                                        Hà Nội
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hcm-tab" data-toggle="tab" href="#hcm" role="tab" aria-controls="hcm" aria-selected="false">
                                        Hồ Chí Minh
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="vinh-tab" data-toggle="tab" href="#vinh" role="tab" aria-controls="vinh" aria-selected="false">
                                        Vinh - Nghệ An
                                    </a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active show" id="ha_noi" role="tabpanel" aria-labelledby="ha_noi-tab">
                                    <div class="info-office">
                                        <div class="title">
                                            Trụ sở Hà Nội
                                        </div>
                                        <p class="address">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_254_2888)">
                                                <path d="M17.5493 7.125L17.2577 6.89166C17.2743 6.81666 17.2827 6.74166 17.2827 6.66666V4.16666C17.2827 3.475 16.7243 2.91666 16.0327 2.91666H15.1993C14.5077 2.91666 13.9493 3.475 13.9493 4.16666V4.24166L11.2993 2.125C10.541 1.51666 9.45768 1.51666 8.69935 2.125L2.44935 7.125C1.95768 7.51666 1.66602 8.11666 1.66602 8.75V16.25C1.66602 17.4 2.59935 18.3333 3.74935 18.3333H8.33268V14.15C8.33268 13.7 8.69935 13.3333 9.14935 13.3333H10.8493C11.2993 13.3333 11.666 13.7 11.666 14.15V18.3333H16.2493C17.3993 18.3333 18.3327 17.4 18.3327 16.25V8.75C18.3327 8.11666 18.041 7.51666 17.5493 7.125Z" fill="#4ABAB9"></path>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_254_2888">
                                                <rect width="20" height="20" fill="white"></rect>
                                                </clipPath>
                                                </defs>
                                                </svg>

                                            Tầng 4 - Toà nhà 97 - 99 Láng Hạ, Quận Đống Đa, Thành Phố Hà Nội
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.6827 8.95834C14.3243 8.95834 14.041 8.66667 14.041 8.31667C14.041 8.00834 13.7327 7.36667 13.216 6.80834C12.7077 6.26667 12.1493 5.95001 11.6827 5.95001C11.3243 5.95001 11.041 5.65834 11.041 5.30834C11.041 4.95834 11.3327 4.66667 11.6827 4.66667C12.516 4.66667 13.391 5.11667 14.1577 5.92501C14.8743 6.68334 15.3327 7.62501 15.3327 8.30834C15.3327 8.66667 15.041 8.95834 14.6827 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M17.6924 8.95834C17.3341 8.95834 17.0508 8.66667 17.0508 8.31667C17.0508 5.35834 14.6424 2.95834 11.6924 2.95834C11.3341 2.95834 11.0508 2.66667 11.0508 2.31667C11.0508 1.96667 11.3341 1.66667 11.6841 1.66667C15.3508 1.66667 18.3341 4.65 18.3341 8.31667C18.3341 8.66667 18.0424 8.95834 17.6924 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M9.20768 12.4583L7.66602 14C7.34102 14.325 6.82435 14.325 6.49102 14.0083C6.39935 13.9167 6.30768 13.8333 6.21602 13.7417C5.35768 12.875 4.58268 11.9667 3.89102 11.0167C3.20768 10.0667 2.65768 9.11667 2.25768 8.17501C1.86602 7.22501 1.66602 6.31667 1.66602 5.45001C1.66602 4.88334 1.76602 4.34167 1.96602 3.84167C2.16602 3.33334 2.48268 2.86667 2.92435 2.45001C3.45768 1.92501 4.04102 1.66667 4.65768 1.66667C4.89102 1.66667 5.12435 1.71667 5.33268 1.81667C5.54935 1.91667 5.74102 2.06667 5.89102 2.28334L7.82435 5.00834C7.97435 5.21667 8.08268 5.40834 8.15768 5.59167C8.23268 5.76667 8.27435 5.94167 8.27435 6.10001C8.27435 6.3 8.21602 6.5 8.09935 6.69167C7.99102 6.88334 7.83268 7.08334 7.63268 7.28334L6.99935 7.94167C6.90768 8.03334 6.86602 8.14167 6.86602 8.27501C6.86602 8.34167 6.87435 8.4 6.89102 8.46667C6.91602 8.53334 6.94102 8.58334 6.95768 8.63334C7.10768 8.90834 7.36602 9.26667 7.73268 9.70001C8.10768 10.1333 8.50768 10.575 8.94102 11.0167C9.02435 11.1 9.11602 11.1833 9.19935 11.2667C9.53268 11.5917 9.54102 12.125 9.20768 12.4583Z" fill="#4ABAB9"></path>
                                                <path d="M18.3083 15.275C18.3083 15.5083 18.2667 15.75 18.1833 15.9833C18.1583 16.05 18.1333 16.1167 18.1 16.1833C17.9583 16.4833 17.775 16.7667 17.5333 17.0333C17.125 17.4833 16.675 17.8083 16.1667 18.0167C16.1583 18.0167 16.15 18.025 16.1417 18.025C15.65 18.225 15.1167 18.3333 14.5417 18.3333C13.6917 18.3333 12.7833 18.1333 11.825 17.725C10.8667 17.3167 9.90833 16.7667 8.95833 16.075C8.63333 15.8333 8.30833 15.5917 8 15.3333L10.725 12.6083C10.9583 12.7833 11.1667 12.9167 11.3417 13.0083C11.3833 13.025 11.4333 13.05 11.4917 13.075C11.5583 13.1 11.625 13.1083 11.7 13.1083C11.8417 13.1083 11.95 13.0583 12.0417 12.9667L12.675 12.3417C12.8833 12.1333 13.0833 11.975 13.275 11.875C13.4667 11.7583 13.6583 11.7 13.8667 11.7C14.025 11.7 14.1917 11.7333 14.375 11.8083C14.5583 11.8833 14.75 11.9917 14.9583 12.1333L17.7167 14.0917C17.9333 14.2417 18.0833 14.4167 18.175 14.625C18.2583 14.8333 18.3083 15.0417 18.3083 15.275Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Điện thoại: 1900 6680 - (024) 7308 6680
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.534 1.66667H6.46732C4.16732 1.66667 3.33398 2.50001 3.33398 4.84167V15.1583C3.33398 17.5 4.16732 18.3333 6.46732 18.3333H13.5257C15.834 18.3333 16.6673 17.5 16.6673 15.1583V4.84167C16.6673 2.50001 15.834 1.66667 13.534 1.66667ZM10.0007 16.0833C9.20065 16.0833 8.54232 15.425 8.54232 14.625C8.54232 13.825 9.20065 13.1667 10.0007 13.1667C10.8007 13.1667 11.459 13.825 11.459 14.625C11.459 15.425 10.8007 16.0833 10.0007 16.0833ZM11.6673 5.20834H8.33398C7.99232 5.20834 7.70898 4.925 7.70898 4.58334C7.70898 4.24167 7.99232 3.95834 8.33398 3.95834H11.6673C12.009 3.95834 12.2923 4.24167 12.2923 4.58334C12.2923 4.925 12.009 5.20834 11.6673 5.20834Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Phản ánh chất lượng dịch vụ: 091 140 8966
                                        </p>
                                    </div>
                                    <div class="info-office">
                                        <div class="title">
                                            Thời gian làm việc
                                        </div>
                                        <ul>
                                            <li>
                                                Từ thứ Hai đến thứ Bảy
                                            </li>
                                            <li>
                                                Sáng: 8h00 - 12h00, Chiều: 1h30 - 5h30
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="hcm" role="tabpanel" aria-labelledby="hcm-tab">
                                    <div class="info-office">
                                        <div class="title">
                                            Trụ sở Hồ Chí Minh
                                        </div>
                                        <p class="address">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_254_2888)">
                                                <path d="M17.5493 7.125L17.2577 6.89166C17.2743 6.81666 17.2827 6.74166 17.2827 6.66666V4.16666C17.2827 3.475 16.7243 2.91666 16.0327 2.91666H15.1993C14.5077 2.91666 13.9493 3.475 13.9493 4.16666V4.24166L11.2993 2.125C10.541 1.51666 9.45768 1.51666 8.69935 2.125L2.44935 7.125C1.95768 7.51666 1.66602 8.11666 1.66602 8.75V16.25C1.66602 17.4 2.59935 18.3333 3.74935 18.3333H8.33268V14.15C8.33268 13.7 8.69935 13.3333 9.14935 13.3333H10.8493C11.2993 13.3333 11.666 13.7 11.666 14.15V18.3333H16.2493C17.3993 18.3333 18.3327 17.4 18.3327 16.25V8.75C18.3327 8.11666 18.041 7.51666 17.5493 7.125Z" fill="#4ABAB9"></path>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_254_2888">
                                                <rect width="20" height="20" fill="white"></rect>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                            927/1 CMT8, Phường 7, Quận Tân Bình, Thành phố Hồ Chí Minh
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.6827 8.95834C14.3243 8.95834 14.041 8.66667 14.041 8.31667C14.041 8.00834 13.7327 7.36667 13.216 6.80834C12.7077 6.26667 12.1493 5.95001 11.6827 5.95001C11.3243 5.95001 11.041 5.65834 11.041 5.30834C11.041 4.95834 11.3327 4.66667 11.6827 4.66667C12.516 4.66667 13.391 5.11667 14.1577 5.92501C14.8743 6.68334 15.3327 7.62501 15.3327 8.30834C15.3327 8.66667 15.041 8.95834 14.6827 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M17.6924 8.95834C17.3341 8.95834 17.0508 8.66667 17.0508 8.31667C17.0508 5.35834 14.6424 2.95834 11.6924 2.95834C11.3341 2.95834 11.0508 2.66667 11.0508 2.31667C11.0508 1.96667 11.3341 1.66667 11.6841 1.66667C15.3508 1.66667 18.3341 4.65 18.3341 8.31667C18.3341 8.66667 18.0424 8.95834 17.6924 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M9.20768 12.4583L7.66602 14C7.34102 14.325 6.82435 14.325 6.49102 14.0083C6.39935 13.9167 6.30768 13.8333 6.21602 13.7417C5.35768 12.875 4.58268 11.9667 3.89102 11.0167C3.20768 10.0667 2.65768 9.11667 2.25768 8.17501C1.86602 7.22501 1.66602 6.31667 1.66602 5.45001C1.66602 4.88334 1.76602 4.34167 1.96602 3.84167C2.16602 3.33334 2.48268 2.86667 2.92435 2.45001C3.45768 1.92501 4.04102 1.66667 4.65768 1.66667C4.89102 1.66667 5.12435 1.71667 5.33268 1.81667C5.54935 1.91667 5.74102 2.06667 5.89102 2.28334L7.82435 5.00834C7.97435 5.21667 8.08268 5.40834 8.15768 5.59167C8.23268 5.76667 8.27435 5.94167 8.27435 6.10001C8.27435 6.3 8.21602 6.5 8.09935 6.69167C7.99102 6.88334 7.83268 7.08334 7.63268 7.28334L6.99935 7.94167C6.90768 8.03334 6.86602 8.14167 6.86602 8.27501C6.86602 8.34167 6.87435 8.4 6.89102 8.46667C6.91602 8.53334 6.94102 8.58334 6.95768 8.63334C7.10768 8.90834 7.36602 9.26667 7.73268 9.70001C8.10768 10.1333 8.50768 10.575 8.94102 11.0167C9.02435 11.1 9.11602 11.1833 9.19935 11.2667C9.53268 11.5917 9.54102 12.125 9.20768 12.4583Z" fill="#4ABAB9"></path>
                                                <path d="M18.3083 15.275C18.3083 15.5083 18.2667 15.75 18.1833 15.9833C18.1583 16.05 18.1333 16.1167 18.1 16.1833C17.9583 16.4833 17.775 16.7667 17.5333 17.0333C17.125 17.4833 16.675 17.8083 16.1667 18.0167C16.1583 18.0167 16.15 18.025 16.1417 18.025C15.65 18.225 15.1167 18.3333 14.5417 18.3333C13.6917 18.3333 12.7833 18.1333 11.825 17.725C10.8667 17.3167 9.90833 16.7667 8.95833 16.075C8.63333 15.8333 8.30833 15.5917 8 15.3333L10.725 12.6083C10.9583 12.7833 11.1667 12.9167 11.3417 13.0083C11.3833 13.025 11.4333 13.05 11.4917 13.075C11.5583 13.1 11.625 13.1083 11.7 13.1083C11.8417 13.1083 11.95 13.0583 12.0417 12.9667L12.675 12.3417C12.8833 12.1333 13.0833 11.975 13.275 11.875C13.4667 11.7583 13.6583 11.7 13.8667 11.7C14.025 11.7 14.1917 11.7333 14.375 11.8083C14.5583 11.8833 14.75 11.9917 14.9583 12.1333L17.7167 14.0917C17.9333 14.2417 18.0833 14.4167 18.175 14.625C18.2583 14.8333 18.3083 15.0417 18.3083 15.275Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Điện thoại: 1900 6680 - (028) 7308 6680
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.534 1.66667H6.46732C4.16732 1.66667 3.33398 2.50001 3.33398 4.84167V15.1583C3.33398 17.5 4.16732 18.3333 6.46732 18.3333H13.5257C15.834 18.3333 16.6673 17.5 16.6673 15.1583V4.84167C16.6673 2.50001 15.834 1.66667 13.534 1.66667ZM10.0007 16.0833C9.20065 16.0833 8.54232 15.425 8.54232 14.625C8.54232 13.825 9.20065 13.1667 10.0007 13.1667C10.8007 13.1667 11.459 13.825 11.459 14.625C11.459 15.425 10.8007 16.0833 10.0007 16.0833ZM11.6673 5.20834H8.33398C7.99232 5.20834 7.70898 4.925 7.70898 4.58334C7.70898 4.24167 7.99232 3.95834 8.33398 3.95834H11.6673C12.009 3.95834 12.2923 4.24167 12.2923 4.58334C12.2923 4.925 12.009 5.20834 11.6673 5.20834Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Phản ánh chất lượng dịch vụ: 091 140 8966
                                        </p>
                                    </div>
                                    <div class="info-office">
                                        <div class="title">
                                            Thời gian làm việc
                                        </div>
                                        <ul>
                                            <li>
                                                Từ thứ Hai đến thứ Bảy
                                            </li>
                                            <li>
                                                Sáng: 8h00 - 12h00, Chiều: 1h30 - 5h30
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="vinh" role="tabpanel" aria-labelledby="vinh-tab">
                                    <div class="info-office">
                                        <div class="title">
                                            Trụ sở Vinh - Nghệ An
                                        </div>
                                        <p class="address">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_254_2888)">
                                                <path d="M17.5493 7.125L17.2577 6.89166C17.2743 6.81666 17.2827 6.74166 17.2827 6.66666V4.16666C17.2827 3.475 16.7243 2.91666 16.0327 2.91666H15.1993C14.5077 2.91666 13.9493 3.475 13.9493 4.16666V4.24166L11.2993 2.125C10.541 1.51666 9.45768 1.51666 8.69935 2.125L2.44935 7.125C1.95768 7.51666 1.66602 8.11666 1.66602 8.75V16.25C1.66602 17.4 2.59935 18.3333 3.74935 18.3333H8.33268V14.15C8.33268 13.7 8.69935 13.3333 9.14935 13.3333H10.8493C11.2993 13.3333 11.666 13.7 11.666 14.15V18.3333H16.2493C17.3993 18.3333 18.3327 17.4 18.3327 16.25V8.75C18.3327 8.11666 18.041 7.51666 17.5493 7.125Z" fill="#4ABAB9"></path>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_254_2888">
                                                <rect width="20" height="20" fill="white"></rect>
                                                </clipPath>
                                                </defs>
                                                </svg>

                                            Tầng 2 Tòa nhà Sài Gòn Sky, ngõ 26 Nguyễn Thái Học, phường Đội Cung, TP. Vinh, Nghệ An
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.6827 8.95834C14.3243 8.95834 14.041 8.66667 14.041 8.31667C14.041 8.00834 13.7327 7.36667 13.216 6.80834C12.7077 6.26667 12.1493 5.95001 11.6827 5.95001C11.3243 5.95001 11.041 5.65834 11.041 5.30834C11.041 4.95834 11.3327 4.66667 11.6827 4.66667C12.516 4.66667 13.391 5.11667 14.1577 5.92501C14.8743 6.68334 15.3327 7.62501 15.3327 8.30834C15.3327 8.66667 15.041 8.95834 14.6827 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M17.6924 8.95834C17.3341 8.95834 17.0508 8.66667 17.0508 8.31667C17.0508 5.35834 14.6424 2.95834 11.6924 2.95834C11.3341 2.95834 11.0508 2.66667 11.0508 2.31667C11.0508 1.96667 11.3341 1.66667 11.6841 1.66667C15.3508 1.66667 18.3341 4.65 18.3341 8.31667C18.3341 8.66667 18.0424 8.95834 17.6924 8.95834Z" fill="#4ABAB9"></path>
                                                <path d="M9.20768 12.4583L7.66602 14C7.34102 14.325 6.82435 14.325 6.49102 14.0083C6.39935 13.9167 6.30768 13.8333 6.21602 13.7417C5.35768 12.875 4.58268 11.9667 3.89102 11.0167C3.20768 10.0667 2.65768 9.11667 2.25768 8.17501C1.86602 7.22501 1.66602 6.31667 1.66602 5.45001C1.66602 4.88334 1.76602 4.34167 1.96602 3.84167C2.16602 3.33334 2.48268 2.86667 2.92435 2.45001C3.45768 1.92501 4.04102 1.66667 4.65768 1.66667C4.89102 1.66667 5.12435 1.71667 5.33268 1.81667C5.54935 1.91667 5.74102 2.06667 5.89102 2.28334L7.82435 5.00834C7.97435 5.21667 8.08268 5.40834 8.15768 5.59167C8.23268 5.76667 8.27435 5.94167 8.27435 6.10001C8.27435 6.3 8.21602 6.5 8.09935 6.69167C7.99102 6.88334 7.83268 7.08334 7.63268 7.28334L6.99935 7.94167C6.90768 8.03334 6.86602 8.14167 6.86602 8.27501C6.86602 8.34167 6.87435 8.4 6.89102 8.46667C6.91602 8.53334 6.94102 8.58334 6.95768 8.63334C7.10768 8.90834 7.36602 9.26667 7.73268 9.70001C8.10768 10.1333 8.50768 10.575 8.94102 11.0167C9.02435 11.1 9.11602 11.1833 9.19935 11.2667C9.53268 11.5917 9.54102 12.125 9.20768 12.4583Z" fill="#4ABAB9"></path>
                                                <path d="M18.3083 15.275C18.3083 15.5083 18.2667 15.75 18.1833 15.9833C18.1583 16.05 18.1333 16.1167 18.1 16.1833C17.9583 16.4833 17.775 16.7667 17.5333 17.0333C17.125 17.4833 16.675 17.8083 16.1667 18.0167C16.1583 18.0167 16.15 18.025 16.1417 18.025C15.65 18.225 15.1167 18.3333 14.5417 18.3333C13.6917 18.3333 12.7833 18.1333 11.825 17.725C10.8667 17.3167 9.90833 16.7667 8.95833 16.075C8.63333 15.8333 8.30833 15.5917 8 15.3333L10.725 12.6083C10.9583 12.7833 11.1667 12.9167 11.3417 13.0083C11.3833 13.025 11.4333 13.05 11.4917 13.075C11.5583 13.1 11.625 13.1083 11.7 13.1083C11.8417 13.1083 11.95 13.0583 12.0417 12.9667L12.675 12.3417C12.8833 12.1333 13.0833 11.975 13.275 11.875C13.4667 11.7583 13.6583 11.7 13.8667 11.7C14.025 11.7 14.1917 11.7333 14.375 11.8083C14.5583 11.8833 14.75 11.9917 14.9583 12.1333L17.7167 14.0917C17.9333 14.2417 18.0833 14.4167 18.175 14.625C18.2583 14.8333 18.3083 15.0417 18.3083 15.275Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Điện thoại: (024) 7308 6680 - nhánh 6
                                        </p>
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.534 1.66667H6.46732C4.16732 1.66667 3.33398 2.50001 3.33398 4.84167V15.1583C3.33398 17.5 4.16732 18.3333 6.46732 18.3333H13.5257C15.834 18.3333 16.6673 17.5 16.6673 15.1583V4.84167C16.6673 2.50001 15.834 1.66667 13.534 1.66667ZM10.0007 16.0833C9.20065 16.0833 8.54232 15.425 8.54232 14.625C8.54232 13.825 9.20065 13.1667 10.0007 13.1667C10.8007 13.1667 11.459 13.825 11.459 14.625C11.459 15.425 10.8007 16.0833 10.0007 16.0833ZM11.6673 5.20834H8.33398C7.99232 5.20834 7.70898 4.925 7.70898 4.58334C7.70898 4.24167 7.99232 3.95834 8.33398 3.95834H11.6673C12.009 3.95834 12.2923 4.24167 12.2923 4.58334C12.2923 4.925 12.009 5.20834 11.6673 5.20834Z" fill="#4ABAB9"></path>
                                                </svg>

                                            Phản ánh chất lượng dịch vụ: 091 140 8966
                                        </p>
                                    </div>
                                    <div class="info-office">
                                        <div class="title">
                                            Thời gian làm việc
                                        </div>
                                        <ul>
                                            <li>
                                                Từ thứ Hai đến thứ Bảy
                                            </li>
                                            <li>
                                                Sáng: 8h00 - 12h00, Chiều: 1h30 - 5h30
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-contact-box-02">
    <div class="container">
        <div class="content">

            <div class="item-content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="item-off">
                            <div class="title">
                                Hà Nội
                            </div>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kinh doanh
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (024) 7308 6680 (phím 1)
                                </li>
                                <li>
                                    Email: sales@nhanhoa.com
                                </li>
                            </ul>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kỹ thuật
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (024) 7308 6680 (phím 2)
                                </li>
                                <li>
                                    Email: support@nhanhoa.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="item-off">
                            <div class="title">
                                Hồ Chí Minh
                            </div>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kinh doanh
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (028) 7308 6680 (phím 1)
                                </li>
                                <li>
                                    Email: hcmsales@nhanhoa.com
                                </li>
                            </ul>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kỹ thuật
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (028) 7308 6680 (phím 2)
                                </li>
                                <li>
                                    Email: hcmsupport@nhanhoa.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="item-off">
                            <div class="title">
                                Vinh - Nghệ An
                            </div>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kinh doanh
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (024) 7308 6680 (phím 6)
                                </li>
                                <li>
                                    Email: contact@nhanhoa.com
                                </li>
                            </ul>
                            <div class="title-bp font-weight-bolder color-main">
                                Bộ phận kỹ thuật
                            </div>
                            <ul>
                                <li>
                                    Điện thoại: (024) 7308 6680 (phím 4)
                                </li>
                                <li>
                                    Email: support@nhanhoa.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact_form_box" class="section-contact-box-03" style="background-image: url(https://nhanhoa.com/templates/images/v2/banner-form-contact.png);">
    <div class="container">
        <div class="content">
            <div class="title-section text-left text-white">
                Liên hệ qua Email
            </div>
            <p class="text-left text-white">
                Chọn phòng muốn gửi
            </p>
            {{-- <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script> --}}
            <div class="form-contact">
                <form action="https://nhanhoa.com/?site=contact&amp;act=do" id="form_contact" method="POST">
                    <div class="list-op">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" checked="checked" name="room_contact" value="3">
                                    <span class="radiobtn">
                                        Kỹ thuật
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="4">
                                    <span class="radiobtn">
                                        Kinh doanh HN
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="7">
                                    <span class="radiobtn">
                                        Kế toán HN
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="14">
                                    <span class="radiobtn">
                                        Server
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="10">
                                    <span class="radiobtn">
                                        Kinh doanh HCM
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="16">
                                    <span class="radiobtn">
                                        Kế toán HCM
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="15">
                                    <span class="radiobtn">
                                        Web4s
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="checkcontainer">
                                    <input type="radio" name="room_contact" value="8">
                                    <span class="radiobtn">
                                        Ban giám đốc
                                    </span>
                                </label>
                            </div>

                        </div>
                    </div>
                    <select name="contact_category" class="input_text d-none" id="contact_category">
                        <option selected="selected" value="3">Phòng kỹ thuật</option>
                        <option value="4">Phòng Kinh doanh</option>
                        <option value="7">Phòng kế toán</option>
                        <option value="8">Ban giám đốc</option>
                        <option value="10">Phòng Kinh doanh HCM</option>
                        <option value="14">Phòng Server</option>
                        <option value="15">Phòng Web</option>
                        <option value="16">Phòng kế toán HCM</option>
                    </select>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control contact_realname" name="contact_realname" id="contact_realname" value="" placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <input type="email" class="form-control contact_email" name="contact_email" id="contact_email" value="" placeholder="Email của bạn">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control contact_title" name="contact_title" id="contact_title" value="" placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="contact_content" id="contact_content" class="form-control contact_content" placeholder="Nội dung">
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-btn text-right mb-0">
                        <div class="submit-form-wrapper">
                            <div class="g-recaptcha" data-sitekey="6LfV4AsUAAAAAArBUqecDv8dsn0AeQaNGNTyva7M"></div>
                            <button id="submit_contact_form" class="btn btn-main ">
                                <span class="btn_text">Gửi tin nhắn</span>
                                <div class="spinner spinner-sm spinner-light nh-btn-loader d-none">
                                  <div class="rect1"></div>
                                  <div class="rect2"></div>
                                  <div class="rect3"></div>
                                  <div class="rect4"></div>
                                  <div class="rect5"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
<style>
    .section-connect-office{
        display: none !important;
    }
    .header-top{
        box-shadow: 0 4px 10px rgba(0,0,0,.1);
    }
</style>
@endsection
