<div>
    <div class="row">
        @foreach ($previewimage as $key=>$pvi)
        <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="card-body text-center">
                      <div class="rounded bg-primary-subtle d-flex align-items-center justify-content-center mx-auto">
                           <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/category/'. $pvi->image) }}" alt="" class="avatar-xl">
                      </div>
                      <h4 class="mt-3 mb-0">{{$pvi->cat_title}}</h4>
                 </div>
            </div>
       </div>
       @endforeach
   </div>
</div>
