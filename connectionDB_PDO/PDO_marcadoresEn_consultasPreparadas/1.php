<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDO consultations Prepared MARKERS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>SEARCH PRODUCTS</h2>

        <form action="2.php" method="get">
            <div class="form-group">

                <label for="brand">brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
                <label for="country">country origin:</label>
                <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <br><hr>

    
        <!-- **************************************************************** -->
   

</body>

</html>