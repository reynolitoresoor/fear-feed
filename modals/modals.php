<!-- Edit Modal -->
  <div class="modal fade" id="editPostModal">
    <div class="modal-dialog">
      <form method="POST" action="" id="edit-post">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <label class="form-label">Post</label>
          <input type="text" class="post" name="post" class="form-control" id="edit-post" value="" />
          <input type="hidden" class="post-id" name="post_id" id="post-id">
          <input type="hidden" name="user_id" id="user-id">
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="edit-post" name="edit_post">Update</button>
          <button type="button" class="btn btn-dafault border" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Comment Modal -->
  <div class="modal fade" id="editCommentModal">
    <div class="modal-dialog">
      <form method="POST" action="" id="edit-comment">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title comment">Edit Comment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <label class="form-label" for="comment">Comment</label>
          <textarea class="form-control" name="comment" class="comment" id="comment" rows="4"></textarea>
          <input type="hidden" class="post-id" name="post_id" id="post-id">
          <input type="hidden" name="user_id" id="user-id">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary edit-comment" id="edit-comment" name="edit_comment">Update comment</button>
          <button type="button" class="btn btn-default border" data-dismiss="modal">Close</button>
        </div>

      </div>
      </form>
    </div>
  </div>