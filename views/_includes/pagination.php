<!-- pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item">
        <a class="page-link" href="core/paginator.php?offset=0" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        
        <?php
            $data_length = $fetch->all_rows_length();
            $pages_quantity = ceil($data_length / 3);
        ?>

        <?php for ($i=1; $i<=$pages_quantity; $i++) : ?>
            <li class="page-item ">
                <a class="page-link" href="core/paginator.php?offset=<?php echo $i - 1; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
        <?php endfor; ?>
        <li class="page-item">
        <a class="page-link" href="core/paginator.php?offset=1" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>


<!--
        <li class="page-item active">
            <a class="page-link" href="core/paginator.php?offset=<?php //echo $pagination_counter - 1 ?>"><?php echo $pagination_counter; ?></a>
        </li>
        
        <?php //while ($data_length >= 3): ?>
        <?php //$pagination_counter = $pagination_counter + 1; ?>
        <li class="page-item">
            <a class="page-link" href="core/paginator.php?offset=<?php //echo $pagination_counter * 2 ?>">
            <?php //echo //$pagination_counter; ?>
            </a>
        </li>

        <?php //endwhile; ?>
        
</nav>-->
<!-- /pagination -->