<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Brand Slug</th>
                <th scope="col">Brand Description</th>
                <th scope="col">Logo</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $item)
                <tr class="align-items-center">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->brand_name }}</td>
                    <td>{{ $item->brand_slug }}</td>
                    <td>{{ $item->brand_description }}</td>
                    <td>
                        <img src="{{ $item->logo ? asset('storage/public/logo/brand/' . $item->logo) : asset('public/logo/brand/default.png') }}"
                            alt="Logo" style="max-width: 50px; max-height: 50px;">
                    </td>
                    <td class="d-flex gap-2 align-itmes-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#brandModal">
                            Edit
                        </button>
                        {{-- <a href="#">Edit</a> --}}
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
