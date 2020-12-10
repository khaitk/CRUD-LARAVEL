<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="box-footer">
        <a href="/"><button type="button" class="btn btn-primary">Home</button></a>
        <a href="/show"><button type="button" class="btn btn-primary">Show</button></a>
    </div>
    <div class="container">
        <form action="/edit/<?php echo $user[0]->id; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name : </label>
                    <input type="text" required="" class="form-control" name="name" value="<?php echo $user[0]->name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Group : </label>
                    <input type="text" required="" class="form-control" name="group" value="<?php echo $user[0]->group; ?>">
                </div>
                <div class="form-group">
                    <label for="">Gmail : </label>
                    <input type="gmail" required="" class="form-control" name="gmail" value="<?php echo $user[0]->gmail; ?>">
                </div>
                <div class="form-group">
                    <label for="">Upload Image : </label>
                    <input type="file" required="" class="form-control" name="images">
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
