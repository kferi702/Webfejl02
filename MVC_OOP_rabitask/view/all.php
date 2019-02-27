<?php
/**
 * @var $this BaseController
 */
$this->title = "List all" ?>
<h2>Users</h2>
<div>
    <?php if (empty($users)) { ?>
        Not found user data
    <?php } else {
        foreach ($users as $user) {
            ?>
            <a href="/user/<?= $user["id"] ?>"><?= $this->escapeHtml($user["id"]); ?></a>
            <a href="/user/<?= $user["name"] ?>"><?= $this->escapeHtml($user["name"]); ?></a>
            <br>
        <?php }
    }
    ?>
</div>    
<h2>Advertisements</h2>

<div>
    <?php if (empty($advs)) { ?>
        Not found user data
    <?php } else {
        foreach ($advs as $adv) {
            ?>
            <a href="/advertisement/<?= $adv["id"] ?>"><?= $this->escapeHtml($adv["id"]); ?></a>
            <a href="/advertisement/<?= $adv["title"] ?>"><?= $this->escapeHtml($adv["title"]); ?></a>
            <br>
    <?php }
}
?>
</div>    
