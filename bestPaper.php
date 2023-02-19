<?php require("./templates/header.php"); ?>
<div class="body-start"></div>
<div class="card">
    <div class="container mt-4">
        <div class="my-3">
            <h3>Best Paper Awards for Faculty Publications</h3>
            <div class="container"><?php require("./activitiesContent/bestPaperAwards.php"); ?></div>
        </div>
    </div>
</div>
<style>
thead {
    background-color: var(--primary);
}
</style>
<?php require("./templates/footer.php"); ?>