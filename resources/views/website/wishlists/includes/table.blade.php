<table class="table generic-table">
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Product Details</th>
            <th scope="col">buy</th>
            <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        @foreach($wishlists as $course)
        <tr>
            <th scope="row">
                <div class="media media-card">
                    <a href="" class="media-img mr-0">
                        <img src="images/img-loading.png" alt="Cart image">
                    </a>
                </div>
            </th>
            <td>
                <a href="" class="text-black font-weight-semi-bold">
                    {{ $course->title }}
                </a>
                <p class="fs-14 text-gray lh-20">
                    By
                    
                        {{ $course->instructor->name }} :
                    {{ $course->description }}
                </p>
            </td>

            <td>
                <div class="quantity-wishlist d-flex align-wishlists-center">
                    <button class="qtyBtn qtyDec"><i class="la la-minus"></i></button>
                    <input class="qtyInput" type="text" name="qty-input" value="1">
                    <button class="qtyBtn qtyInc"><i class="la la-plus"></i></button>
                </div>
            </td>

            <td>
                <form action="{{ route('wishlists.toggle', $course->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="icon-element icon-element-xs shadow-sm border-0" data-toggle="tooltip"
                        data-placement="top" title="Remove">
                        <i class="la la-times"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>

    </tbody>
</table>