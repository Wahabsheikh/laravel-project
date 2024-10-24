@extends('/layouts.masterlayout')
@section('content')
<section id=body>
    <div class="container">
        <div class="row">
            <div class="col-12 banner">
                <div class="intro">
                    <span class="bannerName">
                        Abdul
                    </span>
                    <div class="button">
                        <a href="{{ asset('assets/cv/resume.pdf') }}" class="customBtn">DOWNLOAD CV</a>
                    </div>
                </div>
                <div class="bnImg">
                    <img src="{{ asset('assets/bannerimage/wahab.png') }}" alt="Logo">
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('title')
Portfolio
@endsection