<?php require_once view('header'); ?>
<body style='background-image:url("<?= basePath() ?>/public/assets/images/bg/bg6.jpg")'
    class="w-full bg-no-repeat bg-cover">

    <?php require_once view('admin/header'); ?>

    <main class="w-9/12 h-auto m-0-auto ff-pri fx py-10">
        
        <?php require_once view('admin/nav'); ?>

        <div class="bgColor-1 w-9/12 h-auto m-0-auto shadow">

            <h3 class="w-full py-2 txt-h-c color-pri-700">Users List</h3>

            <table class="table-auto border-collapse bgColor-trans m-0-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 color-2-700">Full Name</th>
                        <th class="px-4 py-2 color-2-700">Email</th>
                        <th class="px-4 py-2 color-2-700">Type</th>
                        <th class="px-4 py-2 color-2-700">Status</th>
                        <th class="px-4 py-2 color-2-700">Joined</th>
                    </tr>
                </thead>

                <tbody class="txt-h-c">

                    <?php foreach ($users as $user): ?>

                    <tr class="bgColor-1 border-8 b-solid b-color-1">
                        <td class="px-4 py-1 color-2-600 border-0"> <?= $user->fullName ?> </td>
                        <td class="px-4 py-1 color-2-600 border-0"> <?= $user->email ?> </td>
                        <td class="px-4 py-1 color-2-600 border-0"> <?= $user->type ?> </td>
                        <td class="px-4 py-1 color-2-600 border-0"> <?= $user->status ?> </td>
                        <td class="px-4 py-1 color-2-600 border-0"> <?= $user->created_at ?> </td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </main>
</body>
<?php require_once view('footer'); ?>
