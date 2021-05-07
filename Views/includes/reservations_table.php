<?php
?>
    <div class="row my-5">
                    <h3 class="fs-4 mb-3">Reservations</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" >Reservation Number</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Check IN</th>
                                    <th scope="col">Check OUT</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo reservations_data(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>