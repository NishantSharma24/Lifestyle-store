<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Lifestyle Store
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
            </div>
        </div>

    </nav>
<div class="container">
        <div class="row text-center py-5">
            <p>The Lifestyle store website is developed by Nishant Sharma who is student of Maharaja Surajmal Institue of Technology 2023 batch. Lifestyle store is basically a website that allows you to buy virtual products. </p> <br> <br> 
            <hr>
            <br>
            <div class="container text-left py-2">

                <h3>Lifestyle Store</h3>
                <br>
                <ul type="disc">
                    <li>HomePage</li>
                    <li>Cart</li>
                    <li>Checkout</li>
                    <li>Payment Gateway</li>
                </ul>
            </div>
           
            </div>
                <nav id="navbar-example2" class="navbar navbar-dark bg-dark px-3">
                <a class="navbar-brand" href="index.php">Lifestyle store</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading1"><button class="btn btn-warning">Home</button></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2"><button class="btn btn-warning">Cart</button></a>
                    </li>
                    <li><a class="nav-link" href="#scrollspyHeading3"><button class="btn btn-warning">Checkout</button></a></li>
                    <li><a class="nav-link" href="#scrollspyHeading4"><button class="btn btn-warning">Payment Gateway</button></a></li>
                </ul>
                </nav>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <h4 id="scrollspyHeading1">HomePage</h4>
                <p>This page is the first page of the website or we can say first impression is one through this page. This page contains logo of the company and a cart button on the top right part of the navigation bar. <br> This page contains some dummy items with their rating and price . Also it has a add to cart button which redorects client to the cart webpage</p>
                <h4 id="scrollspyHeading2">Cart Page</h4>
                <p>This page implements the logic of shopping cart . When a client presses add option the item in the cart increased by an amount . <br>
            Also it contains the Total Price section through which the user can see its final price  after adding certain amount of items. <br>NOTE:Each item can be added only one time. </p>
                <h4 id="scrollspyHeading3">Checkout Page</h4>
                <p>This page takes basic information from the user in order to receive the required product from the this website. It includes the Email , Phone no. , Name and Address in order to deliever that item to the specified address. When user press Pay Now button the it get redirect to our next page  which is payment gateway by Razorpay organisation. </p>
                <h4 id="scrollspyHeading4">Payment Gateway</h4>
                <p>This page is made from javascript and the total amount that is needed to pay by the client is taken from the cart webpage and the bill is generated. <br> The webpage offers different payment method like Debit card and Credit Card and UPI also (Right now it is not availaible as Website is in Test mode).</p>
                </div>

        
        </div>




<?php
require_once('php/footer.php');
?>