<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Add New Vehicle</h3>

            <form  id="add_vehicle" action="addvehicle" method="post"
            class="w-full bgColor-1 h-auto py-5">

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="reg_no">Reg No</label>
                    <input type="text" name="reg_no" placeholder="eg: Kbl456p"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700 ">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Type</label>
                    <input type="text" name="type"  placeholder="eg: Bus"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700 ">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="seats">Seats</label>
                    <input type="number" name="seats"  placeholder="eg: 14"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700">
                </div>

                <div class="w-6/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="route_id">Route</label>
                    <select type="text" name="route_id" placeholder="eg: Thika"
                     class="bgColor-1-400 py-2 px-4 w-9/12 outline-0
                    border focus:b-color-pri outline-0 rounded color-1
                    color-2-700">

                    <?php foreach ($routes as $route): ?>

                        <option value="<?= $route->id ?>">

                            <?= $route->from_A ?> - <?= $route->to_B ?>

                        </option>

                    <?php endforeach; ?>

                    </select>
                </div>

                <p id="response" class="w-full txt-h-c"></p>

                <div class="w-6/12 fx fx-j-a  m-0-auto">
                    <button id="add_vehicle_btn" type="button" name="button"
                    class="w-4/12 bgColor-pri py-2 px-2 border m-0-auto
                    b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                    hover:bgColor-pri-700"
                    onclick="(new Ajax).form('add_vehicle')
                                       .loader('add_vehicle_btn')
                                       .flush('response')
                                       .send();">
                        <i class="fa fa-save"></i> Save
                    </button>

                </div>
            </form>

        </div>

    </main>
</body>
<?php require_once view('footer'); ?>
