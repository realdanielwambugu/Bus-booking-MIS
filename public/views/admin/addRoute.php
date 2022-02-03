<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Add New Route</h3>

            <form  id="add_route" action="addroute" method="post"
            class="w-full bgColor-1 h-auto py-5">

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="from_A">From</label>
                    <input type="text" name="from_A" placeholder="eg: Nairobi"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border  focus:b-color-pri outline-0 rounded color-1
                    color-2-700 ">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="to_B">To</label>
                    <input type="text" name="to_B" placeholder="eg: Thika"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700 ">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="departure_time">Departure</label>
                    <input id="departure_time" type="text" name="departure_time"  data-input
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700  ">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="cost_per_passanger">Cost</label>
                    <input type="number" name="cost_per_passanger" placeholder="eg: 500"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700 ">
                </div>

                <p id="response" class="w-full txt-h-c"></p>

                <div class="w-full fx fx-j-a">
                    <button id="add_route_btn" type="button" name="button"
                    class="w-3/12 bgColor-pri py-2 px-2 border
                    b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                    hover:bgColor-pri-700 mr-2"
                    onclick="(new Ajax).form('add_route')
                                       .loader('add_route_btn')
                                       .flush('response')
                                       .send();">
                        <i class="fa fa-save"></i> Save
                    </button>

                </div>
            </form>


        </div>

    </main>
    <script type="text/javascript">
    var date = new Date();
    var now = date.getTime();

    $("#departure_time").flatpickr({
        enableTime: true,
        noCalendar: true,
        inline: false,
        defaultDate: now,
    });
    </script>
</body>
<?php require_once view('footer'); ?>
