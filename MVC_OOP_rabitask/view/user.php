<?php
/**
 * @var $this BaseController
 */
$this->title = "List user";
if (empty($data)) { ?>
    Not found data!<br>
<?php } else { ?>
    <h3>Id: <?= $this->escapeHtml($data["id"]) ?></h3>
    <h3>Name: <?= $this->escapeHtml($data["name"]) ?></h3>
<?php } ?>

<br>
<a href="/">&laquo; Back</a>