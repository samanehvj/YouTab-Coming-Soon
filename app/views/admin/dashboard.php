<?php

include VIEW . 'admin/layouts/header.php';
include VIEW . 'admin/layouts/sidebar.php';

?>
<div class="table-responsive">
    <!-- <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table> -->
    <p> You Have <?= $this->viewData['subscriberCount'] ?> Subscriber</p>
    <pre>
        <?= print_r($this->viewData['subscribers']) ?>
    </pre>
</div>
<?php

include VIEW . 'admin/layouts/footer.php';
