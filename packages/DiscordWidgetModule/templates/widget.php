<div class="mt-3 w-96 bg-[#1e1f22] rounded">
    <header class="bg-[#5865f2] py-6 px-5 justify-between rounded-t flex flex-row">
        <h2 class="text-white font-bold text-2xl"><?php echo $data['name']; ?></h2>
        <span class="pt-2 text-sm text-white">
            <?php echo count($data['members']); ?>
            member(s) online
        </span>
    </header>
    <div class="text-gray-500 p-4">
        <div id="members">
            <p class="uppercase text-sm">Members online</p>
            <ul>
                <?php foreach ($data['members'] as $member) { ?>
                    <li class="text-sm mt-2 ms-3 flex flex-row align-middle">
                        <img class="me-1 rounded-full size-5" crossorigin="anonymous" alt=""
                            src="<?php echo $member['avatar_url']; ?>">
                        <?php echo $member['username']; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>