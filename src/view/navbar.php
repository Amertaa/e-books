<nav class="navbar bg-primary flex justify-between">

    <img class="w-32 ml-8 mobile:w-24 mobile:ml-3" src="./img/Logo.png">

    <div class="navbar flex justify-center items-center font-Nunito mobile:hidden">
        <ul class="menu menu-horizontal p-0 font-semibold">
            <li><a href="./main.php">Home</a></li>
            <li><a href="./shop.php">Shop</a></li>
            <li><a>E-books</a></li>
            <li tabindex="0">
                <a>
                    Category
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Button -->
    <div class="flex-none mobile:flex mobile:justify-between">
        <!-- Chart -->
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                </div>
            </label>
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-slate-50 shadow-lg">
                <div class="card-body">
                    <span class="font-bold text-lg">8 Items</span>
                    <span class="text-info">Subtotal: $999</span>
                    <div class="card-actions">
                        <a href="./cart.php"><button class="btn btn-primary btn-block">View cart</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hamburger -->
        <div class="btn btn-ghost btn-circle tablet:hidden desktop:hidden">
            <iconify-icon icon="charm:menu-hamburger" width="25"></iconify-icon>
        </div>
        <!-- Profile -->
        <div class="avatar online dropdown dropdown-end mobile:hidden">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="https://placeimg.com/80/80/people" />
                </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-lg bg-slate-50 rounded-box w-52">
                <p class="flex justify-center items-center mb-3">Welcome, <?= $_SESSION['username']?></p>
                <div class="mx-auto btn btn-outline btn-error w-28"><a href="./function/logout.php">Logout</a></div>
            </ul>
        </div>
        <!-- End of profile -->
    </div>
    <!-- End of button -->
</nav>
<!-- End of navbar -->