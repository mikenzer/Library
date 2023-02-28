@extends('layout.admindefault')
@section('content')
<div class="container">
    <section id="inner" class="inner-section section">
        <div class="container">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Sách</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s">Thêm mới sách</p>
                    <?php
                    $message = session()->get('message');
                    if ($message) {
                        echo '<span class="alert alert-success" role="alert">' . $message . '</span>';
                        session()->put('message', null);
                    }
                    ?>
                </div>
            </div>
            <div class="inner-wrapper row">
                <div class="col-md-12">
                    <form name="frm" id="frm" action="{{URL::to('/add')}}" method="post" class="col-md-6 col-md-offset-3">
                        @csrf
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Tên sách</label>
                            <input type="text" name="book_name" class="form-control" placeholder="Tên sách" required>

                        </div>
                        <!-- Price -->
                        <div class="form-group">
                            <label for="name">Tác giả</label>
                            <input type="text" name="book_aut" class="form-control" placeholder="Tên tác giả" required>

                        </div>

                        <div class="form-group">
                            <label for="name">Nội dung sách</label>
                            <textarea style="resize: none" row="5" class="form-control" name="book_desc" placeholder="Mô tả sản phẩm" required></textarea>

                        </div>

                        <div class="form-group">
                            <label for="name">Hình ảnh sách</label>
                            <input type="file" name="book_avt" class="form-control" enctype="multipart/form-data" required>
                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection