@extends('client/solution/layouts/master')

@section('content')
    <!-- ***** TEAM ***** -->
    <section class="sec-normal sec-bg2">
        <div class="team">
            <div class="container">
                <div class="row">
                    <div id="content_detail" class="col-sm-12 col-md-12">

                        {!! $giaiphap->content !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
