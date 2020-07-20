@extends('layouts.app')

@section('content')
<div class="jumbotron position-relative overflow-hidden">
  <video playsinline="playsinline" autoplay="true" muted="muted" loop="loop">
    <source src="{{asset('storage/sa/videoplayback.mp4')}}" type="video/mp4">
  </video>
    <div class="img-overlay">
        <div class="container my-5 position-relative" style="z-index: 1">
            <div class="col-lg-6 col-md-8 text-white">
                <h1 class="display-4 font-weight-bold">Crypto Marcket Passive Income For Everyone.</h1>
                <h3>
                    Today the company offers you very favorable and flexible terms of participation. Depending on the amount
                    of your deposit and the term of the selected investment period, you will receive a guaranteed income the
                    next day
                </h3>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <a href="/" style="height: 3rem" class="btn btn-light shadow container">
                            <p class="m-0 font-weight-bold mt-1 text-primary">Get Started Now</p>
                        </a>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <a href="/" style="height: 3rem" class="btn btn-outline-light shadow container">
                            <p class="m-0 font-weight-bold mt-1 text-primary">Contact With Us</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container my-5 py-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="font-weight-bold text-dark">
                Invest with the world-class experienced and professional traders.
            </h1>
            <h4 class="text-muted" style="line-height: 2rem">
                Crypto Zilla is a tight-knit group of true enthusiasts of investment business and private finance
                management: experienced traders at cryptocurrency and traditional Forex exchanges, specialists in the
                initial token offering, venture specialists, as well as a large intellectual and analytical department
                of modern economic technologies. Having combined the accumulated financial experience, we created a
                truly convenient and safe space, where any User can easily invest and earn, regardless of their
                experience in investments.
            </h4>
            <div class="container mt-3 p-0">
                <a href="/" style="height: 3rem" class="btn pt-2 bg-primary shadow">
                    <p class="m-0 font-weight-bold mt-1 text-white">Get Started Now</p>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/sa/working.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row">
        <div class="col-md-7">
            <h1 class="font-weight-bold text-dark">
                How it works ?
            </h1>
            <p class="text-muted" style="line-height: 1.6em">
                Investments are easy and affordable for everyone with Crypto Zilla. We have developed an online platform
                for receiving investments, which will allow participants from all over the world to join the highly
                profitable earnings. It is only necessary to have an amount for investments and a desire to receive a
                passive and stable income. You are not required to have experience, knowledge of the specifics of
                exchange transactions and experience in investments - earning with our company will be completely
                passive for you and will not require any additional efforts.
                <br><br>
                All operations between the company and investors are carried out through the investment site, thus you
                only need to sign up. After reviewing our investment proposal, select the optimal rate and top up your
                account with the required amount. As soon as funds appear on your balance sheet, your deposit will begin
                its work and will make a profit in accordance with the terms of marketing. Additional actions are not
                required, and a client will be able to withdraw the profits to his wallet at any time. Join the number
                of successful investors of the company right now and get the opportunity to get financial freedom and
                your wealthy future!
            </p>
            <div class="row pl-0 mt-4">
                <div class='col-md-4'>
                    <a href="/" style="height: 3rem" class="btn pt-2 container bg-primary shadow">
                        <p class="m-0 font-weight-bold mt-1 text-white">Start Now</p>
                    </a>
                </div>
                <div class='col-md-6'>
                    <a href="/" style="height: 3rem" class="btn mt-3 mt-md-0 container btn-outline-primary shadow">
                    <p class="m-0 font-weight-bold mt-1">Investment Plans</p>
                </a></div>
            </div>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('storage/sa/income.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>

<section class="container py-5">
    <h1 class="text-center font-weight-bold">Investment plans</h1>
    <h3 class="text-muted mt-2 text-center">
        Earn up to 9.3% profit daily. The larger the amount of your investment, the more favorable conditions we use to
        transfer profits to your deposit.
    </h3>
    <div class="container mt-5">
        <div class="pt-5 pb-4 px-5 grad position-relative">
            <div class="position-absolute" style="background-size: cover;top: 0; bottom: 0; left: 0; right: 0;
            background-repeat: no-repeat;background-position: top-left;
            background-image: url({{ asset('storage/sa/offer-bg.png') }})"></div>
            <div class="row">
                <div class="col-md-10">
                    <h4 class="font-weight-bold text-white">
                        5% First Deposit Bonus
                    </h4>
                    <h5 class="text-white">
                        + 5% bonus to the amount of replenishment on the first deposit
                    </h5>
                </div>
                <div class="col-md-2">
                    <a href="/" class="btn px-4 btn-lg rounded-sm btn-light">
                        <p class="m-0 text-primary">Get Offers</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-3 text-center">

            <div class="col-md-6">
                <div class="card p-0 mb-4 shadow">
                    <div class="card-header grad">
                        <h4 class="my-0 text-white font-weight-normal">PLan 1</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Daily Rate = 1.50%</h1>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-left">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li class="mb-3">Total ROI :</li>
                                        <li class="mb-3">DAILY PROFIT :</li>
                                        <li class="mb-3">WITHDRAW FUNDS :</li>
                                        <li>AMOUNT :</li>
                                    </ul>
                                </h4>
                            </div>
                            <div class="col-6">
                                <h4 class="text-right">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>135.00% <small class="text-muted">for 90 Days</small></li>
                                        <li><div class="alert alert-success p-0 text-success">at 00:01 on the server time</div></li>
                                        <li><div class="alert alert-success p-0 text-success">Automatically</div></li>
                                        <li>
                                            <strong class="text-primary">$10 - $20</strong><br><small class="text-muted">period - <span class="alert p-0 alert-primary text-primary">90 days</span></small></li>
                                    </ul>
                                </h4>
                            </div>
                        </div>
                        <button type="button" class="btn shadow btn-lg btn-block rounded-sm text-white bg-primary">Invested</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-0 mb-4 shadow">
                    <div class="card-header grad">
                        <h4 class="my-0 text-white font-weight-normal">PLan 2</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Daily Rate = 1.50%</h1>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-left">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li class="mb-3">Total ROI :</li>
                                        <li class="mb-3">DAILY PROFIT :</li>
                                        <li class="mb-3">WITHDRAW FUNDS :</li>
                                        <li>AMOUNT :</li>
                                    </ul>
                                </h4>
                            </div>
                            <div class="col-6">
                                <h4 class="text-right">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>135.00% <small class="text-muted">for 90 Days</small></li>
                                        <li><div class="alert alert-success p-0 text-success">at 00:01 on the server time</div></li>
                                        <li><div class="alert alert-success p-0 text-success">Automatically</div></li>
                                        <li>
                                            <strong class="text-primary">$10 - $20</strong><br><small class="text-muted">period - <span class="alert p-0 alert-primary text-primary">90 days</span></small></li>
                                    </ul>
                                </h4>
                            </div>
                        </div>
                        <button type="button" class="btn shadow btn-lg btn-block rounded-sm text-white bg-primary">Invested</button>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <h1 class="text-center font-weight-bold">Shares plans</h1>
                <h3 class="text-muted mt-2 text-center">
                    Earn up to 9.3% profit daily. The larger the amount of your investment, the more favorable conditions we use to
                    transfer profits to your deposit.
                </h3>

            </div>

            <div class="col-12">
                <div class="card p-0 mb-4 shadow">
                    <div class="card-header grad">
                        <h4 class="my-0 text-white font-weight-normal">Shares Plan</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Daily Rate = 1.50%</h1>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-left">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li class="mb-3">Total ROI :</li>
                                        <li class="mb-3">DAILY PROFIT :</li>
                                        <li class="mb-3">WITHDRAW FUNDS :</li>
                                        <li>AMOUNT :</li>
                                    </ul>
                                </h4>
                            </div>
                            <div class="col-6">
                                <h4 class="text-right">
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>135.00% <small class="text-muted">for 90 Days</small></li>
                                        <li><div class="alert alert-success p-0 text-success">at 00:01 on the server time</div></li>
                                        <li><div class="alert alert-success p-0 text-success">Automatically</div></li>
                                        <li>
                                            <strong class="text-primary">$10 - $20</strong><br><small class="text-muted">period - <span class="alert p-0 alert-primary text-primary">90 days</span></small></li>
                                    </ul>
                                </h4>
                            </div>
                        </div>
                        <button type="button" class="btn shadow btn-lg btn-block rounded-sm text-white bg-primary">Invested</button>
                    </div>
                </div>
            </div>

        </div>

        </section>
<section class="container-fluid py-5" style="background-color: #F5F5F5">
    <div class="container py-5 my-5">
        <h1 class="text-center dispaly-3 font-weight-bold">Privileges of working with us</h1>
        <h2 class="text-muted text-center">Why is it worth cooperating with our company?</h2>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-pie-chart text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M7.5 7.793V1h1v6.5H15v1H8.207l-4.853 4.854-.708-.708L7.5 7.793z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">BEST CONDITIONS FOR OUR CUSTOMERS</h5>
                        <p class="font-weight-bold text-muted">
                            With Crypto Zilla you get a high percentage, flexible conditions for cooperation and no
                            risk, thanks to the diversification of the company's funds.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-mouse2 text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5.188C3 2.341 5.22 0 8 0s5 2.342 5 5.188v5.625C13 13.658 10.78 16 8 16s-5-2.342-5-5.188V5.189zm4.5-4.155C5.541 1.289 4 3.035 4 5.188V5.5h3.5V1.033zm1 0V5.5H12v-.313c0-2.152-1.541-3.898-3.5-4.154zM12 6.5H4v4.313C4 13.145 5.81 15 8 15s4-1.855 4-4.188V6.5z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">
                            BEST SERVICE - FOR YOU
                        </h5>
                        <p class="font-weight-bold text-muted">
                            With our company you can be sure of the best service! Your investments will immediately
                            begin to work, and all interest will be charged quickly and on time.
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-file-person text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                            <path d="M13.784 14c-.497-1.27-1.988-3-5.784-3s-5.287 1.73-5.784 3h11.568z"/>
                            <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">24/7 SUPPORT</h5>
                        <p class="font-weight-bold text-muted">
                            We do our best to protect clients' funds and guarantee 100% security of all personal
                            information, thanks to the modern systems of data protection.
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">USER-FRIENDLY INTERFACE</h5>
                        <p class="font-weight-bold text-muted">
                            The company provides its clients with a user-friendly interface. The personal area is simple
                            and clear, basic information and buttons are placed on the main page.
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-shield-plus text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                            <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">
                            DATA SECURITY
                        </h5>
                        <p class="font-weight-bold text-muted">
                            Our technicians. Support will solve your problem at any time of the day. Use the convenient
                            way to communicate.
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-award text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg>
                    </div>
                    <div class="col-10">
                        <h5 class="mb-2 font-weight-bold">STABLE INCOME</h5>
                        <p class="font-weight-bold text-muted">
                            We are ready to pay good money as interest accruals to all interested clients for
                            participating in cryptozilla.world, considering this as amicable, mutually beneficial
                            process of cooperation.
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<section class="container py-5">
    <h1 class="text-center dispaly-3 font-weight-bold">Recent deposits and withdrawals</h1>
    <h3 class="text-muted text-center">List of 10 deposits and 10 withdrawals</h3>

    <div class="row mt-5">
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PARTNER ID:</th>
                        <th scope="col">DEPOSIT AMOUNT:</th>
                        <th scope="col">DEPOSIT TIME:</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 5; $i++)
                        <tr class="border-bottom">
                            <td>
                                <h5 class="m-0">7D****A5</h5>
                            </td>
                            <td>
                                <h5 class="m-0">$20</h5>
                            </td>
                            <td>
                                <h5 class="m-0">1 minute ago</h5>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PARTNER ID:</th>
                        <th scope="col">DEPOSIT AMOUNT:</th>
                        <th scope="col">DEPOSIT TIME:</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 5; $i++)
                        <tr class="border-bottom">
                            <td>
                                <h5 class="m-0">7D****A5</h5>
                            </td>
                            <td>
                                <h5 class="m-0">$20</h5>
                            </td>
                            <td>
                                <h5 class="m-0">1 minute ago</h5>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

</section>

@endsection
