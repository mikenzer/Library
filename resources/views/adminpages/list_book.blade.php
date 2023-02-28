@extends('layout.admindefault')
@section('content')
<div class="container">
    <section id="inner" class="inner-section section">
        <div class="container">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Sách</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s">Danh sách các loại sách</p>
                    <?php
                    $message = session()->get('message');
                    if ($message) {
                        echo '<span class="alert alert-success" role="alert">' . $message . '</span>';
                        session()->put('message', null);
                    }
                    ?>
                </div>
            </div>
            <div class="table-responsive">
                <table  id="contacts" class="table table-bordered table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>Hình ảnh</th>
                            <th>Sửa, Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_books as $key => $book)
                        <tr>
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->book_aut}}</td>
                            <td><img src="{{URL::to('/upload/books/'.$book->book_avt)}}" height="100" width="80"></td>
                            <td>
                                <a href="" 
                                    class="btn btn-xs btn-warning">
                                <i alt="Edit" class="fa fa-pencil"> Sửa</i></a>
                                <form class="delete" action="" 
                                    method="POST" style="display: inline;">
                                    <button type="submit" class="btn btn-xs btn-danger" name="delete-contact">
                                    <i alt="Delete" class="fa fa-trash"> Xóa</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
@endsection