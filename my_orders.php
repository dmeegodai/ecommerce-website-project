<center><!--Center Begin-->
    
    <h1> My Orders </h1>
    
    <p class="lead"> Your Orders on one place </p>
    
    <p class="text-muted">
        
        If you have any question on our products, please free to <a href="./contact.php">Contact us</a>
        
    </p>
    
</center><!--Center Ending-->

<hr>


<div class="table-responsive"><!--table-responsive begin-->
    
    <table class="table table-bordered table-hover"><!--table table-bordered table-hover begin-->
        
        <thead><!--thead begin-->
             <tr>
             <th> On: </th>
             <th>Due Amount: </th>
             <th>Invoice No: </th>
             <th>Qty</th>
             <th>Order Date</th>
             <th>Paid / Unpaid</th>
             <th>Status: </th>
             
            </tr>
        </thead><!--thead Ending-->
        
        <tbody><!--tbody Begin-->
           
           <?php
            
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session' ";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id = '$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $qty = $row_orders['qty'];
                $order_date = substr($row_orders['order_date'],0,11);
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='Pending'){
                    
                    $order_status = 'Unpaid';
                    
                    
                }else{
                    
                     $order_status = 'Paid';
                    
                }

            ?>
            
            <tr>
                
                <th><?php echo $i; ?></th>
                <th>Rs.<?php echo $due_amount; ?></th>
                <th><?php echo $invoice_no; ?></th>
                <th><?php echo $qty; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th>
                 <td>
                     <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm">Confirm Payment</a>
                 </td>
                
            </tr>
            
            <?php } ?>
            
            
        </tbody><!--tbody Ending-->
        
    </table><!--table table-bordered table-hover Ending-->
    
</div><!--table-responsive Ending-->



