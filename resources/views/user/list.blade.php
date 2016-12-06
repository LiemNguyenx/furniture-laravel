<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <table class="table table-hover">
     <tr>
         <td>Id</td>
         <td>User_ID</td>
         <td>Product_ID</td>
         <td>Quantity</td>
         <td>Created</td>
         <td>Status</td>
     </tr>
     <?php foreach($allUsers as $transaction):  ?>
        <tr>
            <td> <?php echo $transaction['id']; ?> </td>
            <td> <?php echo $transaction['user_id']; ?></td>
            <td><?php echo $transaction['product_id']; ?></td>
            <td><?php echo $transaction['quantity']; ?></td>
            <td><?php echo $transaction['created']; ?></td>
            <td><?php echo $transaction['status']; ?></td>
            <td>
                <a href='transaction/<?php echo $transaction['id'];?>/edit'> Edit</a>
                <a href='transaction/<?php echo $transaction['id'];?>/delete'> Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>
    </table>
</div>
</body>
</html>