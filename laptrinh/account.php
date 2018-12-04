<!DOCTYPE html>
<html>

<head>
    <title>Tài khoản</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://unsplash.com/favicon.ico">
</head>

<body>
    <div style="margin:30px auto">
        <div class="tab-menu" style="margin:auto;">
            <div style="max-width:1440px;margin:auto;padding:0 5px;text-align:left">
                <a style="float:right" href="#">Hồ sơ của tôi</a>
                <a href="#">Ảnh của tôi</a>
                <a href="#">Tải lên</a>
                <a href="#">Mục ưa thích</a>
                <a href="#">Cài đặt</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p id="acc-top">Dữ liệu cá nhân</p>
                <div class="bocboc">
                    <label>Tên người dùng</label>
                    <input type="text" /> <br />
                </div>
                <div class="bocboc">
                    <label>Ảnh hồ sơ</label>
                </div>
                <div class="bocboc">
                    <label id="lb-gioitinh">Giới tính</label>
                    <select name="gioitinh" id="id-gioitinh">
                        <option value selected>-------</option>
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                    </select>
                </div>
                <div class="bocboc">
                    <label>Tên</label>
                    <input type="text" />
                </div>
                <div class="bocboc">
                    <label>Họ</label>
                    <input type="text" />
                </div>
                <div class="bocboc">
                    <label>Thành phố</label>
                    <input type="text" />
                </div>
                <div class="bocboc">
                    <label>Quốc gia</label>
                    <input type="text" />
                </div>
                <div class="bocboc">
                    <label>Ngày tháng năm sinh</label>
                    <select name="date_of_birth_day" id="id_date_of_birth_day">
                        <option value="0">---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select name="date_of_birth_month" id="id_date_of_birth_month">
                        <option value="0">---</option>
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="9">Tháng 10</option>
                        <option value="9">Tháng 11</option>
                        <option value="9">Tháng 12</option>
                    </select>

                    <select name="date_of_birth_year" id="id_date_of_birth_year">
                        <option value="0">---</option>
                        <option value="1928">1928</option>
                        <option value="1929">1929</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                    </select>

                </div>
                <div class="bocboc">
                    <label  style="vertical-align: top;">Thông tin về tôi</label>
                    <textarea id="thongtin" placeholder="Hãy cho chúng tôi biết ngắn gọn về bản thân bạn"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <p id="acc-top">Hồ sơ trực tuyến</p>
                <div class="bocboc">
                    <label style="vertical-align: top;">Facebook</label>
                    <textarea placeholder="https://www.facebook.com/..."></textarea>
                </div>
                <div class="bocboc">
                    <label style="vertical-align: top;">Twitter</label>
                    <textarea placeholder="https://www.twitter.com/..."></textarea>
                </div>
                <div class="bocboc">
                    <label style="vertical-align: top;">Instagram</label>
                    <textarea placeholder="https://www.instagram.com/..."></textarea>
                </div>
                <div class="bocboc">
                    <label style="vertical-align: top;">Website</label>
                    <textarea placeholder="https://..."></textarea>
                </div>
                <p id="acc-top">Tùy chọn</p>
                <div class="bocboc">
                    <label>Địa chỉ Email</label>
                    <input type="text" />
                </div>
                <div class="bocboc">
                    <label style="float:left">Giao tiếp</label>
                    <div id="giaotiep">
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" /> Tắt tin nhắn riêng tư
                                </label>
                            </li>
                            <li>
                                <label style="padding-left: 189px">
                                    <input type="checkbox" /> Tắt nhận xét
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bocboc">
                    <label style="float:left" >Thông báo Email</label>
                    <div id="thongbao">
                        <ul>
                            <li>
                                <label style="width: 400px;">
                                    <input type="checkbox" checked="checked"  /> Tin nhắn cá nhân
                                </label>
                            </li>
                            <li>
                                <label style="padding-left: 189px">
                                    <input type="checkbox" /> Gửi cho tôi tin tức và các mẹo mới nhất
                                </label>
                            </li>
                            <li>
                                <label style="padding-left: 189px">
                                    <input type="checkbox" checked="checked" /> Gửi cho tôi những thông báo quan trọng
                                </label>
                            </li>
                            <li>
                                <label style="padding-left: 189px">
                                    <input type="checkbox" checked="checked" > Thông báo cho tôi những bình luận mới
                                </label>
                            </li>
                            <li>
                                <label style="padding-left: 189px"> 
                                    <input type="checkbox"checked="checked"  /> Thông báo cho tôi những hình ảnh mới của bạn bè
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bocboc">
                    <label style="vertical-align:top">Địa chỉ PayPal hoặc Merchant ID để tiếp nhận sự đóng góp   </label>                                         
                    <input type="text"/>
                </div>
                <div class="bocboc">
                    <label>Hơn</label>
                    <a href="#">Thay đổi mật khẩu</a> <br/>
                    <a href="#" style="padding-left:195px">Xóa tài khoản</a>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid lightgray;margin-top: 20px;margin-bottom: 30px;" >
        <div id="luu" style="align:center">
            <p>Lưu</p>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="JS/customs.js"></script>
</body>

</html>