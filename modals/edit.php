<!-- Modal -->
<div class="modal fade" id="editBookModal" tabindex="-1" role="dialog" aria-labelledby="editBookLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookLabel">Edit Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="edit_book_form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" id="edit_title" placeholder="Title" required>
                                <input type="hidden" name="id" id="edit_id" required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">ISBN</label>
                                <input type="text" class="form-control" name="isbn" id="edit_isbn" placeholder="ISBN"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Author</label>
                                <input type="text" class="form-control" name="author" id="edit_author" placeholder="Author"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Publisher</label>
                                <input type="text" class="form-control" name="publisher" id="edit_publisher"
                                    placeholder="Publisher" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Year Publsihed</label>
                                <input type="number" max="9999" class="form-control" name="year" id="edit_year"
                                    placeholder="Year Publsihed" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" name="category" id="edit_category"
                                    placeholder="Category" required>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>