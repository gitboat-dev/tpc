<div class="modal fade" id="blogImagesGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-gallery="0">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="pipe">
          <li>
            <input type="file" id="addGallery" data-id="{{ $blog->id }}" style="display: none;" onchange="uploadGallery(this)" multiple>
            <a href="javascript:void(0)" onclick="addGallery()">
              <i class="fa fa-plus"></i>
              เพิ่มรูป
            </a>
          </li>
        </ul>
        <div class="row gallery-block">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary note-btn note-btn-primary insert-img" insert-to="summernote-details" disabled>Insert Image</button>
      </div>
    </div>
  </div>
</div>