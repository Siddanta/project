<?php
/*
Template Name: File Download
*/
get_header();
?>

<div class="file-section">

    <div class="file-table">
        <div class="box-heading text-center">
            <h2 class="h1">Table Title</h2>
        </div>
        <div class="container">

            <?php
            if (have_rows('ss_all_files')) {
                $count = 1; ?>
            <table class="table share-feat">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">File Name</th>
                        <th scope="col">File Details</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while (have_rows('ss_all_files')) {
                            the_row();
                            $file = get_sub_field('ss_file');
                            echo '<tr class="share-feat">';
                            echo  '<th scope="row">' . $count . '</th>';
                            echo  '<td>' . $file['filename'] . '</td>';
                            echo '<td>File Details</td>';
                            echo '<td><a href="' . $file['url'] . '" target="_blank">Download</a></td>';
                            echo '<td>Share: <a href="https://www.facebook.com/sharer/sharer.php?u=' . $file['url'] . '" target="_blank"><span class="icon-facebook"></span></a></td>';
                            echo '</tr>';
                            $count++;
                        } ?>
                </tbody>
            </table>
            <?php }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>