<?php
?>
    <div class="row my-5">
                    <h3 class="fs-4 mb-3">Customer Informatios</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Reservations</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo get_costumers_data(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
<script src="js/delete.js"></script>