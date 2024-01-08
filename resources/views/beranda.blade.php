<!doctype html>
<html data-theme="nord">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Product Card</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .container
        {
            max-width: 1200px;
            width: 90%;
            /* margin: auto; */
        }
        .product-card {
            width: 100%;
            max-width: 350px;
            position: relative;
            box-shadow: 0 2px 7px #dfdfdf;
            margin: 2px auto;
            background: #fafafa;
            /* Atur tinggi kartu di sini */
            height: 240px;
        }
        .product-tumb {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            padding: 10px;
            background: #f0f0f0;
        }


        .product-details {
            padding: 10px;
        }

        .product-catagory {
            display: block;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .product-details h4 a {
            font-weight: 500;
            font-size: 13px;
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        .product-details h4 a:hover {
            color: #0193C5;
        }

        .product-details p {
            font-size: 15px;
            line-height: 5px;
            margin-bottom: 10px;
        }

        .product-bottom-details {
            overflow: hidden;
            border-top: 1px solid #eee;
            padding-top: 5px;
        }

        .product-bottom-details div {
            float: left;
            width: 50px;
        }

        .product-price {
            font-size: 18px;
            color: #FF5733;
            font-weight: 600;
        }

        .product-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

    </style>
</head>
<body>

<!-- navbar -->
<div class="navbar bg-base-300">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-cyan-600	">ZuraStore</a>
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          <span class="badge badge-sm indicator-item">8</span>
        </div>
      </div>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <span class="font-bold text-lg">8 Items</span>
          <span class="text-info">Subtotal: $999</span>
          <div class="card-actions">
            <button class="btn btn-primary btn-block">View cart</button>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container mx-auto grid grid-cols-2  md:grid-cols-2 lg:grid-cols-4 gap-4 mt-20">
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    <!-- Product Card -->
    <div class="product-card rounded-lg">
		<div class="product-tumb rounded-lg">
            <a href="">
            <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" width="200" height="300"alt="" class="rounded ">
            </a>
            </div>
            <div class="product-details">
                <span class="product-catagory text-neutral-600">Mobile Legends</span>
                <h4><a href="">x300 stars, skins 200</a></h4>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                <p class="text-primary">Stok :</p>
                <p class="text-primary">Baru</p>
            </div>			
		</div>
	</div>
	
    
	


    <!-- Tambahkan kartu produk lainnya di sini -->

</div>

</body>
</html>
