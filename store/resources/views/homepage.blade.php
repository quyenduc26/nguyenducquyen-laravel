@extends('layouts.app')

@section('sidebar')
<div class="sidebar d-flex gap-2 flex-column bg-light">
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-list fs-2"></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center ">
    <i class="bi bi-people-fill fs-2 "></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-projector fs-2"></i></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-gift-fill fs-2"></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-controller fs-2"></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-book fs-2"></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-tv fs-2"></i>
    </div>
    <div class="sidebar-item border-bottom d-flex justify-content-center align-items-center">
        <i class="bi bi-badge-vr-fill fs-2"></i>
    </div>
</div>
@endsection

@section('header')
<div class="header row p-2 justify-content-between" style='background-color: white;'>
    <div class="col-md-2 ms-3 text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKkgxzqmqVqkN6owhXz3zA18UTXhUTa3hJBQ&s" alt="" style='width: 120px'>
    </div>
    <div class="col-6 p-2 d-flex justify-content-center">
        <div class="frag d-flex align-items-center ps-2 px-3">
            <input type="text" placeholder="Search..." class="search-input ps-3 p-2" style='width: 600px; border: none;'>
            <button class="search-button p-1">
                <i class="bi bi-search-heart fs-4"></i>
            </button>
        </div>
    </div>
    <div class="col-3 d-flex gap-4 justify-content-start align-items-center p-0">
        <div class="avatar d-flex gap-2 justify-content-center algin-items-center p-1">
            <img src="https://vn4u.vn/wp-content/uploads/2023/09/logo-co-tinh-nhat-quan-2.png" style='width: 50px; height: 50px' alt="">
            <span class='d-flex justify-content-center align-items-center'>Duc Quyen</span>
        </div>
        <div class="chart p-1">
            Chart
        </div>
        <div class="order p-1">
            <span>Orders</span>
        </div>
    </div>
</div>
@endsection

@section('proposal')
<div class="shopping d-flex justify-content-between gap-3 p-2">
    <div class="category" style='background-color: white;'>
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Traditional Wear</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Western Wear</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Swim & Beachwear</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Winter & Seasonsal Wear</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Beauty & Grooming</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Juwellery</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Presonal care Appliacnes</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">International Brands</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Foot Wear</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Watchces</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
        <div class="category-item d-flex justify-content-between" style="width: 300px; height: 45px">
            <span class="p-2 d-flex align-items-center" style="width: 200px">Accessories</span>
            <span class='d-flex align-items-center pe-3'> <i class="bi bi-caret-right-fill"></i> </span>
        </div>
        <hr class="m-0">
    </div>
    <div class="proposal d-flex flex-column gap-2 p-0" style="width: 700px;">
        <div class="big">
            <img src="https://hnsofa.com/wp-content/uploads/2023/03/sofa-den-1.jpg" alt="" style="width: 700px; height: 300px">
        </div>
        <div class="small d-flex justify-content-between">
            <img src="https://product.hstatic.net/200000255217/product/z4208542243107_e6d91c98a6eee429e41d2477e2d1e509_23039957655d46d685cf28fb5e149300_master.jpg" alt="" style="width: 225px; height: 200px">
            <img src="https://donghosk.com.vn/image/catalog/san-pham/Patek%20Philippe/L%E1%BB%8Bch%20v%E1%BA%A1n%20ni%C3%AAn/Tr%E1%BA%AFng%20D%C3%A2y%20Da/9.jpg" alt="" style="width: 225px; height: 200px">
            <img src="https://24kara.com/files/sanpham/26532/20/jpg/dong-ho-patek-philippe-grand-complications-6002r-001.jpg" alt="" style="width: 225px; height: 200px">
        </div>
        
    </div>
    <div class="personal d-flex flex-column justify-content-between">
        <div class="ps1 p-2" style='background-color: white; width: 300px; height: 250px'>
            <span class='fs-5'><strong> Recently Viewed</strong></span>
            <img class='' style='width: 280px; height: 200px' src="https://media.gq.com/photos/5ad64204c8be07604e8b5f2f/1:1/w_1332,h_1332,c_limit/21-books-GQ-April-2018-041718-3x2.jpg" alt="" >
        </div>
        <div class="ps1 p-2" style='background-color: white; width: 300px; height: 250px'>
            <span class='fs-5'><strong>Suggestion for You</strong></span>
            <img style='width: 280px; height: 200px' src="https://shop.bl.uk/cdn/shop/products/BibliophileNotebookWEBI_1600x.jpg?v=1666777808" alt="">
        </div>
    </div>
</div>
@endsection

@section('dealsOfDay')
<div class="dealOfDay row p-2">
    <div class="col-3">
        <img class='' style='width: 320px; height: 300px'  src="https://product.hstatic.net/1000152342/product/dscf8308_4ef6be1fecbd4e21a541151f95192407_master.jpg" alt="">
    </div>
    <div class="col-3">
        <img class='' style='width: 320px; height: 300px'  src="https://product.hstatic.net/1000152342/product/dscf8308_4ef6be1fecbd4e21a541151f95192407_master.jpg" alt="">
    </div>
    <div class="col-3">
        <img class='' style='width: 320px; height: 300px'  src="https://product.hstatic.net/1000152342/product/dscf8308_4ef6be1fecbd4e21a541151f95192407_master.jpg" alt="">
    </div>
    <div class="col-3">
        <img class='' style='width: 320px; height: 300px'  src="https://product.hstatic.net/1000152342/product/dscf8308_4ef6be1fecbd4e21a541151f95192407_master.jpg" alt="">
    </div>
</div>
@endsection
