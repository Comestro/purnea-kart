<div>
    <table class="table align-middle mb-0 table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>
                <th>Id</th>
                <th>Variant Type </th>
                <th>Variant Name </th>
                <th>Variant Sku </th>
                <th>Variant Price </th>
                <th>Variant Stock</th>
                <th>Variant Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($variants as $key=>$variant)
            {{-- {{dd($variant)}} --}}
                <tr>

                    <td>{{ $key + 1 }}</td>
                    <td>{{ $variant->variant_type}}</td>
                    <td>{{ $variant->variant_name }}</td>
                    <td>{{ $variant->sku }}</td>
                    <td>{{ $variant->price }}</td>
                    <td>{{ $variant->stock }}</td>
                   <td>
                    <img src="{{ asset('https://ronilaravel.s3.amazonaws.com/public/image/product' . $variant->variant_image) }}"
                    alt="" class="avatar-md">
                   </td>
                  </tr>
            @endforeach
            <tr>
            </tr>
        </tbody>
    </table>
</div>