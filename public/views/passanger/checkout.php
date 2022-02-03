<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('nav'); ?>

        <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('passanger/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Checkout</h3>

            <form  id="checkout" action="checkout" method="post"
            class="w-full bgColor-1 h-auto py-5">

                <div class="w-full fx fx-j-a">
                    <div class="w-1/3">
                        <input name="booked_date" type="text" id="Date"
                        placeholder="Please select Date Time" data-input
                        class="hide">
                    </div>

                    <div class="w-1/3">
                        <div class="w-full fx fx-j-btw m-0-auto py-2">
                            <input type="number" class="bgColor-1-400 w-full
                            py-2 px-4  outline-0 border focus:b-color-pri outline-0
                            rounded color-1 color-2-700" name="cost_per_passanger"
                            placeholder="Ksh <?= $route->cost_per_passanger ?> Per Seat" disabled>

                            <input class="hide" type="text" name="cost_per_passanger"
                            value="<?= $route->cost_per_passanger ?>">

                            <input class="hide" type="text" name="route_id"
                            value="<?= $route->id ?>">

                        </div>

                        <div class="w-full fx fx-j-btw m-0-auto py-2">
                            <select type="text" name="vehicle_reg_no" placeholder="eg: Thika"
                             class="bgColor-1-400 py-2 px-4 w-full outline-0
                            border focus:b-color-pri outline-0 rounded color-1
                            color-2-700">
                            <option value="">Vehicle</option>

                            <?php foreach ($route->vehicle as $vehicle): ?>

                                <option value="<?= $vehicle->reg_no ?>">

                                    <?= $vehicle->reg_no ?>

                                </option>

                            <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="w-full fx fx-j-btw m-0-auto py-2">
                            <input type="number" name="booked_seats"
                             class="bgColor-1-400 w-full py-2 px-4  outline-0
                            border focus:b-color-pri outline-0 rounded color-1
                            color-2-700" placeholder="Number Of Seats">
                        </div>

                        <div class="w-full fx fx-j-btw m-0-auto py-2">
                            <input type="text" name="mpesa_code"
                             class="bgColor-1-400 w-full py-2 px-4  outline-0
                            border focus:b-color-pri outline-0 rounded color-1
                            color-2-700" value="" placeholder="Payment Code">
                        </div>

                        <p id="response" class="w-full txt-h-c"></p>

                        <div class="w-full fx fx-j-btw m-0-auto py-2">
                            <button id="checkout_btn" type="button" name="button"
                            class="w-full bgColor-pri py-2 px-2 border
                            b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                            hover:bgColor-pri-700"
                            onclick="(new Ajax).form('checkout')
                                               .loader('checkout_btn')
                                               .flush('response')
                                               .send();">
                                <i class="fa fa-check"></i> Complete
                            </button>
                    </div>

                </div>

            </form>
        </div>

    </main>
    <script type="text/javascript">
    var date = new Date();
    var now = date.getTime();

    $("#Date").flatpickr({
        enableTime: false,
        inline: true,
        minDate: "today"
    });
    </script>
</body>
<?php require_once view('footer'); ?>
