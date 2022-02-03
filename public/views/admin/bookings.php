<?php require_once view('header'); ?>

<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">All Bookings</h3>
            <table class="table-auto border-collapse bgColor-trans m-0-auto">
                <thead>
                    <tr>
                        <th class="px-2 py-2 color-2-700">Passanger</th>
                        <th class="px-2 py-2 color-2-700">Route</th>
                        <th class="px-2 py-2 color-2-700">Vehicle Reg</th>
                        <th class="px-2 py-2 color-2-700">Booked Seats</th>
                        <th class="px-2 py-2 color-2-700">Mpesa Code</th>
                        <th class="px-2 py-2 color-2-700">Total Cost</th>
                        <th class="px-2 py-2 color-2-700">Status</th>
                    </tr>
                </thead>

                <tbody class="txt-h-c">

                    <?php foreach ($bookings as $booking): ?>

                        <tr class="bgColor-1 border-8 b-solid b-color-1">

                            <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->user->fullName ?>  </td>

                            <td class="px-2 py-1 color-2-600 border-0">
                                <?= $booking->vehicle->route->from_A ?>
                                            -
                                <?=$booking->vehicle->route->to_B  ?>
                            </td>

                            <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->vehicle->reg_no ?>  </td>

                            <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->booked_seats ?> </td>
                            <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->mpesa_code ?> </td>
                            <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->total_cost ?>  </td>

                            <?php if ($booking->isConfirmed()): ?>

                                <td class="px-2 py-1 color-success border-0"> <?= $booking->status ?> </td>

                            <?php elseif ($booking->isRejected()) : ?>

                                <td class="px-2 py-1 color-3 border-0"> <?= $booking->status ?> </td>

                            <?php else: ?>

                                <td class="px-2 py-1 color-2-600 border-0"> <?= $booking->status ?> </td>

                            <?php endif; ?>

                            <td class="px-2 py-1 color-pri">
                                <a href="/booking/<?= $booking->id ?>" class="no-line">
                                    <button class="bgColor-pri w-auto
                                    fs-sm  py-1  border-0 rounded fw-bold ff-pri
                                    pointer outline-0 color-1" type="button">
                                        View details
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
