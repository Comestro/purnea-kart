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
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->brand_name }}</td>
                    <td>{{ $item->brand_slug }}</td>
                    <td>{{ $item->brand_description }}</td>
                    <td>
                        <img src="{{ $item->logo ? asset('public/logo/brand/' . $item->logo) : asset('public/logo/brand/default.png') }}"
                            alt="Logo" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>
                        <a href="">Edit</a>
                        <button type="submit">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
