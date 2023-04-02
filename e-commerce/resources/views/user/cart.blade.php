@extends('layouts.app-master')
@section('style')
    <style>
        .mr-2 {
            margin-right: 20px;
        }

        .divTable {
            display: table;
            width: 100%;
        }

        .rowTable {
            display: table-row;
            text-align: center;
            justify-content: center;
        }

        .divTableHeading {
            display: table-header-group;
        }

        .divTableCol,
        .divTableHead {
            border-bottom: 1px solid #eee;
            display: table-cell;
            padding: 3px 10px;

        }

        .divTableHeading {
            background-color: #EEE;
            display: table-header-group;
            font-weight: bold;
        }

        .divTableFoot {
            background-color: #EEE;
            display: table-footer-group;
            font-weight: bold;
        }

        .divTableBody {
            display: table-row-group;
        }

        .quantity-input {
            width: 150px;
            justify-content: center;
        }
    </style>
@endsection
@section('content')


    <div class="divTable div-hover">
        <div class="rowTable bg-primary text-white pb-2">
            <div class="divTableCol">Product</div>
            <div class="divTableCol">Quantity</div>
            <div class="divTableCol">Price</div>
            <div class="divTableCol">Total</div>
            <div class="divTableCol">Actions</div>
        </div>
        @if (count(Auth::user()->cart))
            @foreach (Auth::user()->cart as $key => $value)
                <div class="rowTable">
                    <div class="divTableCol">
                        <div class="media">
                            <a class="thumbnail pull-left mr-2" href="#">
                                <img class="media-object" src="{{ $value->gallery }}" style="width: 72px; height: 72px;" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $value->name }}</a></h4>
                                <h5 class="media-heading">by <a href="">{{ $value->seller->name }}</a></h5>
                                {{-- <span>Status: </span><span class="text-success"><strong>Lorem ipsum in 2 - 3 weeks</strong></span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="divTableCol">
                        <div class="quantity-input">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-danger btn-number" data-type="minus"
                                        data-field="quantity[{{ $key }}]">
                                        <span class="glyphicon glyphicon-minus">-</span>
                                    </button>
                                </span>
                                <input type="text" name="quantity[{{ $key }}]" class="form-control input-number"
                                    value="{{ $value->pivot->quantity }}" min="1" max="100"
                                    data-id="{{ $value->pivot->id }}" readonly>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-number" data-type="plus"
                                        data-field="quantity[{{ $key }}]">
                                        <span class="glyphicon glyphicon-plus">+</span>
                                    </button>
                                </span>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <div class="divTableCol"><strong>₹{{ $value->price }}</strong></div>
                    <div class="divTableCol "><strong class="price{{ $value->pivot->id }}">
                            ₹{{ $value->pivot->quantity * $value->price }}</strong></div>
                    <div class="divTableCol">
                        <form action="{{ route('cart.destroy', $value->pivot->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><span class="fa fa-remove"></span> Remove</button>
                        </form>
                    </div>
                </div>
                @php
                    static $subtotal = 0;
                    $subtotal += $value->pivot->quantity * $value->price;
                @endphp
            @endforeach
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <h5>Subtotal</h5>
                </div>
                <div class="divTableCol">
                    <h5><strong class="subtotal">₹{{ $subtotal }}</strong></h5>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <h5>Delivery Charges</h5>
                </div>
                <div class="divTableCol">
                    <h5><strong class="delivery">{{ $subtotal >= 500 ? 'Free' : '₹40' }}</strong></h5>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <h3>Total</h3>
                </div>
                <div class="divTableCol">
                    <h3><strong class="total">₹{{ $subtotal >= 500 ? $subtotal : $subtotal + 40 }}</strong></h3>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <button type="button" class="btn btn-default col-6"></span> Had Fun?</button>
                </div>
                <div class="divTableCol">
                    <a href="{{route('checkout')}}"><button type="button" class="btn btn-success">Continue To checkout</span></button></a>
                </div>
            </div>
        @else
            <div class="rowTable">
                <div class="divTableCol"><h5><strong>PLEASE</strong></h5></div>
                <div class="divTableCol"><h5><strong>ADD</strong></h5></div>
                <div class="divTableCol"><h5><strong>SOMETHING</strong></h5></div>
                <div class="divTableCol">
                    <h5><strong>IN YOUR</strong></h5>
                </div>
                <div class="divTableCol">
                    <h5><strong>CART</strong></h5>
                </div>
            </div>
        @endif
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(function() {
            $('.btn-number').click(function(e) {
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                var id = input.attr('data-id');
                // console.log(input);
                // console.log(currentVal);
                // console.log(id);

                var url = "{{ route('cart.update', ':id') }}";
                url = url.replace(':id', id);
                //alert(url);
                $.ajax({
                    method: "PUT",
                    dataType: "json",
                    url: url,
                    data: {
                        'id': id,
                        'quantity': currentVal,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        //console.log(response[0]);
                        $(".KK-o3G").html(response[2]);
                        $(".price" + id + "").html("₹" + response[0]);
                        $(".subtotal").html("₹" + response[1]);
                        if (response[1] >= 500) {
                            $(".delivery").html("Free");
                            $(".total").html("₹" + response[1])
                        } else {
                            $(".delivery").html("₹40");
                            $(".total").html("₹" + (response[1] + 40));
                        }

                    }
                });
            })
        })
    </script>
    <script>
        $('.btn-number').click(function(e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>
@endsection
