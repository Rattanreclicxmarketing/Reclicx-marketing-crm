<!DOCTYPE html>
<html>
<head>

    <title>Order Now</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#f3f4f6;
        }

        .container{
            max-width:1200px;
            margin:auto;
            padding:40px 20px;
        }

        .hero{
            background:#111827;
            color:#fff;
            padding:60px;
            border-radius:20px;
            text-align:center;
        }

        .hero h1{
            font-size:50px;
            margin-bottom:20px;
        }

        .hero p{
            font-size:20px;
            color:#d1d5db;
        }

        .box{
            margin-top:40px;
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .box h2{
            margin-bottom:30px;
            font-size:32px;
        }

        form{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        input,
        textarea,
        select{
            width:100%;
            padding:15px;
            border:1px solid #ddd;
            border-radius:10px;
            font-size:16px;
        }

        textarea{
            height:120px;
            resize:none;
        }

        .full{
            grid-column:1/3;
        }

        button{
            background:#2563eb;
            color:#fff;
            border:none;
            padding:16px;
            border-radius:10px;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#1d4ed8;
        }

        @media(max-width:768px){

            form{
                grid-template-columns:1fr;
            }

            .full{
                grid-column:1/2;
            }

            .hero h1{
                font-size:34px;
            }

        }

    </style>

</head>
<body>

<div class="container">

    <div class="hero">

        <h1>
            Order Your Product
        </h1>

        <p>
            Fast Delivery | Cash On Delivery
        </p>

    </div>

    <div class="box">

        <h2>
            Place Your Order
        </h2>

        <form action="/landing-lead" method="POST">

            @csrf

            <input
                type="text"
                name="customer_name"
                placeholder="Full Name"
                required
            >

            <input
                type="text"
                name="phone"
                placeholder="Phone Number"
                required
            >

            <input
                type="text"
                name="product"
                placeholder="Product Name"
                required
            >

            <input
                type="number"
                name="amount"
                placeholder="Amount"
                required
            >

            <textarea
                name="address"
                placeholder="Full Address"
                class="full"
                required
            ></textarea>

            <button class="full">
                Place Order
            </button>

        </form>

    </div>

</div>

</body>
</html>