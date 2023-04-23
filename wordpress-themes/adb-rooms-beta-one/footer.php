<footer>

    <div class="footer">

        <div class="footer-nav">

            <?php
                $footargs=array(
                    "theme_location"=>"footer"
                );

                wp_nav_menu($footargs);
                ?>
        </div>

    </div>
    <div class="copyrights">
        copyright 2023 by ADB Rooms. All rights reserved.
    </div>
</footer>

<?php
    wp_footer();
    ?>


</div>
</body>

</html>