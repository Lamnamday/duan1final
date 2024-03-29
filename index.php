<?php
    session_start();
    require "global.php";
    require "app/controllers/HomeController.php";
    require "app/controllers/UserController.php";
    require "app/controllers/AdminController.php";

    $url = isset($_GET["url"]) ? $_GET["url"] : "/";
    
    
    
    switch($url) {
        case "/":
            include "includes/header.php";
            home();
            include "includes/footer.php";
            break;
        case "loc":
            include "includes/header.php";
            loc();
            include "includes/footer.php";
            break;
        case "search":
            include "includes/header.php";
            search();
            include "includes/footer.php";
            break;
        case "chitietsp":
            include "includes/header.php";
            chitietsp();
            include "includes/footer.php";
            break;
        case "dangnhap":
            login();
            break;
        case "dangky":
            signUp();
            break;
        case "dangxuat":
            logout();
            break;
        case "quenmatkhau":
            forgotPassword();
            break;
        case "doimatkhau":
            include "includes/header.php";
            changePassword();
            include "includes/footer.php";
            break;
        case "thongtincuatoi":
            include "includes/header.php";
            myInfo();
            include "includes/footer.php";
            break;
        case "thongtinkhachhang":
            infoUser();
            break;
        case "thongtinadmin":
            infoAdmin();
            break;
        /* ----------------------------------- MỚI ---------------------------------- */
        case "giohang":
            checkLogin("Bạn Cần Đăng Nhập Để Sử Dụng Tính Năng Này");
            include "includes/header.php";
            cart();
            include "includes/footer.php";
            break;
        case "themvaogiohang":
            addToCart();
            break;
        case "themvaogiohangs":
            addToCarts();
            break;
        case "updategiohang":
            updateCart();
            break;
        case "deletegiohang":
            deleteCart();
            break;
        case "thanhtoan":
            include "includes/header.php";
            thanhtoan();
            include "includes/footer.php";
            break;
        case "donhangcuatoi":
            include "includes/header.php";
            donHangCuaToi();
            include "includes/footer.php";
            break;
        case "chitietdonhanguser":
            include "includes/header.php";
            chiTietDonHangUser();
            include "includes/footer.php";
            break;
        /* ----------------------------------- MỚI ---------------------------------- */
        case "admin/loai":
            loai();
            break;
        case "admin/loai/them":
            themLoai();
            break;
        case "admin/loai/sua":
            suaLoai();
            break;
        case "admin/loai/xoa":
            xoaLoai();
            break;
        case "admin/danhmuc":
            danhMuc();
            break;
        case "admin/danhmuc/them":
            themDanhMuc();
            break;
        case "admin/danhmuc/sua":
            suaDanhMuc();
            break;
        case "admin/danhmuc/xoa":
            xoaDanhMuc();
            break;
        case "admin/sanpham":
            sanPham();
            break;
        case "admin/sanpham/them":
            themSanPham();
            break;
        case "admin/sanpham/sua":
            suaSanPham();
            break;
        case "admin/sanpham/xoa":
            xoaSanPham();
            break;
        case "admin/nguoidung":
            nguoiDung();
            break;
        case "admin/nguoidung/them":
            themNguoiDung();
            break;
        case "admin/nguoidung/sua":
            suaNguoiDung();
            break;
        case "admin/nguoidung/xoa":
            xoaNguoiDung();
            break;
        case "admin/binhluan":
            binhLuan();
            break;
        case "admin/binhluan/chitiet":
            chiTietBinhLuan();
            break;
        case "admin/binhluan/xoa":
            xoaBinhLuan();
            break;
        /* ----------------------------------- MỚI ---------------------------------- */
        case "admin/donhang":
            quanLyDonHang();
            break;
        case "admin/donhang/chitiet":
            chiTietDonHang();
            break;
        case "admin/donhang/capnhat":
            capNhatDonHang();
            break;
        case "admin/donhang/xoa":
            xoaDonHang();
            break;
        /* ----------------------------------- MỚI ---------------------------------- */
        case "admin/thongke":
            thongKe();
            break;
        case "admin/thongke/bieudo":
            bieuDo();
            break;
        
    }



?>