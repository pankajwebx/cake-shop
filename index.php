<?php
require_once "auth_check.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>The Divine Cake Shop - Inventory & Billing System</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


<div class="app">


    <!-- ==================================================
         SIDEBAR
    =================================================== -->

    <aside class="sidebar">


        <div class="brand">

            <div class="brand-icon">
                🎂
            </div>

            <span>
                The Divine Cake Shop
            </span>

        </div>


        <nav class="sidebar-menu">


            <a href="#dashboard"
               class="menu-item active"
               onclick="showPage('dashboard', this)">

                <span>▣</span>

                <span>
                    Dashboard
                </span>

            </a>


            <a href="#products"
               class="menu-item"
               onclick="showPage('products', this)">

                <span>▦</span>

                <span>
                    Products
                </span>

            </a>


            <a href="#inventory"
               class="menu-item"
               onclick="showPage('inventory', this)">

                <span>▤</span>

                <span>
                    Inventory
                </span>

            </a>


            <a href="#billing"
               class="menu-item"
               onclick="showPage('billing', this)">

                <span>▣</span>

                <span>
                    Billing
                </span>

            </a>


            <a href="#sales"
               class="menu-item"
               onclick="showPage('sales', this)">

                <span>▥</span>

                <span>
                    Sales
                </span>

            </a>

            <!-- ADMIN ACCOUNT -->

<div class="admin-account">

    <button
        type="button"
        class="admin-account-btn"
        onclick="toggleAdminMenu()">

        👤

        <span>
            <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </span>

        <span class="arrow">
            ▼
        </span>

    </button>


    <div id="adminMenu" class="admin-menu">

    <!-- <a href="profile.php">
        👤 My Profile
    </a> -->

    <!-- <a href="users.php">
        👥 User Management
    </a> -->

    <a href="change_password.php">
        🔐 Change Password
    </a>

    <a
        href="logout.php"
        class="logout-link">

        🚪 Logout

    </a>

</div>

</div>

        </nav>


        <div class="sidebar-bottom">

            © 2026 The Divine Cake Shop

        </div>


    </aside>



    <!-- ==================================================
         MAIN CONTENT
    =================================================== -->

    <main class="main-content">


        <!-- TOP BAR -->

        <header class="topbar">


            <!-- <div>

                <h1 id="pageTitle">
                    Dashboard
                </h1>

                <p id="pageSubtitle">
                    Overview of your cake shop
                </p>

            </div> -->


            <div class="admin">

                <div class="admin-icon">
                    👤
                </div>


                <div>

                    <strong>
                        Admin
                    </strong>

                    <small>
                        Shop Owner
                    </small>

                </div>

            </div>


        </header>



        <!-- ==================================================
             1. DASHBOARD
        =================================================== -->

        <section id="dashboard"
                 class="page-section">


            <div class="page-heading">

                <h2>
                    Dashboard
                </h2>

                <p>
                    Overview of your cake shop
                </p>

            </div>



            <!-- DASHBOARD CARDS -->

            <div class="dashboard-cards">


                <div class="stat-card">

                    <div class="stat-icon purple">
                        🎂
                    </div>


                    <div>

                        <span>
                            Total Products
                        </span>

                        <h3 id="totalProducts">
                            0
                        </h3>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon blue">
                        📦
                    </div>


                    <div>

                        <span>
                            Total Stock
                        </span>

                        <h3 id="totalStock">
                            0
                        </h3>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon orange">
                        ⚠
                    </div>


                    <div>

                        <span>
                            Low Stock
                        </span>

                        <h3 id="lowStock">
                            0
                        </h3>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon green">
                        ₹
                    </div>


                    <div>

                        <span>
                            Total Sales
                        </span>

                        <h3 id="totalSales">
                            ₹0.00
                        </h3>

                    </div>

                </div>


            </div>



            <!-- SALES OVERVIEW -->

            <div class="content-card">


                <div class="card-title">

                    <div>

                        <h3>
                            Sales Overview
                        </h3>

                        <p>
                            Current sales information
                        </p>

                    </div>

                </div>



                <div class="sales-overview">


                    <div class="overview-box">

                        <span>
                            Total Bills
                        </span>

                        <strong id="totalBills">
                            0
                        </strong>

                    </div>


                    <div class="overview-box">

                        <span>
                            Today's Sales
                        </span>

                        <strong id="todaySales">
                            ₹0.00
                        </strong>

                    </div>


                </div>


            </div>


        </section>



        <!-- ==================================================
             2. PRODUCTS
        =================================================== -->

        <section id="products"
                 class="page-section"
                 style="display:none;">


            <div class="page-heading">

                <h2>
                    Products
                </h2>

                <p>
                    Add and manage cake products
                </p>

            </div>



            <!-- ADD PRODUCT -->

            <div class="content-card">


                <div class="card-title">

                    <div>

                        <h3>
                            Add New Cake
                        </h3>

                        <p>
                            Enter cake product details
                        </p>

                    </div>

                </div>



                <form id="productForm"
                      class="product-form">

                      <input
                         type="hidden"
                         id="product_id"
                         name="product_id"
                         value=""
                       >

                    <!-- CAKE NAME -->

                    <div class="input-group">

                        <label>
                            Cake Name
                        </label>

                        <input
                            type="text"
                            name="product_name"
                            id="product_name"
                            placeholder="Example: Chocolate Cake"
                            required
                        >

                    </div>



                    <!-- CATEGORY -->

                    <div class="input-group">

                        <label>
                            Category
                        </label>

                        <select
                            name="category"
                            id="category"
                            required
                        >

                            <option value="">
                                Select Category
                            </option>

                            <option value="Chocolate">
                                Chocolate
                            </option>

                            <option value="Black Forest">
                                Black Forest
                            </option>

                            <option value="Vanilla">
                                Vanilla
                            </option>

                            <option value="Strawberry">
                                Strawberry
                            </option>

                            <option value="Fruit">
                                Fruit
                            </option>

                            <option value="Pastry">
                                Pastry
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>



                    <!-- SIZE -->

                 <div class="input-group">

                   <label>Cake Size</label>

                    <select
                        name="size"
                        id="size"
                        required
                      >

                    <option value="">
                      Select Size
                    </option>

                    <option value="500gm">
                    500gm
                    </option>

                    <option value="1kg">
                     1 Kg
                    </option>

                    <option value="Pastry">
                      Pastry
                    </option>

                     </select>

                 </div>



                    <!-- PRICE -->

                    <div class="input-group">

                        <label>
                            Price
                        </label>

                        <input
                            type="number"
                            name="price"
                            id="price"
                            placeholder="₹ Price"
                            min="1"
                            required
                        >

                    </div>



                    <!-- QUANTITY -->

                    <div class="input-group">

                        <label>
                            Quantity
                        </label>

                        <input
                            type="number"
                            name="quantity"
                            id="quantity"
                            placeholder="Stock quantity"
                            min="0"
                            required
                        >

                    </div>



                    <!-- EXPIRY -->

                    <div class="input-group">

                        <label>
                            Expiry Date
                        </label>

                        <input
                            type="date"
                            name="expiry_date"
                            id="expiry_date"
                        >

                    </div>


                   <div class="form-button">

                       <button
                          type="submit"
                          class="primary-btn"
                          id="productSubmitBtn">

                          + Add Product

                       </button>

                    </div>
                    


                </form>


            </div>



            <!-- PRODUCT TABLE -->

            <div class="content-card">


                <div class="card-title">

                    <div>

                        <h3>
                            Product List
                        </h3>

                        <p>
                            All cake products
                        </p>

                    </div>

                </div>



                <div class="table-wrapper">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    ID
                                </th>

                                <th>
                                    Cake Name
                                </th>

                                <th>
                                    Category
                                </th>

                                <th>
                                    Size
                                </th>

                                <th>
                                    Price
                                </th>

                                <th>
                                    Quantity
                                </th>

                                <th>
                                    Expiry
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody id="productTableBody">

                        </tbody>


                    </table>


                </div>


            </div>


        </section>



        <!-- ==================================================
             3. INVENTORY
        =================================================== -->

        <section id="inventory"
                 class="page-section"
                 style="display:none;">


            <div class="page-heading">

                <h2>
                    Inventory
                </h2>

                <p>
                    Monitor available cake stock
                </p>

            </div>



            <div class="content-card">


                <div class="card-title">

                    <div>

                        <h3>
                            Current Inventory
                        </h3>

                        <p>
                            Current available stock
                        </p>

                    </div>

                </div>



                <div class="table-wrapper">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    Cake Name
                                </th>

                                <th>
                                    Category
                                </th>

                                <th>
                                    Size
                                </th>

                                <th>
                                    Price
                                </th>

                                <th>
                                    Stock
                                </th>

                                <th>
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody id="inventoryTableBody">

                        </tbody>


                    </table>


                </div>


            </div>


        </section>



        <!-- ==================================================
             4. BILLING
        =================================================== -->

        <section id="billing"
                 class="page-section"
                 style="display:none;">


            <div class="page-heading">

                <h2>
                    Billing
                </h2>

                <p>
                    Create customer bills
                </p>

            </div>



            <div class="billing-grid">



                <!-- CUSTOMER DETAILS -->

                <div class="content-card">


                    <div class="card-title">

                        <h3>
                            Customer Details
                        </h3>

                    </div>



                    <div class="input-group">

    <label for="customerName">
        Customer Name
    </label>

    <input
        type="text"
        id="customerName"
        name="customer_name"
        placeholder="Enter customer name"
        minlength="2"
        maxlength="50"
        pattern="[A-Za-z ]+"
        required
    >

</div>



                    <div class="input-group">

                       <label>
                           Mobile Number
                       </label>

                       <input
                           type="tel"
                           id="mobile"
                           placeholder="Enter 10-digit mobile number"
                           maxlength="10"
                           minlength="10"
                           pattern="[6-9][0-9]{9}"
                           inputmode="numeric"
                           required
                       >

                    </div>



                    <div class="card-title billing-title">

                        <h3>
                            Select Cake
                        </h3>

                    </div>



                    <div class="input-group">

                        <label>
                            Cake
                        </label>

                        <select id="billProduct">

                            <option value="">
                                Select Cake
                            </option>

                        </select>

                    </div>



                    <div class="input-group">

                        <label>
                            Quantity
                        </label>

                        <input
                            type="number"
                            id="billQuantity"
                            value="1"
                            min="1"
                        >

                    </div>



                    <button
                        class="primary-btn full-btn"
                        onclick="addToBill()">

                        + Add to Bill

                    </button>


                </div>



                <!-- CURRENT BILL -->

                <div class="content-card">


                    <div class="card-title">

                        <div>

                            <h3>
                                Current Bill
                            </h3>

                            <p>
                                Review bill items
                            </p>

                        </div>

                    </div>



                    <div class="table-wrapper">


                        <table>


                            <thead>

                                <tr>

                                    <th>
                                        Cake
                                    </th>

                                    <th>
                                        Size
                                    </th>

                                    <th>
                                        Qty
                                    </th>

                                    <th>
                                        Price
                                    </th>

                                    <th>
                                        Total
                                    </th>

                                    <th>
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody id="billTableBody">

                            </tbody>


                        </table>


                    </div>



                    <!-- BILL SUMMARY -->

                    <div class="bill-summary">


                        <div>

                            <span>
                                Subtotal
                            </span>

                            <strong>

                                ₹<span id="subtotal">
                                    0.00
                                </span>

                            </strong>

                        </div>



                        <div>

    <span>
        Discount (10%)
    </span>

    <strong>

        ₹<span id="discount">
            0.00
        </span>

    </strong>

</div>



                        <div>

                            <span>
                                GST (5%)
                            </span>

                            <strong>

                                ₹<span id="gst">
                                    0.00
                                </span>

                            </strong>

                        </div>



                        <div class="grand-total">

                            <span>
                                Grand Total
                            </span>

                            <strong>

                                ₹<span id="grandTotal">
                                    0.00
                                </span>

                            </strong>

                        </div>



                        <button
                            class="primary-btn print-btn"
                            onclick="saveBill()">

                            Save & Print Bill

                        </button>


                    </div>


                </div>


            </div>


        </section>



        <!-- ==================================================
             5. SALES
        =================================================== -->

        <section id="sales"
                 class="page-section"
                 style="display:none;">


            <div class="page-heading">

                <h2>
                    Sales Report
                </h2>

                <p>
                    View cake shop sales
                </p>

            </div>



            <!-- SALES CARDS -->

            <div class="sales-cards">


                <div class="sales-card">

                    <span>
                        Total Sales
                    </span>

                    <h3 id="salesTotalAmount">
                        ₹0.00
                    </h3>

                    <p>
                        All generated bills
                    </p>

                </div>



                <div class="sales-card">

                    <span>
                        Total Bills
                    </span>

                    <h3 id="salesTotalBills">
                        0
                    </h3>

                    <p>
                        Bills generated
                    </p>

                </div>



                <div class="sales-card">

                    <span>
                        Today's Sales
                    </span>

                    <h3 id="salesTodayAmount">
                        ₹0.00
                    </h3>

                    <p>
                        Today's revenue
                    </p>

                </div>


            </div>



            <!-- SALES HISTORY -->

            <div class="content-card">


                <div class="card-title">

                    <div>

                        <h3>
                            Sales History
                        </h3>

                        <p>
                            Generated bills
                        </p>

                    </div>

                </div>

                <!-- Yahan Paste Karo  -->

                <div class="sales-filters">

    <label for="salesMonth">
        Month:
    </label>

    <select id="salesMonth">
        <option value="">Select Month</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>


    <label for="salesYear">
        Year:
    </label>

    <select id="salesYear">
        <option value="">Select Year</option>
    </select>


    <button
        type="button"
        class="primary-btn"
        onclick="filterSales()">
        View Sales
    </button>


    <button
        type="button"
        class="secondary-btn"
        onclick="resetSalesFilter()">
        Reset
    </button>

</div>



                <div class="table-wrapper">


                    <table>


                        <thead>

                            <tr>

                                <th>
                                    Bill No.
                                </th>

                                <th>
                                    Customer
                                </th>

                                <th>
                                    Mobile
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Subtotal
                                </th>

                                <th>
                                    Discount
                                </th>

                                <th>
                                    GST
                                </th>

                                <th>
                                    Grand Total
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody id="salesTableBody">

                        </tbody>


                    </table>


                </div>


            </div>


        </section>


    </main>


</div>



<script src="script.js"></script>


<!-- ==================================================
     PAGE SWITCHING
=================================================== -->

<script>

function showPage(pageId, clickedMenu) {


    // Sabhi pages hide karo

    const pages =
        document.querySelectorAll(".page-section");

    pages.forEach(function(page) {

        page.style.display = "none";

    });



    // Selected page show karo

    const selectedPage =
        document.getElementById(pageId);

    if (selectedPage) {

        selectedPage.style.display = "block";

    }



    // Sidebar active item remove karo

    const menuItems =
        document.querySelectorAll(".menu-item");

    menuItems.forEach(function(item) {

        item.classList.remove("active");

    });



    // Clicked menu active karo

    if (clickedMenu) {

        clickedMenu.classList.add("active");

    }



    // Page title change

    const titles = {

        dashboard: [
            "Dashboard",
            "Overview of your cake shop"
        ],

        products: [
            "Products",
            "Add and manage cake products"
        ],

        inventory: [
            "Inventory",
            "Monitor available cake stock"
        ],

        billing: [
            "Billing",
            "Create customer bills"
        ],

        sales: [
            "Sales Report",
            "View cake shop sales"
        ]

    };



    if (titles[pageId]) {

        document.getElementById("pageTitle")
            .innerText = titles[pageId][0];

        document.getElementById("pageSubtitle")
            .innerText = titles[pageId][1];

    }



    // URL mein # update karo

    history.replaceState(
        null,
        null,
        "#" + pageId
    );



    // Relevant data reload

    if (pageId === "products") {

        if (typeof loadProducts === "function") {

            loadProducts();

        }

    }


    if (pageId === "inventory") {

        if (typeof loadProducts === "function") {

            loadProducts();

        }

    }


    if (pageId === "billing") {

        if (typeof loadProducts === "function") {

            loadProducts();

        }

    }


    if (pageId === "sales") {

        if (typeof loadSales === "function") {

            loadSales();

        }

    }

}


document.addEventListener(
    "DOMContentLoaded",
    function() {


        const hash =
            window.location.hash.replace("#", "");


        if (
            hash === "products" ||
            hash === "inventory" ||
            hash === "billing" ||
            hash === "sales"
        ) {


            const menu =
                document.querySelector(
                    '.menu-item[href="#' + hash + '"]'
                );


            showPage(hash, menu);


        } else {


            showPage(
                "dashboard",
                document.querySelector(
                    '.menu-item[href="#dashboard"]'
                )
            );

        }

    }
);

</script>


</body>

</html>