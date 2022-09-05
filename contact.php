<?php include 'header.php';?>
<main>
    <section class="box-contact">
        <div class="container">
            <div class="title text-center">
                <h2>Liên Hệ</h2>
            </div>
            <div class="content-contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-contact">Chúng tôi có thể giúp gì cho bạn?</div>
                        <div class="frm-contact">
                            <div class="item-ctn"><input type="text" placeholder="Họ và tên" class="txt_field"></div>
                            <div class="item-ctn"><input type="text" placeholder="Điện thoại" class="txt_field"></div>
                            <div class="item-ctn"><input type="text" placeholder="Email" class="txt_field"></div>
                            <div class="item-ctn"><textarea placeholder="Nội dung"></textarea></div>
                            <div class="item-ctn"><input type="submit" value="Gửi yêu cầu" class="btn_field" data-toggle="modal" data-target="#modal_alert_2"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="txt-form">
                            <div class="title-contact">Thông Tin Liên Hệ</div>
                            <div class="info-contact">
                                <ul>
                                    <li><img src="images/pl-1.png" class="img-fluid" alt=""><span><strong>Địa chỉ:</strong> 475 Kim Ngưu, Hai Bà Trưng, Hà Nội </span></li>
                                    <li><img src="images/pl-2.png" class="img-fluid" alt=""><span><strong>Hotline:</strong> 094565243</span></li>
                                    <li><img src="images/pl-3.png" class="img-fluid" alt=""><span><strong>Email:</strong> Thansohoczenway@gmail.com</span></li>
                                    <li><img src="images/pl-4.png" class="img-fluid" alt=""><span><strong>Website:</strong> Zenway.vn</span></li>
                                    <li><img src="images/pl-5.png" class="img-fluid" alt=""><span><strong>Fanpage:</strong> www.facebook.com/Zenway</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popup-alert -->
        <!-- <div class="modal fade" id="modal_alert_1">
            <div class="modal-dialog dialog-alert">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-alert text-center">
                            <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></a>
                            <div class="icon"><img src="images/alert-success.png" class="img-fluid" alt=""></div>
                            <h3>Thông báo</h3>
                            <p>Đã gửi yêu cầu của bạn!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="modal fade" id="modal_alert_2">
            <div class="modal-dialog dialog-alert">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-alert text-center">
                            <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></a>
                            <div class="icon"><img src="images/alert-error.png" class="img-fluid" alt=""></div>
                            <h3>Thông báo</h3>
                            <p>Vui lòng điền đầy đủ thông tin của <br>bạn trước khi gửi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup-alert -->
    </section>
</main>
<?php include 'footer.php';?>