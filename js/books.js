$(document).ready(function () {
    getDatas();


    $('body').on('submit', '#add_book_form', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "includes/add.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "Success!",
                    text: "New Book Added Succesfully.",
                    type: "success",
                    showConfirmButton: false
                });
                setTimeout(function () {
                    location.reload();
                }, 2000);

            },
            error: function (error) {
                swal({
                    title: 'Error!',
                    text: "Please check empty fields or invalid input!",
                    type: "error",
                })
            }
        });
    });

    $('body').on('submit', '#edit_book_form', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "includes/update.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                swal({
                    title: "Success!",
                    text: "Book Succesfully Updated.",
                    type: "success",
                    showConfirmButton: false
                });
                setTimeout(function () {
                    location.reload();
                }, 2000);

            },
            error: function (error) {
                swal({
                    title: 'Error!',
                    text: "Please check empty fields or invalid input!",
                    type: "error",
                })
            }
        });
    });

    $('body').on('click', '.btn-edit', function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        getData(id)
    });

    $('body').on('click', '.btn-delete', function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this book!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    deleteData(id);
                }
            });
        
    });


});

function getDatas() {
    $.ajax({
        url: "includes/get_books.php",
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            //console.log(data);
            $.each(data, function (k, value) {
                var newTextBoxDiv = $(document.createElement('tr'));
                newTextBoxDiv.after().html("<td>" + value.title + "</td>" +
                    "<td>" + value.isbn + "</td>" +
                    "<td>" + value.author + "</td>" +
                    "<td>" + value.publisher + "</td>" +
                    "<td>" + value.published_year + "</td>" +
                    "<td>" + value.category + "</td>" +
                    "<td class='text-center'><button class='btn btn-secondary btn-edit' data-id='" + value.id + "'>Edit</button><button class='btn btn-secondary btn-delete' data-id='" + value.id + "'>Delete</button></td>" +
                    "</tr>");
                newTextBoxDiv.appendTo("#books_group");
                console.log(value);
            });
        },
        error: function (error) {
            swal({
                title: 'Error!',
                text: "Please server!",
                type: "error",
            })
        }
    });
}

function getData(id) {
    $.ajax({
        url: "includes/get_book.php?id=" + id,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#edit_id').val(data[0].id);
            $('#edit_title').val(data[0].title);
            $('#edit_isbn').val(data[0].isbn);
            $('#edit_author').val(data[0].author);
            $('#edit_publisher').val(data[0].publisher);
            $('#edit_year').val(data[0].published_year);
            $('#edit_category').val(data[0].category);
            $('#editBookModal').modal('show');
        },
        error: function (error) {
            swal({
                title: 'Error!',
                text: "Got some error in the server!",
                type: "error",
            })
        }
    });
}

function deleteData(id) {
    $.ajax({
        url: "includes/delete_book.php?id=" + id,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            swal("Poof! Your book has been deleted!", {
                icon: "success",
            });
            setTimeout(function () {
                location.reload();
            }, 2000);
        },
        error: function (error) {
            swal({
                title: 'Error!',
                text: "Delete Failed!",
                type: "error",
            })
        }
    });
}