<?php 
require_once('includes/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalogue</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-success float-right mb-4 pl-5 pr-5" data-toggle="modal"
                    data-target="#addBookModal">Add</button>
                <table class="table table-bordered table-white" id="books_table">
                    <thead class="text-center text-uppercase">
                        <tr>
                            <th>Title</th>
                            <th>Isbn</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Year Published</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody id="books_group"></tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include 'modals/add.php';
    include 'modals/edit.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <script src="js/books.js"></script>
</body>

</html>