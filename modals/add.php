<!-- Modal -->
<div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="BookLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BookLabel">Add Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="add_book_form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                                    required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">ISBN</label>
                                <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="Author"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Publisher</label>
                                <input type="text" class="form-control" name="publisher" id="publisher"
                                    placeholder="Publisher" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Year Publsihed</label>
                                <input type="number" max="9999" class="form-control" name="year" id="year"
                                    placeholder="Year Publsihed" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" name="category" id="category"
                                    placeholder="Category" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>