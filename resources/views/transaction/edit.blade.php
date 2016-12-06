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
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@update') }}"
          method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ old('id', $getTransactionById['id'])}}">
        <div class="form-group">
            <label for="user_id">User_ID</label>
            <input type="text" class="form-control"
                   value="{{ old('user_id', $getTransactionById['user_id'])}}" name="user_id" disabled="true">
        </div>
        <div class="form-group">
            <label for="product_id">Product_ID</label>
            <input type="text" class="form-control"
                   value="{{ old('product_id', $getTransactionById['product_id'])}}" name="product_id" disabled="true">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control"
                   value="{{ old('quantity', $getTransactionById['quantity'])}}" name="quantity" disabled="true">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control"
                   value="{{ old('quantity', $getTransactionById['quantity'])}}" name="quantity" disabled="true">
        </div>
        <div class="form-group">
            <label for="create">Create</label>
            <input type="text" class="form-control"
                   value="{{ old('create', $getTransactionById['create'])}}" name="quantity" disabled="true">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control"
                   value="{{ old('status', $getTransactionById['status'])}}" name="status" >
        </div>
        

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>