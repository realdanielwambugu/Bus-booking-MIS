<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('nav'); ?>

        <main class=" w-9/12 h-auto m-0-auto ff-pri fx py-10">

        <?php require_once view('passanger/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">My Profile</h3>

            <form  id="update_student" action="student/update" method="post"
            class="w-full bgColor-1 h-auto py-5">

                <input type="hidden" name="id" value="" />
                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="type">Type</label>
                    <input type="text" name="type" value="<?= $user->type?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="fullName">Full Name</label>
                    <input type="text" name="fullName" value="<?= $user->fullName ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="email">Email</label>
                    <input type="email" name="email" value="<?= $user->email ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="status">Status</label>
                    <input type="text" name="status" value="<?= $user->status ?>" disabled
                    class="bgColor-1-400 py-2 px-4 w-7/12 outline-0 border-0 color-2-700">
                </div>

                <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                    <label class="fw-bold fs-sm" for="created_at">Joined</label>
                    <input type="text" name="<?= $user->created_at ?>" value="12-11-2020" disabled
                     class="bgColor-1-400 py-2 px-4 w-7/12 outline-0
                    border-0 color-2-700 ">
                </div>

            </form>

        </div>

    </main>
</body>
<?php require_once view('footer'); ?>
