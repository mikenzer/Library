@extends('layout.default')
@section('content')
<div class="container">
    <h2 class="title text-center">Chi tiết sách</h2>
    <div class="row">
        @foreach($book_detail as $key => $detail)
        <div class="product-details">
            <!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{URL::to('/upload/books/'.$detail->book_avt)}}" alt=""/>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    <form>
                        @csrf
                        <h2>{{$detail->book_name}}</h2>
                        <p><b>Mã ID:</b> {{$detail->book_id}} </p>
                        <p><b>Tác giả:</b> {{$detail->book_aut}} </p>
                        <p> {{$detail->book_desc}} </p>
                        
                        <?php
                              $customer_id = session()->get('customer_id');
                              if($customer_id != NULL){
                              ?>
                        <a class="btn btn-info" href="{{URL::to('/checkout')}}">Mượn sách</a>
                        
                        <?php
                              }else{
                              ?>
                        <a class="btn btn-info"  name="book-checkout" >Mượn sách</a>
                        <?php
                              }
                        ?>          
                    </form>
                </div>
                @endforeach
                <!--/product-information-->
            </div>
        </div>
    </div>
</div>
<div id="checkout-confirm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông báo</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <a href="" 
                    class="btn btn-info" id="login">Đăng nhập</a>
                <button type="button" data-dismiss="modal"
                    class="btn btn-default">Thoát</button>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<script>
    $(document).ready(function(){
        
        $('a[name="book-checkout"]').on('click', function(e){
            e.preventDefault();
            
            const nameTd = $(this).closest('form').find('h2:first');
            if (nameTd.length > 0) {
                $('.modal-body').html(`Bạn cần đăng nhập để mượn sách "${nameTd.text()}"?`);
            } 
            $('#checkout-confirm')
                .modal({
                    backdrop: 'static',
                    keyboard: false
                })
            
        });
    });
</script>
@endsection