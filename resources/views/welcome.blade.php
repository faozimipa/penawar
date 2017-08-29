@extends('layouts.app')
@section('css')
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            font-weight:700;
        }

        /********************************/
        /*          Main CSS     */
        /********************************/


        #first-slider .main-container {
            padding: 0;
        }


        #first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3{
            color: #fff;
            font-size: 30px;
            text-transform: uppercase;
            font-weight:700;
        }

        #first-slider .slide1 h4,#first-slider .slide2 h4,#first-slider .slide3 h4,#first-slider .slide4 h4{
            color: #fff;
            font-size: 30px;
            text-transform: uppercase;
            font-weight:700;
        }
        #first-slider .slide1 .text-left ,#first-slider .slide3 .text-left{
            padding-left: 40px;
        }


        #first-slider .carousel-indicators {
            bottom: 0;
        }
        #first-slider .carousel-control.right,
        #first-slider .carousel-control.left {
            background-image: none;
        }
        #first-slider .carousel .item {
            min-height: 425px;
            height: 100%;
            width:100%;
        }

        .carousel-inner .item .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }


        #first-slider h3{
            animation-delay: 1s;
        }
        #first-slider h4 {
            animation-delay: 2s;
        }
        #first-slider h2 {
            animation-delay: 3s;
        }


        #first-slider .carousel-control {
            width: 6%;
            text-shadow: none;
        }


        #first-slider h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: bold;
        }

        #first-slider .p {
            padding-top: 125px;
            text-align: center;
        }

        #first-slider .p a {
            text-decoration: underline;
        }
        #first-slider .carousel-indicators li {
            width: 14px;
            height: 14px;
            background-color: rgba(255,255,255,.4);
            border:none;
        }
        #first-slider .carousel-indicators .active{
            width: 16px;
            height: 16px;
            background-color: #fff;
            border:none;
        }


        .carousel-fade .carousel-inner .item {
            -webkit-transition-property: opacity;
            transition-property: opacity;
        }
        .carousel-fade .carousel-inner .item,
        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            opacity: 0;
        }
        .carousel-fade .carousel-inner .active,
        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }
        .carousel-fade .carousel-inner .next,
        .carousel-fade .carousel-inner .prev,
        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-control {
            z-index: 2;
        }

        .carousel-control .fa-angle-right, .carousel-control .fa-angle-left {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
        }
        .carousel-control .fa-angle-left{
            left: 50%;
            width: 38px;
            height: 38px;
            margin-top: -15px;
            font-size: 30px;
            color: #fff;
            border: 3px solid #ffffff;
            -webkit-border-radius: 23px;
            -moz-border-radius: 23px;
            border-radius: 53px;
        }
        .carousel-control .fa-angle-right{
            right: 50%;
            width: 38px;
            height: 38px;
            margin-top: -15px;
            font-size: 30px;
            color: #fff;
            border: 3px solid #ffffff;
            -webkit-border-radius: 23px;
            -moz-border-radius: 23px;
            border-radius: 53px;
        }
        .carousel-control {
            opacity: 1;
            filter: alpha(opacity=100);
        }


        /********************************/
        /*       Slides backgrounds     */
        /********************************/
        #first-slider .slide1 {
            background-image: url(http://s20.postimg.org/h50tgcuz1/image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #first-slider .slide2 {
            background-image: url(http://s20.postimg.org/uxf8bzlql/image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #first-slider .slide3 {
            background-image: url(http://s20.postimg.org/el56m97f1/image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #first-slider .slide4 {
            background-image: url(http://s20.postimg.org/66pjy66dp/image.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }




        /********************************/
        /*          Media Queries       */
        /********************************/
        @media screen and (min-width: 980px){

        }
        @media screen and (max-width: 640px){

        }
    </style>
@endsection
@section('content')
  @include('common.slider-home')
<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="image/sambal.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="image/sambal.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="image/sambal.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="image/sambal.jpg" alt="...">
        </a>
    </div>
</div>
@endsection
