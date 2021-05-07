<?php
?>
    <div class="row my-5">
                    <h3 class="fs-4 mb-3">Rooms Informatios</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Pension</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo get_pension_data(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
<script src="js/delete.js"></script>