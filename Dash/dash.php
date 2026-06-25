<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Restoran</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background-color: #fffdf5; display: flex; }

        .sidebar {
            width: 200px; min-height: 100vh; background: #d63384; color: white;
            padding: 20px; position: fixed; top: 0; left: 0;
        }
        .sidebar h3 { text-align: center; margin-bottom: 16px; font-size: 1.1rem; }
        .sidebar a {
            display: block; color: white; padding: 12px 15px; text-decoration: none;
            border-bottom: 1px solid rgba(255,193,7,0.4); transition: 0.2s; font-size: 0.95rem;
        }
        .sidebar a:hover { background: #ffc107; color: #333; }

        .dashboard-container { margin-left: 220px; padding: 30px; width: calc(100% - 220px); }

        h1 { text-align: center; color: #d63384; margin-bottom: 30px; font-size: 1.8rem; }
        h2 { border-left: 8px solid #ffc107; padding-left: 14px; color: #d63384; margin: 40px 0 20px; font-size: 1.3rem; }

        .grid-menu {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
            gap: 20px;
        }

        .menu-card {
            background: #fff; border: 2px solid #ffc107; padding: 18px 16px;
            border-radius: 18px; text-align: center; box-shadow: 4px 4px 0 #d63384;
            display: flex; flex-direction: column; gap: 8px;
        }
        .menu-card h4 { font-size: 0.95rem; color: #222; line-height: 1.3; }
        .badge {
            display: inline-block; background: #fff3cd; color: #856404;
            font-size: 0.72rem; padding: 2px 8px; border-radius: 20px;
            border: 1px solid #ffc107; font-weight: 600;
        }
        .price { font-weight: bold; color: #d63384; font-size: 1rem; }
        .meta { font-size: 0.75rem; color: #888; }

        button {
            background-color: #ffc107; border: none; padding: 9px;
            border-radius: 50px; cursor: pointer; font-weight: bold;
            width: 100%; font-size: 0.88rem; margin-top: 4px; transition: 0.2s;
        }
        button:hover { background-color: #d63384; color: white; }

        .chili { font-size: 0.75rem; }
        .chili.inactive { opacity: 0.25; }
        .spicy-bar { display: flex; justify-content: center; gap: 3px; }
    </style>
</head>
<body>

<div class="sidebar">
    <h3> Kategori</h3>
    <a href="#makanan"> Makanan</a>
    <a href="#minuman"> Minuman</a>
    <a href="#dessert"> Dessert</a>
</div>

<div class="dashboard-container">
    <h1> Menu Restoran Kami</h1>

    <!-- MAKANAN -->
    <div id="makanan"><h2>Makanan 🍛</h2></div>
    <div class="grid-menu">

        <div class="menu-card">
            <h4>Nasi Goreng Spesial</h4>
            <span class="badge">Main Course</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 25.000</span>
            <span class="meta">600 kkal • Topping: Telur</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Ayam Geprek</h4>
            <span class="badge">Main Course</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili">🌶️</span>
            </div>
            <span class="price">Rp 20.000</span>
            <span class="meta">550 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Spaghetti Bolognese</h4>
            <span class="badge">Pasta</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 35.000</span>
            <span class="meta">450 kkal • Topping: Keju</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Sate Ayam</h4>
            <span class="badge">Grill</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili inactive">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 30.000</span>
            <span class="meta">400 kkal • Topping: Bawang Goreng</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Burger Sapi</h4>
            <span class="badge">Fast Food</span>
            <div class="spicy-bar">
                <span class="chili inactive">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 40.000</span>
            <span class="meta">700 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Pizza Pepperoni</h4>
            <span class="badge">Italian</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili inactive">🌶️</span><span class="chili inactive">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 80.000</span>
            <span class="meta">800 kkal • Topping: Keju Mozzarella</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Bakso Urat</h4>
            <span class="badge">Indonesian</span>
            <div class="spicy-bar">
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili">🌶️</span><span class="chili">🌶️</span>
                <span class="chili inactive">🌶️</span>
            </div>
            <span class="price">Rp 18.000</span>
            <span class="meta">350 kkal • Topping: Seledri</span>
            <button>Pesan</button>
        </div>

    </div>

    <!-- MINUMAN -->
    <div id="minuman"><h2>Minuman 🍹</h2></div>
    <div class="grid-menu">

        <div class="menu-card">
            <h4>Es Teh Manis</h4>
            <span class="badge">Cold Drink</span>
            <span class="price">Rp 5.000</span>
            <span class="meta">50 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Jus Alpukat</h4>
            <span class="badge">Juice</span>
            <span class="price">Rp 15.000</span>
            <span class="meta">200 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Kopi Susu</h4>
            <span class="badge">Coffee</span>
            <span class="price">Rp 18.000</span>
            <span class="meta">120 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Lemon Tea</h4>
            <span class="badge">Cold Drink</span>
            <span class="price">Rp 12.000</span>
            <span class="meta">80 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Jus Mangga</h4>
            <span class="badge">Juice</span>
            <span class="price">Rp 15.000</span>
            <span class="meta">180 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Matcha Latte</h4>
            <span class="badge">Specialty</span>
            <span class="price">Rp 25.000</span>
            <span class="meta">150 kkal</span>
            <button>Pesan</button>
        </div>

    </div>

    <!-- DESSERT -->
    <div id="dessert"><h2>Dessert 🍰</h2></div>
    <div class="grid-menu">

        <div class="menu-card">
            <h4>Pudding Coklat</h4>
            <span class="badge">Pudding</span>
            <span class="price">Rp 10.000</span>
            <span class="meta">180 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Brownies Panggang</h4>
            <span class="badge">Pastry</span>
            <span class="price">Rp 22.000</span>
            <span class="meta">320 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Es Krim Vanilla</h4>
            <span class="badge">Ice Cream</span>
            <span class="price">Rp 20.000</span>
            <span class="meta">250 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Crepes Strawberry</h4>
            <span class="badge">Crepes</span>
            <span class="price">Rp 28.000</span>
            <span class="meta">290 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Tiramisu</h4>
            <span class="badge">Cake</span>
            <span class="price">Rp 35.000</span>
            <span class="meta">380 kkal</span>
            <button>Pesan</button>
        </div>

        <div class="menu-card">
            <h4>Waffle Madu</h4>
            <span class="badge">Waffle</span>
            <span class="price">Rp 30.000</span>
            <span class="meta">340 kkal</span>
            <button>Pesan</button>
        </div>

    </div>

</div>
</body>
</html>