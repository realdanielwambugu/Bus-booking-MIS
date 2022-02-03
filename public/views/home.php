<?php require_once view('header'); ?>

<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">
    <div class="bgColor-pri w-full h-auto m-0-auto"
    style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg3.jpg")'>

            <header class="w-full bgColor-sec-600 t-0 shadow ">
                <div class="w-11/12 lg:w-10/12 m-0-auto h-16 lg:fx fx-j-btw">
                    <div class="w-full lg:w-1/5 fx fx-j-btw fx-i-c h-full">
                        <div class="h-16 color-pri fx fx-i-c fs-lg">
                           <i class="fal fa-star"></i>
                           <h4 class="fx fx-i-c h-16 px-1"><?= app_name(); ?> </h4>
                        </div>

                        <div class="open_nav lg:hide">
                            <i class="pr-4 fal fa-bars"></i>
                        </div>
                    </div>

                    <nav id="nav"  class="w-full lg:w-7/12 xs:hide fx
                     fx-j-btw fx-i-c ">
                        <ul class="w-full fw-600 lg:fw-bold lg:fx fx-j-a fx-i-c
                        lg:h-full pb-5 lg:pb-0 ls-wide fs-md color-3-600 list-none">

                            <a href="/" class="no-line">
                                <li id="home" class="pointer py-2 lg:py-0 color-1">
                                 <i class="fa fa-home px-1"></i> Home
                                </li>
                            </a>

                            <a href="/how-we-work" class="no-line">
                                <li id="work" class="pointer py-2 lg:py-0 color-1">
                                    <i class="fa fa-phone px-1"></i> +24512345678
                                </li>
                            </a>

                            <?php if (auth()->check()): ?>

                                <a href="/logout" class="no-line xs:hide">
                                   <button class="bgColor-pri color-1 fs-xs  py-2
                                    w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                                   shadow hover:bgColor-3"
                                   type="button" name="button">
                                        <i class="fa fa-sign-out px-1"></i> Signout
                                   </button>
                                </a>

                                <a href="/profile" class="no-line xs:hide">
                                   <button class="bgColor-pri color-1 fs-xs  py-2
                                    w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                                   shadow hover:bgColor-pri-500"
                                   type="button" name="button">
                                        <i class="fa fa-user px-1"></i> Account
                                   </button>
                                </a>


                            <?php else: ?>

                                <a href="/signin" class="no-line xs:hide">
                                   <button class="bgColor-pri color-1 fs-xs  py-2
                                    w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                                   shadow hover:bgColor-pri-500"
                                   type="button" name="button">
                                        <i class="fa fa-sign-in px-1"></i> Signin
                                   </button>
                                </a>

                                <a href="/signup" class="no-line xs:hide">
                                   <button class="bgColor-pri color-1 fs-xs  py-2
                                    w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                                   shadow hover:bgColor-pri-500"
                                   type="button" name="button">
                                        <i class="fa fa-user px-1"></i> Sign  Up
                                   </button>
                                </a>

                            <?php endif; ?>
                        </ul>

                    </nav>
                </div>
            </header>

            <div class="w-5/12 txt-h-c ff-pri py-8 color-1 m-0-auto">
                <h1>Travel Hassle - free</h1>
                <h1 style="font-family:'',cursive;">
                   Convenience & Comfort for travelers is our top priority.
                </h1>
            </div>
    </div>

    <div class="w-7/12 m-0-auto bgColor-sec-600 h-56 fx mt-8">
        <div class="ff-pri py-8 txt-h-c color-1">

            <h2 class="pb-2 color-pri">COMFORT, PUNCTUALITY AND CONVENIENT</h2>

            <div class="fs-lg px-4 py-2">
              Our fleet of coaches is best-in-class and regularly maintained. Super-comfortable seats and free wifi.
              We value your time and hence, ensure on time departure.
              Save money with unbeatable pricing. We promise best value for your money.
              With up-to-date and current bus schedules, helpful staff and friendly on-site bus drivers,
              there isn't a thing that you need to worry about while travelling with us.
            </div>

        </div>
    </div>

    <div class="w-full bgColor-sec-600 h-16 fixed b-0 py-4 txt-h-c color-pri">
        © 2020 <?= app_name() ?> all rights reserved
    </div>

</body>

<?php require_once view('footer'); ?>
