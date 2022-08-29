<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>

</head>

    <body>
    <div class="container height-50 d-inline-flex p-4 justify-content-center align-items-center">
    <div class="card text-center">
    <div class="card-header">
    <div class="mb-2">
    <div class="card-body">
        <h2 style="color:black;">Upload your files here!</h2>
        <br>
            
                <!-- The data encoding type, enctype, MUST be specified as below -->
                <form enctype="multipart/form-data" action="uploader.php" method="POST">
                    
                    <!-- Name of input element determines name in $_FILES array -->
                    Send this file: <input class="form-control" input name="userfile" type="file" id="formFile"/> 
                   
                    <br>
                    <input type="submit" value="Send File" />
                </form>
        </div>
        </div>
        </div>
    </body>
</html>