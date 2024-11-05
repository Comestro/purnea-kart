<div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true"
            data-bs-target="#categoriesCollapseExample" role="button">
            <div>Categories</div>
            <div class="bi bi-chevron-down"></div>
        </div>
        <div class="collapse show mt-4" id="categoriesCollapseExample">
            <div class="d-flex flex-column gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                    <label class="form-check-label" for="categoryCheck1">
                        All
                    </label>
                </div>
               
                @foreach ($categories as $cat)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="categoryCheck2">
                    <label class="form-check-label" for="categoryCheck2">
                        {{ $cat->cat_title }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
