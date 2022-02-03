<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">
        
        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Registred Vehicles</h3>

            <div class="w-10/12 m-0-auto py-2">
                <a href="/addvehicle" class="no-line">
                    <button class="bgColor-pri w-auto
                    fs-sm  py-1 px-5 border-0 rounded fw-bold ff-pri
                    pointer outline-0 color-1" type="button"
                    onclick="">
                        <i class="fa fa-plus"></i>  Add New Vehicle
                    </button>
                </a>
            </div>

            <table class="table-auto border-collapse bgColor-trans m-0-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 color-2-700">Reg No</th>
                        <th class="px-4 py-2 color-2-700">Type</th>
                        <th class="px-4 py-2 color-2-700">Seats</th>
                        <th class="px-4 py-2 color-2-700">Route</th>
                    </tr>
                </thead>

                <tbody class="txt-h-c">

                    <?php foreach ($vehicles as $vehicle): ?>

                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $vehicle->reg_no ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $vehicle->type ?>  </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $vehicle->seats ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0">
                                <?= $vehicle->route->from_A ?> - <?= $vehicle->route->to_B ?>
                            </td>
                            <td class="px-4 py-1 color-pri">
                                <a href="/deletevehicle/<?= $vehicle->reg_no ?>" class="no-line">
                                    <button class="bgColor-3 w-auto
                                    fs-sm py-1 px-2 border-0 rounded fw-bold ff-pri
                                    pointer outline-0 color-1" type="button">
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </main>
</body>
<?php require_once view('footer'); ?>
