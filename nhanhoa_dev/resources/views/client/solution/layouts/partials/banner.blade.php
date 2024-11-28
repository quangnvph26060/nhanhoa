@props(['useBanner' => false])

@if ($useBanner)
    <div class="top-header motpath-w scrollme">
        <div class="total-grad"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1"
                        data-translatey="-50">
                        <div class="heading">{{ $giaiphap->title }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
