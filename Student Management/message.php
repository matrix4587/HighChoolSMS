<?php
if(isset($_SESSION["message"])) :
?>
<div class="alert alert-warning alert-dismissable fade-show bg-success text-light" role="alert">
    <?= $_SESSION["message"];  ?>
    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION["message"]);
endif;
?>
