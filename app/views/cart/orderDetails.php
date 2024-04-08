<?php
include_once 'app/views/share/header.php';
?>

<div class="row">

    <div class="col-sm-12">
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ten San Pham</th>
                    <th>So luong</th>
                    <th>Don Gia</th>
                    <th>Thanh Tien</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $products->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <th><?= $row['orderDetailID'] ?></th>
                        <th><?= $row[''] ?></th>
                       
                        <th><?= $row['price'] ?></th>
                        <th>
                            <a href="/chieu2/product/edit/<?=$row['id']?>">
                                Edit
                            </a>
                        | Delete</th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>



<?php

include_once 'app/views/share/footer.php';

?>