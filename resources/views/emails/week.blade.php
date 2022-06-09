<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarmayah</title>
    
    <style>
        
        *{
            box-sizing: border-box;
            margin:0;
            padding:0;
        }
        html{
            font-family:Arial, Helvetica, sans-serif
            
        }   
        body{
            font-size: 13px;
            background-color: #f4f4f4;
            line-height: 1.3;
            font-weight:300;
            
            
            
        }
        
        li{
            list-style: none;
        }
        
        a{
            text-decoration: none;
            
        }
        
        .container{
            max-width:800px;
            margin:0 auto;
            width:92%;
        }
        
        header{
            margin-top: 20px;
        }
        
        
        
        .header__text{
            padding:30px;
            
        }
        
        .header__text h4{
            font-size:18px;
            margin-bottom: 20px;
        }
        
        .header__text p{
            color:#9B9B9B;
            font-size:14px;
            text-align: justify;
        }
        .badge{
            border-radius:3px;
            padding:2px;
            color:white;
            align-self: center;
            text-transform: uppercase;
            font-size:9px;
            display: inline-block;
        }
        .badge-primary {
            color: #fff;
            background-color: #007bff;
        }
        
        .badge-warning {
            color: #212529 !important;
            background-color: #ffc107;
        }
        
        
        
        
        
        
        
        /* content */
        .border{
            padding:0 30px
        }
        .border .border-line{
            border-bottom:1px solid #ccc;
        }
        
        .content{
            padding:10px 0;
            
        }
        
        
        .card{
            /* background-color: red;; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding:10px 30px;
            background-color: white;
        }
    
        .card__content--left{
            display: flex;
        }
        .card__content--left img{
            width:100px !important;
            height:80px;
            object-fit: contain;
            margin-right:10px;
            
        }
        
        .card__content--left .cart__text{
            padding:0px 20px 0px 10px;
        }
        .card__content--left .cart__text .cart__text--h4{
            font-size:18px;
            margin-bottom:4px;
        }
        
        .card__content--left .cart__text .cart__text--disc{
            color: #717376;
            margin-bottom:6px;
            text-align:justify;
        }
        
        .cart__text--requ{
            font-size:10px;
            margin-bottom:6px;
            color: #222;
            
        }
        
        
        .card__content--right{
            /* background: blue; */
            padding:0 0 0 20px;
            
        }
        
        .btn{
            border:none;
            padding:8px 20px ;
            background-image: linear-gradient(to bottom right, #2bdc9f, #1ecac9);
            border-radius:1px;
            cursor: pointer;
            color:white;
            
        }
        
        
        /*         
        
        .footer{
            background-image: linear-gradient(to bottom right, #2bdc9f, #1ecac9);
        } */
        
        .footer__content{
            padding:40px 40px 0px;
        }
        
        .footer .footer__content ul{
            text-align: center;
            display: flex;
            justify-content: center;
            
        }
        
        
        .footer .footer__content ul li{
            list-style: none;
            margin-bottom: 15px;
        }
        
        .footer .footer__content ul li a{
            text-decoration: none;
            color:white;
            margin-right:30px;
            display: flex;
            width:30px;
            height:30px;
            justify-content: center;
            align-items: center;
            border-radius:50%;
        }
        .footer .footer__content ul li:last-child{
            margin-right:0px;
        }
        
        .footer .footer__content ul li a img{
            width:100%;
        }
        
        
        
        .footer .footer__text{
            padding: 20px 0 40px;
            text-align: center;
            
            line-height:1.6;
            border-top: 1px solid #ccc;
        }
        .footer .footer__text p:nth-child(1){
            margin-bottom:10px;
            
        }
        
        
        
        /* =====Responsive Code ========  */
        
        
        
        
        @media screen and (max-width:768px){
            body{
                font-size: 12px;
            }
            
            .container{
                width:96%;
            }
            
            .card{
                display: flex;
                flex-direction: column;
                padding:30px 10px;
                margin:0 30px;
                background-color: #cccccc2a !important;
                margin-bottom: 20px;
            }
            
            
            
            .card__content--left{
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
                align-items: center;
            }
            
            .card__content--left img{
                width:160px;
                max-height:100px;
                object-fit: cover;
                
            }
            
            .card__content--left .cart__text{
                padding:0;
                margin-top:20px;
                text-align: center;
            }
            .card__content--left .cart__text .cart__text--h4{
                font-size:18px;
                margin-bottom:4px;
            }
            
            .card__content--left .cart__text .cart__text--disc{
                width:80%;
                margin:auto
            }
            .card__content--right{
                /* background: blue; */
                padding:0px;
            }
            
        }
        
        
        /* @media screen and (max-width:513px){
            
        }
         */
        
        
        @media screen and (max-width:447px){
            .footer{
                text-align: center;
            }
            
            
        }
        
        @media screen and (max-width:321px){
            
            .header__ul  a{
                font-size:12px;
                
            }
            
        }
        
        
        
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header__content" >
       
            <div class="bg" style="background-color:white;">
                <ul class="header__ul">
                 <div style="padding:20px;text-align:center">
                <img src="https://www.sarmayah.com/public/web_assist/images/sarmayah_logo.png" alt="" style="height:40px;">
            </div>
            </ul>
                <div class="header__text">
                    <h4 style="text-align:center">
                        Weekly Investment Opportunities
                    </h4>
                    <p>
                        We are excited to announce that through the chain weekly newsletter, we are sharing investment opportunities on a weekly basis from Sarmyah.com.<br> Our team is tirelessly working to gather and share potential investment opportunities in private businesses in Afghanistan to bridge the gap between investors and entrepreneurs in the country. Our technical team behind Sarmayah.com is reviewing all the registered businesses very profoundly and consulted the entrepreneurs on making their business profile stronger by bringing improvements for better attract the investors’ attention before sharing it on our platform and yourself. If you are interested to know about available investment opportunities on our platform, please review the below:
                    </p>
                </div>
                <div class="border">
                    <div class="border-line">
                        
                    </div>
                </div>
                <div class="content">
                    @php $entre=DB::table('entrepreneurs')->where('admin_status','Approved')->get(); @endphp
                    <!-- car -->
                    @foreach($entre as $row)
                    <div class="card">
                        <div class="card__content--left">
                            <div class="img" style="min-width:110px">
                            <img src="{{url('storage/app/')}}/{{$row->logo}}" alt="">
                            </div>
                            <div class="cart__text header__text">
                                <h4 class="cart__text--h4">@if($row->catagory=="IDEA"||$row->catagory=="STARTUP")  {{$row->startup_name}} @else {{$row->company_name}} @endif  </h4>
                                <p class="cart__text--disc ">    
                                @php 
                                     $text=html_entity_decode($row->elavator_picth);
                                     $final=implode(' ', array_slice(explode(' ', $text), 0, 30));
                                       echo $final.'...';
                                      @endphp</p>
                                <h6 class="badge badge-warning" style="margin-top:5px">    
                                {{$row->catagory}}
                            </div>
                        </div>
                        <div class="card__content--right" style="min-width:150px">
                    <a style="display:block;font-size:12px;text-align:center">Required Investment <br><strong>{{'$'.number_format($row->mainimum_amount_looking, 2, '.', ',')}}</strong></a>
                            <a style="display:block;text-align:center" href="#" class="btn btn-green" type="button">Invest </a>
                            
                        </div>
                    </div><!--End car -->
                     <div class="border">
                    <div class="border-line">
                        
                    </div>
                </div>
                    @endforeach
                    <div style="text-align:center">
                        <p style="margin-top:30px;margin-bottom:30px;font-size:17px">To receive invest opportunities, register with us.</p>
                           <button class="btn btn-green" style="text-align:center;margin-bottom:30px;font-size:17px">Register</button>
                        </div>
                </div>
                
                <!--<div style="margin:20px 0 0;">-->
                    <!--<img style="" src="https://lh3.googleusercontent.com/-fDtpVJiwVj4/YEYaGFa1mYI/AAAAAAAAAOo/Y_mBIrK7M2gveVZ1WMsKYzCRNR-R39kQwCK8BGAsYHg/s512/2020-12-29%2B%25281%2529.png" alt="">-->
                <!--    <div style="width:100%;height:200px;background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);"></div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    
    
    
    
    <footer class="footer" style="background-image:linear-gradient(to bottom right, #2bdc9f, #1ecac9);">
        <div class="container">
            <!-- <div class="footer__bg"> -->
                <div class="footer__content">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="https://ci6.googleusercontent.com/proxy/2EQcq3msu-yWDRiZ7AtYmqA4OMIehf3JHM9OtrTCQPfV6RmvdlSwKyVVJSzSm6aIpkiUJYohX3lYDxZO5gIsVVEZsX2JUX-GthPJRSYMNMXj3m608DukHVvFnHyUR5NGhtR6niPVz57x2tn21_PS5eejJo-el8JsseAkw46JMZk482hwu0HtXvceK2U5bMyx02lOzLFEQqJTNhQFcf9ODlYoSmWe7dDaRIU07d1K5bSPNXi1WJRNLiK12AeDHQJhUf6yAkgx1pRC2LAWm_wWrS8CPtA=s0-d-e1-ft#https://marketing-image-production.s3.amazonaws.com/uploads/ed9a02b50af826d4644b531508d86901c8d733149986dccfa526ce408e9cee219bfbd9bb45554810d5111c410cfd67f0ad69a1a1a2bfdfefbdca81144705d34a.png" alt="" style="width:17px;height:20px">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://ci3.googleusercontent.com/proxy/LDo7ZqdqK8828gPGC_kQSz9Q4jdvUoaVyKVZaxtFeijaeN0ns3befaFdPbIriskDVQTVdRt5CVKG-0WYFytwQ6kza-soROd2NN5kYCHNcn0hMzJp5szjGHWsKdorv2VErG53iqy7vwjzz3MSa_Cf9U593Hm6eWfMW6Cc-QNdkG_Jl3U9_Yu1SE-7AHIjFmIIRRKSkC3lV4t655dNNkzuX0_J6LrlMYEOZHxX1dh8YDw7otzR55WwUo7-PVzizr_RccyUdlLDLvsPaA0zUhAPr0pHGN4=s0-d-e1-ft#https://marketing-image-production.s3.amazonaws.com/uploads/d6c11fefaa003246a9ac3f75fe70c82208a63e34ddc649bf0c8e4289d0a27c2af080a5e55d6a9aa33cadbe3428d38f81d018f6acf1611658d8d39e5ca270080c.png" alt="" style="width:17px;height:20px">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://ci3.googleusercontent.com/proxy/FuAXXZbJOr2zxeDVgHS2NRCmau_hdxzAzDyA0JevzudxlafrxnQiBbanr-f0mLqq148tsZDZKcjb4OG0rE3JOL0u417y6Ui71bz80SPzGWKFMQuCM9yiFXHH26ILn1nzcdIlev69iuU-fVoTbZZ3Db2LHasjjKGi9gpDGqNNnAPVgDMKDNxMNcDregm03gWV3ostdcVU2xRIVrD3wV9plqHsu6gIjnytO6tEe7tRNj4rQbNnersDY9efnmdoKiq2uJ1wtMrGsQO6rRgJ1aJoFfWFokg=s0-d-e1-ft#https://marketing-image-production.s3.amazonaws.com/uploads/2b6d4d4f7825bb4def297143e2b83ecf7b7b1f4fc76d1bd49b4efa4e14b1e638c51d344e479a03792500971570c8cc774dd86e7b236b0e143672da87f69ee463.png" alt="" style="width:17px;height:20px">
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="footer__text">
                    <p>Copyright © 2021, Sarmayah.com <br>
                        All rights reserved.</p>
                        <p>Want to change how you receive these emails?</p>
                        <p>You can update your preferences or unsubscribe from this list.</p>
                    </div>
                    <!-- </div> -->
                    
                </div>
            </footer>
            
            
            
            
            
        </body>
        </html>