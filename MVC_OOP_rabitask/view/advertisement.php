<?php 
/**
 * @var $this BaseController
 */
$this->title = "List advertisement";
if (empty($data)) { ?>
    Not found data!<br>   
<?php } else { ?>
    <h3>id: <?= $this->escapeHtml($data["id"]) ?></h3>
    <h3>title: <?= $this->escapeHtml($data["title"]) ?></h3>
    <h3>userid: <?= $this->escapeHtml($data["userid"]) ?></h3>
    <h3>user name: <?= $this->escapeHtml($data["name"]) ?></h3>

<?php } ?>

<br>
<a href="/">&laquo; Back</a>