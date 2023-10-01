<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HomesLoc</title>
    <link rel="icon" type="image/x-icon" href="uploads/images/favlogo.png">
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-gray-100">

    <section class="py-20 overflow-hidden relative">


        <div class="container">
            <div>
                <div class="bg-white rounded-t-3xl sm:p-16 p-10">

                    <div class="flex flex-wrap items-center justify-between gap-6">
                        <img src="https://homesloc.com/uploads/images/logo.png" alt="">

                        <div>
                            <div style="float: right">
                                <button onclick="window.print()"<?xml version="1.0" ?>
                                    <!DOCTYPE svg
                                        PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                    <svg enable-background="new 0 0 50 50" height="20px" id="Layer_1" version="1.1"
                                        viewBox="0 0 50 50" width="50px" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect fill="none" height="50" width="50" />
                                        <circle cx="43" cy="21" r="2" />
                                        <path d="M40,15V1H10v14" fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="2" />
                                        <path d="M40,29v20H10V29H40z" fill="none" stroke="#000000"
                                            stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                                        <path
                                            d="M10,40H3  c-1.104,0-2-0.896-2-2V17c0-1.104,0.896-2,2-2h44c1.104,0,2,0.896,2,2v21c0,1.104-0.896,2-2,2h-7"
                                            fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="2" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="2" x1="35" x2="15"
                                            y1="35" y2="35" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="2" x1="31" x2="15"
                                            y1="39" y2="39" />
                                        <line fill="none" stroke="#000000" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="2" x1="35" x2="15"
                                            y1="43" y2="43" />
                                    </svg>
                                </button>
                            </div>
                            <h4 class="text-5xl font-semibold uppercase tracking-widest">Invoice</h4>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-between mt-10">
                        <div class="flex flex-wrap gap-3">
                            <h3 class="text-xl font-semibold">Invoice To :</h3>
                            <div>
                                <h4 class="text-xl font-semibold">{{ $invoice_data['name'] }}</h4>
                                <p class="text-sm font-medium text-gray-500 my-1">Mob. No :
                                    {{ $invoice_data['mobile'] }} <br> Email : {{ $invoice_data['email'] }}</p>
                            </div>
                        </div>
                        <div class="bg-blue-600/10 p-7">
                            <p class="text-xl font-semibold">Invoice No: <span class="ps-10 text-base text-gray-500"
                                    style=" float: right;">#{{ $invoice_data['order_id'] }}</span></p>
                            <p class="text-xl font-semibold">Date: <span class="ps-10 text-base text-gray-500"
                                    style=" float: right;">{{ now()->format('d-m-Y') }}</span></p>
                            <p class="text-xl font-semibold">Booking Date: <span class="ps-10 text-base text-gray-500"
                                    style=" float: right;">{{ $invoice_data['date_range'] }}</span></p>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <style>
                            th {
                                text-align: left;
                            }

                            td {
                                line-height: 12px !important;
                            }
                        </style>
                        <table class="border-collapse table-auto w-full text-sm mt-14 mb-12 whitespace-pre">
                            <thead>
                                <tr>
                                    <th class="p-4 border-b tracking-widest text-lg font-medium text-start">No.</th>
                                    <th class="border-b tracking-widest text-lg font-medium text-start">Property</th>
                                    <th class="p-4 border-b tracking-widest text-lg font-medium text-start"
                                        style="text-align: right;">Price</th>
                                    <th class="p-4 border-b tracking-widest text-lg font-medium text-start"
                                        style="text-align: right;">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-5 text-base font-medium">1</td>
                                    <td class="p-5 text-base font-medium">
                                        <p>{{ $invoice_data['hotel_name'] }}</p>
                                        <br />{{ $invoice_data['hotel_location'] }}
                                        <br />{{ $invoice_data['room_info'] }}
                                    </td>
                                    <td class="p-5 text-base font-medium" style="text-align: right;">
                                        ₹ {{ $invoice_data['price'] }}</td>
                                    <td class="p-5 text-base font-medium" style="text-align: right;">
                                        ₹ {{ $invoice_data['total'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="md:p-20 p-10 bg-blue-600/10 rounded-b-3xl">
                    <div class="flex flex-wrap items-end justify-between gap-6">
                        <div>
                            <p class="w-40 text-xl font-semibold">Payment Method:
                                {{ $invoice_data['payment_method'] }}
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center justify-end">
                                <div>
                                    <h2 class="pb-1 text-base font-medium">Sub Total:</h2>
                                    <h2 class="pb-1 pt-2 text-lg font-semibold border-t border-gray-900">Total</h2>
                                </div>
                                <div>
                                    <h4 class="pb-1 ps-12 text-base font-medium text-end">₹
                                        {{ $invoice_data['total'] }}
                                    </h4>
                                    <h4
                                        class="pb-1 ps-12 pt-2 text-lg font-semibold text-end border-t border-gray-900">
                                        ₹ {{ $invoice_data['total'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="md:text-2xl text-lg font-semibold text-center mt-10">Thank You </h3>
                    <div style="text-align: center;margin-top: 15px;">
                        <a href="/"
                            style="color: #fff; padding: 10px; border-radius: 5px; background: #00405a;">
                            Back to Home Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
