<?php
    require 'api-auth.php';
    require 'sort-data.php';

    if ($valuta === "EUR") {
        $valutaSymbol = "&euro;";
    }else {
        $valutaSymbol = "&dollar;";
    }

    require 'layout/header.php';

?>
    <main class="home-page">
        <div class="container">
            <div class="main-content">
                <div class="header">
                    <h1>
                        Top 100 Cryptocurrencies by Market Capitalization
                    </h1>
                </div>

    <div class="row justify-content-center">
        <form method="POST" id="table-manipulation" class="submitOnChange" name="theform">
            <div class="form-row">
                <div class="form-group mx-1">
                    <label for="sort-by">Sort by...</label>
                    <select id="sort-by" name="sort-by" class="form-control">
                        <option value="default"
                        <?php 
                        if (!isset($_POST['sort-by'])) {
                            echo "selected";
                        } 
                        ?> 
                        >Default</option>
                        <option disabled></option>
                        <option value="name-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "name-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Name ASC</option>
                        <option value="name-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "name-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Name DESC</option>
                        <option disabled></option>
                        <option value="market-cap-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "market-cap-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Market Cap ASC</option>
                        <option value="market-cap-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "market-cap-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Market Cap DESC</option>
                        <option disabled></option>
                        <option value="price-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "price-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Price ASC</option>
                        <option value="price-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "price-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Price DESC</option>
                        <option disabled></option>
                        <option value="volume-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "volume-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Volume (24h) ASC</option>
                        <option value="volume-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "volume-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Volume (24h) DESC</option>
                        <option disabled></option>
                        <option value="circulating-supply-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "circulating-supply-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Circulating Supply ASC</option>
                        <option value="circulating-supply-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "circulating-supply-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Circulating Supply DESC</option>
                        <option disabled></option>
                        <option value="change-asc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "change-asc") {
                            echo "selected";
                        } 
                        ?>
                        >Change (24h) ASC</option>
                        <option value="change-desc"
                        <?php 
                        if (isset($_POST['sort-by']) && $selectOption === "change-desc") {
                            echo "selected";
                        } 
                        ?>
                        >Change (24h) DESC</option>
                    </select>
                </div>

                <div class="form-group mx-1">
                    <label for="valuta">Change Valuta...</label>
                    <select id="valuta" name="change-valuta" class="form-control">
                        <option value="EUR"
                        <?php 
                        if ( !isset($_POST['change-valuta']) || $valuta === "EUR") {
                            echo "selected";
                        } 
                        ?>
                        >EUR</option>
                        <option value="USD"
                        <?php 
                        if ($valuta === "USD") {
                            echo "selected";
                        } 
                        ?>
                        >USD </option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <input type="submit" class="btn btn-primary ml-2" value="Change">
                </div> -->
            </div>        
        </form>
    </div>

    <?php 
    include 'data-visualization/desktop.php';
    include 'data-visualization/mobile.php';   
    ?>
            </div>
        </div>
    </main>

<?php require 'layout/modal.php'; ?>
<?php require 'layout/footer.php'; ?>
