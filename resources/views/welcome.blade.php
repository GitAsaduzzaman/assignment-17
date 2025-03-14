<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="cache-control" content="no-store,max-age=0"/>
        <meta name="robots" content="noindex"/>
        <title>Welcome Page</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,700" rel="stylesheet">

    
        <style>
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-tap-highlight-color: transparent;
            }

            body {
                margin: 0;
                padding: 0;
                height: 100%;
                -webkit-text-size-adjust: 100%;
            }

            .fit-wide {
                position: relative;
                overflow: hidden;
                max-width: 1240px;
                margin: 0 auto;
                padding-top: 60px;
                padding-bottom: 60px;
                padding-left: 20px;
                padding-right: 20px;
            }

            
            .background-wrap {
               position: relative; 
               top: 0; 
               right: 0; 
               padding: 10px; 
               z-index: 1000; 
}

            .background-wrap.cloud-blue {
                background-color: #b0e0e9;
            }

            .background-wrap.white {
                background-color: #fff;
            }

            .title {
                position: relative;
                text-align: center;
                margin: 20px auto 10px;
            }

            .title--regular {
                font-family: 'Roboto', Arial, sans-serif;
            }

            .title--size-large {
                font-size: 36px;
                line-height: 46px;
            }

            .title--size-semimedium {
                font-size: 20px;
                line-height: 28px;
            }

            .title--weight-normal {
                font-weight: 400;
            }

            .title--weight-bold {
                font-weight: 700;
            }

            .title--subtitle {
                padding-bottom: 40px;
                font-family: 'Open Sans', Arial ,sans-serif;
                text-align: center;
            }

            .error h1, .error p {
                color: #226d7a;
            }

            .error--bg__cover {
                position: absolute;
                width: 100%;
            }

            .error--shape__clouds svg {
                display: block;
            }

            .abstract-half-dot--circle {
                z-index: 0;
                position: absolute;
                left: 15em;
                right: 0;
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }

            .icon-graphic {
                z-index: 1;
                position: relative;
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }

            @media screen and (max-width: 767px) {
                .error--bg__cover {
                    display: none;
                }

                .abstract-half-dot--circle {
                    left: 0;
                }
            }
            .topme {
                display: inline-block;
        
                margin: 10px;
                 
    
    
            } 
            /* General Button Styles */
.btn-dashboard, .btn-login, .btn-register {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    text-align: center;
    border: 2px solid transparent;
}

/* Dashboard Button */
.btn-dashboard {
    background-color: #4CAF50; /* Green */
    color: white;
}

.btn-dashboard:hover {
    background-color: #45a049;
    border-color: #4CAF50;
}

/* Log in Button */
.btn-login {
    background-color: #2196F3; /* Blue */
    color: white;
}

.btn-login:hover {
    background-color:#226D7A;
    border-color: #2196F3;
}

/* Register Button */
.btn-register {
    background-color:rgb(158, 54, 244); /* Purple */
    color: white;
}

.btn-register:hover {
    background-color:rgb(183, 4, 253);
    border-color:rgb(228, 54, 244);
}

/* Hover Effects */
.btn-dashboard:hover, .btn-login:hover, .btn-register:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Active State */
.btn-dashboard:active, .btn-login:active, .btn-register:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}
.flex {
    display: flex;
    justify-content: flex-end; /* Align items to the right */
    align-items: center; /* Center items vertically */
}
        </style>
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end background-wrap cloud-blue">
        @auth
            <div class="topme"> 
                <a href="{{ url('/dashboard') }}" class="btn-dashboard">Dashboard</a>
            </div>
        @else
            <div class="topme">
                <a href="{{ route('login') }}" class="btn-login">Log in</a>
            </div>

            @if (Route::has('register'))
                <div class="topme">
                    <a href="{{ route('register') }}" class="btn-register">Register</a>
                </div>
            @endif
        @endauth
    </nav>
@endif
    </head>
    <body>
       
    

        
        <div id="container">
            <section class="error content background-wrap cloud-blue">
                <div class="fit-wide">
                    
                    <div>
                       
                        <div class="icon-graphic">
                            <svg version="1.1" id="af8eecc0-9a04-4512-b48f-6065b9d1b249" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #E4F5FA;
                                    }

                                    .st1 {
                                        fill: #226D7A;
                                    }

                                    .st2 {
                                        fill: #FFFFFF;
                                    }

                                    .st3 {
                                        fill: #22B8D1;
                                    }
                                </style>
                                <polygon class="st0" points="247.1,211.2 262.6,195.6 262.6,65.5 247.1,50 52.9,50 37.4,65.5 37.4,195.6 52.9,211.2 "/>
                                <path class="st1" d="M263.6,65.5c0-0.3-0.1-0.5-0.3-0.7l-15.5-15.5c-0.2-0.2-0.4-0.3-0.7-0.3H52.9c-0.3,0-0.5,0.1-0.7,0.3L36.7,64.8
                            c-0.2,0.2-0.3,0.5-0.3,0.7v130.1c0,0.3,0.1,0.5,0.3,0.7l15.5,15.5c0.2,0.2,0.4,0.3,0.7,0.3h72.9l-8.1,36.9h-12.3c-0.6,0-1,0.4-1,1
                            s0.4,1,1,1h89.3c0.6,0,1-0.4,1-1s-0.4-1-1-1h-12.2l-8.1-36.8h72.7c0.3,0,0.5-0.1,0.7-0.3l15.5-15.5c0.1-0.1,0.2-0.2,0.2-0.3
                            c0.1-0.1,0.1-0.3,0.1-0.4V65.5z M53.3,51h193.3l14.9,14.9v128.7H38.4V65.9L53.3,51z M180.5,249h-60.7l2.6-11.8h55.5L180.5,249z
                             M177.4,235.2h-54.6l5.1-23h44.5L177.4,235.2z M246.7,210.2H53.3l-13.5-13.6h220.4L246.7,210.2z"/>
                                <rect x="74.8" y="62.1" class="st2" width="150.5" height="112"/>
                                <circle class="st1" cx="90.5" cy="74.4" r="3.5"/>
                                <circle class="st1" cx="101" cy="74.4" r="3.5"/>
                                <circle class="st1" cx="111.5" cy="74.4" r="3.5"/>
                                <path class="st1" d="M225.3,61.1H74.8c-0.6,0-1,0.4-1,1v112c0,0.6,0.4,1,1,1h150.5c0.6,0,1-0.4,1-1v-112
                            C226.3,61.5,225.8,61.1,225.3,61.1z M224.3,63.1v22.5H75.8V63.1H224.3z M75.8,173.1V87.6h148.5v85.5H75.8z"/>
                                <rect x="122.8" y="128.2" class="st3" width="54.5" height="56.9"/>
                                <path class="st1" d="M177.3,127.2H170V114c0-11-9-20-20-20s-20,9-20,20v13.2h-7.3c-0.6,0-1,0.4-1,1v13v4.8v39.1c0,0.6,0.4,1,1,1
                            h54.5c0.6,0,1-0.4,1-1v-56.9C178.3,127.7,177.8,127.2,177.3,127.2z M132.1,114c0-9.9,8.1-18,18-18c9.9,0,18,8.1,18,18v13.2h-2.7V114
                            c0-8.4-6.8-15.2-15.2-15.2c-8.4,0-15.2,6.8-15.2,15.2v13.2h-2.7V114H132.1z M163.2,127.2h-26.4V114c0-7.3,5.9-13.2,13.2-13.2
                            c7.3,0,13.2,5.9,13.2,13.2C163.2,114,163.2,127.2,163.2,127.2z M123.8,142.3h19.3v2.7h-19.3V142.3z M123.8,170.7h19.3v2.7h-19.3
                            V170.7z M123.8,161.2h19.3v2.7h-19.3V161.2z M123.8,151.7h19.3v2.7h-19.3V151.7z M176.3,184.1h-52.5v-8.7h20.3c0.6,0,1-0.4,1-1v-4.7
                            c0-0.6-0.4-1-1-1h-20.3V166h20.3c0.6,0,1-0.4,1-1v-4.7c0-0.6-0.4-1-1-1h-20.3v-2.7h20.3c0.6,0,1-0.4,1-1v-4.7c0-0.6-0.4-1-1-1h-20.3
                            V147h20.3c0.6,0,1-0.4,1-1v-4.7c0-0.6-0.4-1-1-1h-20.3v-11h7.3h4.7h28.4h4.7h7.3L176.3,184.1L176.3,184.1z"/>
                            </svg>
                        </div>
                    </div>
                    <h1 class="title title--regular title--size-large title--weight-bold">This is Home Page</h1>
                    <p class="title title--subtitle title--size-semimedium title--weight-normal">Welcome to our Blogsite</p>
                
                </div>
                <div class="error--shape__clouds">
                    <svg id="f95fc14d-9eb7-4d11-bcb9-651fb6dd69f0" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2074.144 292.377">
                        <title>clouds_shape</title>
                        <path d="M2034.093,187.309a40.338,40.338,0,0,0-6.537.579,57.445,57.445,0,0,0-101.344-53.826,39.917,39.917,0,0,0-53.631-9.69,57.478,57.478,0,0,0-76.107-65.161c.019-.589.045-1.175.045-1.767a57.443,57.443,0,1,0-114.885,0,58.165,58.165,0,0,0,.412,6.781,39.929,39.929,0,0,0-62.076,39.726,57.431,57.431,0,0,0-89.212,45.7,57.427,57.427,0,0,0-52.738,8.725,39.97,39.97,0,0,0-68.167-16.906c.043-.757.114-1.507.114-2.276a40.049,40.049,0,0,0-65.428-30.986,57.445,57.445,0,0,0-113.6,12.12c0,1.258.055,2.5.134,3.739a39.956,39.956,0,0,0-36.784,6.689,40.715,40.715,0,0,0,.212-4.139A40.019,40.019,0,0,0,1132.73,93a57.443,57.443,0,0,0-106.758-39.516,40.05,40.05,0,0,0-79.081,4.36,40.116,40.116,0,0,0-38.16.022c0-.139.011-.277.011-.417a57.443,57.443,0,1,0-114.474,6.781,39.929,39.929,0,0,0-62.076,39.726,57.431,57.431,0,0,0-89.212,45.7,57.427,57.427,0,0,0-52.738,8.725,39.97,39.97,0,0,0-68.167-16.906c.043-.757.114-1.507.114-2.276a40.049,40.049,0,0,0-65.428-30.986,57.445,57.445,0,0,0-113.6,12.12c0,1.258.055,2.5.134,3.739a39.956,39.956,0,0,0-36.784,6.689,40.715,40.715,0,0,0,.212-4.139A40.019,40.019,0,0,0,244.952,93,57.443,57.443,0,0,0,138.194,53.479a40.05,40.05,0,0,0-79.081,4.36A40.066,40.066,0,0,0,0,93.074v199.3H2074.144V227.363A40.052,40.052,0,0,0,2034.093,187.309Z" fill="#fff"/>
                    </svg>
                </div>
            </section>
        </div> 
   

            
                </div>
            </div>
        </div>
    </body>
</html>
