@extends('layout.admindefault')
@section('content')
<div class="container">
    <section id="inner" class="inner-section section">
        <div class="container">
            <!-- SECTION HEADING -->
            <h1 class="section-heading text-center wow fadeIn" data-wow-duration="1s">ADMIN</h1>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3 class="wow fadeIn" data-wow-duration="5s">Chào mừng bạn đến trang quản lý</h3>
                </div>
            </div>
            <h1 class="section-heading text-center wow fadeIn" data-wow-duration="7s">CÁC CHỨC NĂNG ĐANG ĐƯỢC HOÀN THIỆN!</h1>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        new WOW().init();
    });
</script>
@endsection