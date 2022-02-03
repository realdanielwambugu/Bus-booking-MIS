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
                     <i class="fa fa-home px-1"></i> Overview
                    </li>
                </a>

                <button class="bgColor-sec-600 color-1 fs-xs  border-0 outline-0"
                type="button" name="button">
                     <i class="fa fa-star px-1"></i> <?= auth()->user()->fullName ?>
                </button>

                <a href="/logout" class="no-line xs:hide">
                   <button class="bgColor-pri color-1 fs-xs  py-2
                    w-24  border-0 rounded fw-bold ff-pri pointer outline-0
                   shadow hover:bgColor-3"
                   type="button" name="button">
                        <i class="fa fa-sign-out px-1"></i> Signout
                   </button>
                </a>
            </ul>

        </nav>
    </div>
</header>
