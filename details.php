<?php
    require 'api-auth.php';

    if ($valuta === "EUR") {
        $valutaSymbol = "&euro;";
    }else {
        $valutaSymbol = "&dollar;";
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($values as $value) {
            if ($value->id == $id) {
                $name = $value->name;
                $symbol = $value->symbol;
                $marketCap = number_format($value->quote->$valuta->market_cap , 0, ',', '.');
                $price = number_format($value->quote->$valuta->price , 2, ',', '.');
                $volume = number_format($value->quote->$valuta->volume_24h , 0, ',', '.');
                $circulating = number_format($value->circulating_supply , 0, ',', '.');
                $change = number_format($value->quote->$valuta->percent_change_24h , 2, ',', '.');
            }
        }
    }

    require 'layout/header.php';
?>

    <main class="details-page">
        <div class="container">
            <div class="main-content">
                <div class="row">
                <div class="col-md-3">
                    <div class="text-center-md">
                        <img class="mr-2 mb-3" src='images/loghi/<?php echo $id ?>.png' class='logo-sprite' alt='Ethereum' height='30' width='30'>
                        <h1><?php echo $name ?><span> (<?php echo $symbol ?>)</span></h1>
                    </div>
                    <div class="links">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span>Rank</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Explorer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Message Board</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Source Code</a>
                            </li>
                            <li class="nav-item tags">
                                <a class="nav-link" href="#">
                                    <span>Coin</span>
                                    <span>Mineable</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="details col-md-4">
                            <?php echo $valutaSymbol." ".$price." ".$valuta ?> 
                            <span class="
                            <?php
                            if (strpos($change, '-') !== false) {
                                echo "text-danger";
                            }else {
                                echo "text-success";
                            }
                            ?>
                            ">(<?php echo $change?>%)</span>
                        </div>
                        <div class="col-md-8 buttons">
                        <ul class="nav nav-pills" id="calltoaction">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Exchange</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wallet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Crypto Credit</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="social">
                        <button type="button" class="btn btn-outline-secondary btn-sm">Share</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">Watch</button>
                    </div>
                    <div id="desktop-data-visualization" class="mt-5">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Market Cap</th>
                                    <th scope="col">Volume (24h)</th>
                                    <th scope="col">Circulating Supply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $marketCap." ".$valuta ?></td>
                                    <td><?php echo $volume." ".$valuta ?></td>
                                    <td><?php echo $circulating. " " . $symbol ?></td>
                                </tr>

                            </tbody>
                            <a href="#"></a>
                        </table>
                    </div>

                    <div id="mobile-data-visualization">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Market Cap:</th>
                                    <td><?php echo $marketCap." ".$valuta ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Volume (24h):</th>
                                    <td><?php echo $volume." ".$valuta ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Circulating Supply:</th>
                                    <td><?php echo $circulating." ".$symbol ?></td>
                                </tr>    
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
                </div>
            </div>
        </div>
    </main>
    
<?php require 'layout/footer.php'; ?>