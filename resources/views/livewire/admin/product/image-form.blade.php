<div>
    <div class="card">
        <div class="card-header">
             <h4 class="card-title">Add Product Photo</h4>
        </div>
        <div class="card-body">
             <!-- File Upload -->
             <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                  data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                  <div class="fallback">
                       <input name="file" type="file" multiple />
                  </div>
                  <div class="dz-message needsclick">
                       <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                       <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                       <span class="text-muted fs-13">
                       1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                       </span>
                  </div>
             </form>
        </div>
   </div>
</div>
