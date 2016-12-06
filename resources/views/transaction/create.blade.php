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
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('TransactionController@store') }}"
    method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="user_id">User_ID</label>
            <input type="text" class="form-control" placeholder="User_Id" name="user_id">
        </div>
        
        <div class="form-group">
            <label for="product_id">Product_ID</label>
            <input type="text" class="form-control" placeholder="Product_ID" name="product_id">
        </div>
        
        <div class="form-group">
            <label for="quantyti">Quantity</label>
            <input type="text" class="form-control" placeholder="Quantity" name="quantyti">
        </div>
        
        <div class="form-group">
            <label for="created">Created</label>
            <input type="text" class="form-control" placeholder="Created" name="Created">
        </div>
        
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" placeholder="Status" name="status">
        </div>
        
        

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>