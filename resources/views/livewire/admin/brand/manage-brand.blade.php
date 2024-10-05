<div class="table-responsive">
    <table class="table align-middle mb-0 table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>
                <th style="width: 20px;">
                    <div class="form-check ms-1">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                    </div>
                </th>
                <th scope="col">Id</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Brand Slug</th>
                <th scope="col">Brand Description</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $item)
                <tr>
                    <td>
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->brand_name }}</td>
                    <td>{{ $item->brand_slug }}</td>
                    <td>{{ $item->brand_description }}</td>
                    <td>
                        <img src="{{ $item->logo ? asset('storage/public/logo/brand/' . $item->logo) : asset('public/logo/brand/default.png') }}"
                            alt="Logo" style="max-width: 100px; max-height: 100px;">
                    </td>

                    <td>
                        <div class="d-flex gap-2">
                            <a href="" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken"
                                    class="align-middle fs-18"></iconify-icon></a>
                            <a href="" class="btn btn-soft-primary btn-sm"><iconify-icon
                                    icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                            <a href="" class="btn btn-soft-danger btn-sm"><iconify-icon
                                    icon="solar:trash-bin-minimalistic-2-broken"
                                    class="align-middle fs-18"></iconify-icon>

                        </div>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
