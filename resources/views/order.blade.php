@include('commonHeader')

<!-- content -->
<style>
    .wrapper {
        /* max-width: 50rem; */
        width: 100%;
        margin: 0 auto;
    }

    .tabs {
        position: relative;
        margin: 3rem 0;
        background: #00405a;
        height: 29.75rem;
    }

    .tabs::before,
    .tabs::after {
        content: "";
        display: table;
    }

    .tabs::after {
        clear: both;
    }

    .tab {
        float: left;
    }

    .tab-switch {
        display: none;
    }

    .tab-label {
        position: relative;
        display: block;
        line-height: 2.75em;
        height: 3em;
        padding: 0 1.618em;
        background: #00405a;
        border-right: 0.125rem solid #00405a;
        color: #fff;
        cursor: pointer;
        top: 0;
        transition: all 0.25s;
    }

    .tab-label:hover {
        top: -0.25rem;
        transition: top 0.25s;
    }

    .tab-content {
        height: 12rem;
        position: absolute;
        z-index: 1;
        top: 2.75em;
        left: 0;
        padding: 1.618rem;
        background: #00425d;
        color: #2c3e50;
        /* border-bottom: 0.25rem solid #bdc3c7; */
        opacity: 0;
        transition: all 0.35s;
    }

    .tab-switch:checked+.tab-label {
        background: #fff;
        color: #2c3e50;
        border-bottom: 0;
        border-right: 0.125rem solid #fff;
        transition: all 0.35s;
        z-index: 1;
        top: -0.0625rem;
    }

    .tab-switch:checked+label+.tab-content {
        z-index: 2;
        opacity: 1;
        transition: all 0.35s;
    }

    /* list */

    .book-list {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .book-text {
        line-height: 8px;
        font-size: 13px;
    }

    .book-container {
        border: 1px solid white;
        background: #eae2e2;
        display: flex;
    }

    .container {
        margin-bottom: 13rem;
    }

    @media only screen and (min-width: 321px) and (max-width: 768px) {
        .book-container {
            display: block;
        }

        .mob-C12rgh {
            display: none;
        }

        .modal-dialog {
            left: 0% !important;
        }
    }

    .review {
        padding: 10px 10px;
        border: none;
        background: #00405a;
        color: #fff;
        border-radius: 3px;
        cursor: pointer;
    }

    .modal-dialog {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .modal-content {
        margin: 0 auto;
    }

    .modal-dialog {
        left: 30%;
    }

    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }

    .star-rating input[type=radio] {
        display: none;
    }

    .star-rating label {
        color: #bbb;
        font-size: 26px;
        padding: 0;
        cursor: pointer;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .star-rating label:hover,
    .star-rating label:hover~label,
    .star-rating input[type=radio]:checked~label {
        color: #f2b600;
    }

    .error-order {
        margin-left: 15px;
        color: red;
        font-size: 10px;
    }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="container">
    <div class="row">
        <div class="wrapper">
            <div class="tabs">
                <div class="tab">
                    <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                    <label for="tab-1" class="tab-label">Booking History</label>
                    <div class="tab-content ">

                        <div class="row">

                            @if ($order_history)
                                @foreach ($order_history as $order_history_data)
                                    <div class="col-md-6 book-container">
                                        <div class="col-md-6 book-list">
                                            <img src="{{ URL::asset('/uploads/' . $order_history_data['image']) }}"
                                                width="200" height="150">
                                        </div>
                                        <div class="col-md-6 book-list book-text">
                                            <p><b>Hotel Name :</b> {{ $order_history_data['property_name'] }}</p>
                                            <p><b> Status :</b> Complted</p>
                                            <p><b>Rooms :</b> {{ $order_history_data['room_count'] }} Room</p>
                                            <p><b>Guests :</b> {{ $order_history_data['guest_count'] }} Guests</p>
                                            <p><b>Checkin Time :</b> {{ $order_history_data['time'] }}</p>
                                            @if ($order_history_data['daterange'])
                                                <p><b>Booking Date :</b> {{ $order_history_data['daterange'] }}</p>
                                            @endif
                                            <p><b>Total Payment :</b> Rs.{{ $order_history_data['total'] }}</p>

                                            <button class="review" id="review-mod"
                                                onclick="review({{ $order_history_data['hotel_id'] }})">Add
                                                Review</button>
                                        </div>

                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                    <label for="tab-2" class="tab-label">Pending</label>
                    <div class="tab-content">
                        {{-- content --}}
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                    <label for="tab-3" class="tab-label">Completed</label>
                    <div class="tab-content">
                        <div class="row">
                            @if ($complete_order)

                                @foreach ($complete_order as $complete_order)
                                    <div class="col-md-6 book-container">
                                        <div class="col-md-6 book-list">
                                            <img src="https://images.oyoroomscdn.com/uploads/hotel_image/105066/medium/611ca00b9b9b3c46.jpg"
                                                width="200">
                                        </div>
                                        <div class="col-md-6 book-list book-text">
                                            <p><b>Hotel Name:</b> {{ $complete_order['property_name'] }}</p>
                                            <p><b> Status :</b> Complted</p>
                                            <p><b>Rooms :</b> {{ $complete_order['room_count'] }} Room</p>
                                            <p><b>Guests :</b> {{ $complete_order['guest_count'] }} Guests</p>
                                            <p><b>Checkin Time :</b> 10 AM</p>
                                            <p><b>Total Payment :</b> Rs.{{ $complete_order['total'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- content -->


<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="review">Add Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="form-review">
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label"><b>Rating</b></label>
                            <div class="star-rating">
                                <input id="star-5" type="radio" name="rating" value="5" />
                                <label for="star-5" title="5 stars">★</label>
                                &nbsp;
                                <input id="star-4" type="radio" name="rating" value="4" />
                                <label for="star-4" title="4 stars">★</label>
                                &nbsp;
                                <input id="star-3" type="radio" name="rating" value="3" />
                                <label for="star-3" title="3 stars">★</label>
                                &nbsp;
                                <input id="star-2" type="radio" name="rating" value="2" />
                                <label for="star-2" title="2 stars">★</label>
                                &nbsp;
                                <input id="star-1" type="radio" name="rating" value="1" />
                                <label for="star-1" title="1 star">★</label>
                            </div>
                            <br>
                            <span id="error-rating" class="error-order" style="margin-left: 0;"></span>

                        </div>
                        <input type="hidden" name="hotel_id" id="hotel_id">
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label" for="input-review"><b>Review</b></label>
                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                            </div>
                            <span id="error-review" class="error-order"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="button-review"
                    style="background: #00405a;padding: 10px 35px;">Save</button>
            </div>
        </div>
    </div>
</div>






@include('footer')

<script>
    function review(hotel_id) {
        $('#hotel_id').val(hotel_id);
    }

    $('#button-review').on('click', function(e) {
        $.ajax({
            type: 'POST',
            url: '/review',
            dataType: 'json',
            data: $("#form-review").serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function(data) {
                if (data) {
                    if (data.responseJSON.error.rating_error) {
                        document.getElementById('error-rating').innerHTML = data.responseJSON.error
                            .rating_error;
                    } else {
                        $('#error-rating').hide();
                    }
                    if (data.responseJSON.error.text_error) {
                        document.getElementById('error-review').innerHTML = data.responseJSON.error
                            .text_error;
                    } else {
                        $('#error-review').hide();
                    }
                }
            },
            success: function(data) {
                $('#reviewModal').modal('hide');
            }
        });
    });
</script>
<script>
    $('#review-mod').on('click', function(e) {
        $('#reviewModal').modal('show');
    })
</script>
