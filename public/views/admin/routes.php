<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">
        
        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Transport Routes</h3>

            <div class="w-10/12 m-0-auto py-2">
                <a href="/addroute" class="no-line">
                    <button class="bgColor-pri w-auto
                    fs-sm  py-1 px-5 border-0 rounded fw-bold ff-pri
                    pointer outline-0 color-1" type="button"
                    onclick="">
                        <i class="fa fa-plus"></i> Add New Route
                    </button>
                </a>
            </div>

            <table class="table-auto border-collapse bgColor-trans m-0-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 color-2-700">From</th>
                        <th class="px-4 py-2 color-2-700">To</th>
                        <th class="px-4 py-2 color-2-700">Departure  Time</th>
                        <th class="px-4 py-2 color-2-700">Cost Per Passanger</th>
                    </tr>
                </thead>

                <tbody class="txt-h-c">

                    <?php foreach ($routes as $route): ?>

                        <tr class="bgColor-1 border-8 b-solid b-color-1">
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $route->from_A ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $route->to_B ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $route->departure_time ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $route->cost_per_passanger ?> </td>
                            <td class="px-4 py-1 color-pri">
                                <a href="/deleteroute/<?= $route->id ?>" class="no-line">
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
