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
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@store') }}"
    method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" class="form-control" placeholder="User Name" name="username">
        </div>
        <div class="form-group">
            <label for="password">PassWord</label>
            <input type="password" class="form-control" placeholder="Pass Word" name="password">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="email" name="email">
        </div>
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" placeholder="Full Name" name="fullname">
        </div>
        <div class="form-group">
            <label for="fullname">Address</label>
            <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" name="phone">
        </div>
        <div class="form-group">
            <label for="created">Date Created</label>
            <input type="text" class="form-control" placeholder="created" name="created">
        </div>
        

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>