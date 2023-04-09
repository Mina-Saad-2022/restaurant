<style>

    /*.centrar {*/
    /*    text-align: center;*/
    /*}*/

    /*.derecha {*/
    /*    text-align: center;*/

    /*}*/

    /*.negrita {*/
    /*    font-weight: bold;*/
    /*}*/
    /*@media print {*/
    /*    body{*/
    /*       !*width:8.26px!important;*!*/
    /*       !*min-height: 11.69px !important;*!*/
    /*       !* overflow:hidden ;*!*/
    /*    }*/

    /*  td,th{*/
    /*      border: 1px solid #000000 ;*/
    /*  }*/
    /*}*/
    /*@page {*/
    /*    margin: 2cm;*/
    /*}*/


    /*.tabla thead {*/
    /*    background-color: #0066cc;*/
    /*    color: white;*/
    /*}*/


    * {
        font-size: 12px;
        font-family: 'Times New Roman';
        text-align: center;
    }

    td,
    th,
    tr,
    table {
        border-top: 1px solid black;
        border-collapse: collapse;
    }

    td.description,
    th.description {
        width: 75px;
        max-width: 75px;
    }

    td.quantity,
    th.quantity {
        width: 40px;
        max-width: 40px;
        word-break: break-all;
    }

    td.price,
    th.price {
        width: 40px;
        max-width: 40px;
        word-break: break-all;
        text-align: center;
    }

    .centered {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 155px;
        max-width: 155px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    @media print {
        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }

</style>
{{--@yield('css')--}}


{{--<table class="tabla">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>@lang('site.name')</th>--}}
{{--        <th>@lang('site.quantity')</th>--}}
{{--        <th>@lang('site.price')</th>--}}
{{--    </tr>--}}

{{--    </thead>--}}
{{--    <tbody>--}}

{{--    @foreach ($products as $product)--}}
{{--        <tr>--}}
{{--            <td class="derecha">{{ $product->name }}</td>--}}
{{--            <td class="derecha">{{ $product->pivot->quantity }}</td>--}}
{{--            <td class="derecha">{{ number_format($product->pivot->quantity * $product->sale_price, 2) }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}

{{--</table>--}}










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Receipt example</title>
</head>
<body>
<div class="ticket">
    <img src="https://cdn.iconscout.com/icon/free/png-256/looding-2545840-2137129.png" alt="Logo">
    <p class="centered">RECEIPT EXAMPLE
        <br>العنوان </p>
    <table>
        <thead>
        <tr>
            <th class="quantity">@lang('site.name')</th>
            <th class="description">@lang('site.quantity')</th>
            <th class="price">@lang('site.price')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
                @foreach ($products as $product)

            <td class="quantity">{{ $product->name }}</td>
            <td class="description">{{ $product->pivot->quantity }}</td>
            <td class="price">{{ number_format($product->pivot->quantity * $product->sale_price, 2) }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <h3 >@lang('site.total') <span>{{ number_format($order->total_price, 2) }}</span></h3>
    <p class="centered">Thanks for your purchase!</p>
</div>
<script>
    const $btnPrint = document.querySelector("#btnPrint");
    $btnPrint.addEventListener("click", () => {
        window.print();
    });
</script>
</body>
</html>

