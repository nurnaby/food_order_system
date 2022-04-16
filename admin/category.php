<?php 
include('top.php');
include('database_inc.php');
$sql ="select * from category order by order_number";
$res = mysqli_query($con,$sql);
?>
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h1 class="titel" style="margin-bottom:20px">Category Master</h1>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>

                                <tr>
                                    <th>Order #</th>
                                    <th>Purchased On</th>
                                    <th>Customer</th>
                                    <th>Ship to</th>
                                    <th>Base Price</th>
                                    <th>Purchased Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(mysqli_num_rows($res)>0){
                                
                                ?>
                                <tr>
                                    <td>1</td>
                                    <td>2012/08/03</td>
                                    <td>Edinburgh</td>
                                    <td>New York</td>
                                    <td>$1500</td>
                                    <td>$3200</td>
                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>

                                </tr>
                                <?php }else{ ?>

                                <tr>
                                    <td colspan="5" class="text_center">no data found</td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include('footer.php');?>