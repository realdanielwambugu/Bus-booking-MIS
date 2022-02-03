<?php require_once view('header'); ?>

<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Booking details</h3>

            <div class="w-full bgColor-1 h-auto py-5">

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Passanger</label>
                    <input type="text" name="type" value="<?= $booking->user->fullName ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Route</label>
                    <input type="text" name="type" value=" <?= $booking->vehicle->route->from_A ?> - <?=$booking->vehicle->route->to_B  ?>"
                    disabled class="bgColor-1-400 py-2 px-4 w-7/12 outline-0
                    border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Vehicle Reg</label>
                    <input type="text" name="type" value=" <?= $booking->vehicle->reg_no ?> " disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Date</label>
                    <input type="text" name="type" value="<?= $booking->booked_date ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Departure Time</label>
                    <input type="text" name="type" value="<?= $booking->vehicle->route->departure_time ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Booked Seats</label>
                    <input type="text" name="type" value="<?= $booking->booked_seats ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Mpesa Code</label>
                    <input type="text" name="type" value="<?= $booking->mpesa_code ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Total Cost</label>
                    <input type="text" name="type" value="<?= $booking->total_cost ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Status</label>

                    <?php if ($booking->isConfirmed()): ?>

                        <input type="text" name="type" value="<?= $booking->status ?>" disabled
                        class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-success">

                    <?php elseif ($booking->isRejected()) : ?>

                        <input type="text" name="type" value="<?= $booking->status ?>" disabled
                        class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-3">

                    <?php else: ?>

                        <input type="text" name="type" value="<?= $booking->status ?>" disabled
                        class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">

                    <?php endif; ?>

                </div>

                <div class="w-5/12 fx fx-j-a m-0-auto py-2">

                    <?php if ($booking->isPending()): ?>

                        <div class="px-2 py-1 color-pri">
                            <a href="/confirm/<?= $booking->id ?>" class="no-line">
                                <button class="bgColor-success w-auto
                                fs-sm  px-5 py-1  border-0 rounded fw-bold ff-pri
                                pointer outline-0 color-1" type="button">
                                    Confirm
                                </button>
                            </a>

                        </div>

                        <div class="px-2 py-1 color-pri">
                            <a href="/reject/<?= $booking->id ?>" class="no-line">
                                <button class="bgColor-3 w-auto
                                fs-sm px-5 py-1  border-0 rounded fw-bold ff-pri
                                pointer outline-0 color-1" type="button">
                                    Reject
                                </button>
                            </a>
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </main>

</body>

<?php require_once view('footer'); ?>
