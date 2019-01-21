<!--slider menu-->
<div class="sidebar-menu">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a> </div>
    <div class="menu">
        <ul id="menu" >
            <li id="menu-home" ><a href="<?php echo ADMIN_URL . 'index.php?controller=index&action=index'; ?>"><i class="fa fa-tachometer"></i><span>Bảng điều khiển</span></a></li>
            <li id="menu-home" ><a href="<?php echo ADMIN_URL . 'index.php?controller=admin&action=index'; ?>"><i class="fa fa-tachometer"></i><span>Quản trị viên</span></a></li>
            <li id="menu-home" ><a href="<?php echo ADMIN_URL . 'index.php?controller=article&action=index'; ?>"><i class="fa fa-tachometer"></i><span>Bài viết</span></a></li>
            <li id="menu-comunicacao" ><a href="<?php echo ADMIN_URL . 'index.php?controller=email&action=index'; ?>"><i class="fa fa-book nav_icon"></i><span>Thư điện tử</span></a>
            </li>
            <li><a href="<?php echo ADMIN_URL . 'index.php?controller=product&action=index'; ?>"><i class="fa fa-cogs"></i><span>Sản phẩm</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul>
                    <li><a href="<?php echo ADMIN_URL . 'index.php?controller=product&action=index'; ?>">Danh mục sản phẩm</a></li>
                    <li><a href="<?php echo ADMIN_URL . 'index.php?controller=product&action=index'; ?>">Sản phẩm</a></li>
                </ul>
            </li>

            <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Liên hệ</span></a></li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>
                </ul>
            </li>

            <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Thống kê</span></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i><span>Người dùng</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
                    <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-cog"></i><span>Hệ thống</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
                    <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Đánh giá</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="product.html">Comment</a></li>
                    <li id="menu-academico-boletim" ><a href="price.html">Đánh giá</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="clearfix"> </div>