<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-10/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <div class="w-11/12 bgColor-1 m-0-auto h-64 fx fx-j-btw">
                <div class="w-1/2 h-64 fx fx-i-c pl-10 color-pri txt-h-c">
                    <h2>Hello <?= auth()->user()->FullName ?> ! Welcome to adminstration Area</h2>
                </div>
                 <div class="w-1/2 py-4">
                     <img class="w-full h-full contain"
                         src="<?= images_path('static1.svg'); ?>"
                     alt="admin image">
                 </div>
            </div>

            <div class="w-11/12 bgColor-1 m-0-auto h-auto mt-8 pb-10 fx fx-j-btw ">
                <div class="w-1/5 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 shadow">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-users color-pri"></i>
                      <p>Users</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $users_count ?>
                    </div>
                </div>

                <div class="w-1/4 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 shadow">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-car color-pri"></i>
                      <p>Vehicles</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $vehicles_count ?>
                    </div>
                </div>

                <div class="w-1/4 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 shadow">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-shopping-cart color-pri"></i>
                      <p>Bookings</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $booking_count ?>
                    </div>
                </div>

                <div class="w-1/4 h-20 fx fx-j-c fx-i-c bgColor-1 px-4 shadow">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-road color-pri"></i>
                      <p>Routes</p>
                    </div>

                    <div class="w-1/2 txt-h-c fw-600">
                       <?= $routes_count ?>
                    </div>
                </div>

         </div>
        </div>


    </main>
</body>
<?php require_once view('footer'); ?>
