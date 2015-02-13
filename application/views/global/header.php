<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JLIC Shushan Auction</title>

    <style type="text/css">

        @font-face {
            font-family: BlackChancery;
            src: url('<?php //echo base_url();?>/aucs/application/assets/fonts/chancery.woff') format('woff'),
                 url('<?php //echo base_url();?>/aucs/application/assets/fonts/chancery.ttf') format('truetype');
        }

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }
        ::-webkit-selection { background-color: #E13300; color: white; }

        body {
            margin: 40px;
            font: 13px/20px BlackChancery, sans-serif;
            color: #4F5155;
            /*            background: url(*/<?php //echo base_url();?>/*application/assets/img/background.png) no-repeat center center fixed;*/
            /*            -webkit-background-size: contain;*/
            /*            -moz-background-size: contain;*/
            /*            -o-background-size: contain;*/
            /*            background-size: contain;*/
            background-color: #000000;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            /*color: #444;*/
            background-color: transparent;
            font-size: 18pt;
            font-weight: normal;
            margin: 0;
            padding: 14px 15px 10px 15px;
            line-height: 24px;
            line-height: 24px;
            vertical-align: middle;
        }

        code {
            font-size: 18px;
            background-color: #f9f9f9;
            border: 1px solid #999999;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #999999;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #999999;
            background: #583F13;
            color: #fff;
            border-radius: 15px;
            overflow:hidden;
        }

        #container #header {
            margin: 0;
            padding: 0;
            display: block;
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #999999;
        }


        #container #header span {
            height: 80px;
            text-align: center;
            vertical-align: middle;
            font-size: 36px;
            padding-left: 10px;
            width: 100%;
            clear: both;
        }

        #menu {
            min-height: 44px;
            max-height: 88px;
            background-color: #292929;
            color: #fff;
            clear: both;
            font-size: 18pt;
        }

        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #menu ul li {
            display: block;
            float: left;
            width: 100px;
            height: 44px;
            vertical-align: middle;
            line-height: 44px;
            text-align: center;
        }

        #menu ul li a {
            display: block;
            float: left;
            color: #cecece;
            text-decoration: none;
            height: 44px;
            width: 100px;
            padding: 0;
            margin: 0;
        }

        #menu ul li a:hover {
            color: #fff;
        }

    </style>
</head>
<body>

<div id="container">
    <div id="header">
        <h1>The OU's Jewish Learning Initiative of Brooklyn College Presents: JLIC Shushan Auction</h1>
    </div>
    <!-- end of header -->