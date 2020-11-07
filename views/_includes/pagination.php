<!-- pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        
        <?php
            $data_length = $fetch->all_rows_length();
            $pagination_counter = 1;
        ?>
        <li class="page-item">
            <a class="page-link" href="/view.php?offset=<?php echo $pagination_counter - 1 ?>"><?php echo $pagination_counter; ?></a>
        </li>
        
        <?php while ($data_length >= 3): ?>
        <?php $pagination_counter = $pagination_counter + 1; ?>
        <li class="page-item">
            <a class="page-link" href="/view.php?offset=<?php echo $pagination_counter * 2 ?>">
            <?php echo $pagination_counter; ?>
            </a>
        </li>
        <?php $data_length = round($data_length / 3); ?>
        <?php endwhile; ?>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>
</nav>
<!-- /pagination -->