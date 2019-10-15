<?php 

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
    <title>Cryptocurrency Market Capitalizations | CoinMarketCap</title>
</head>
<body class="home-page">

    <header>
        <div class="banner"></div>
        <div class="topbar">
            <div class="container d-flex justify-content-between">
                <div class="left-menu">
                Cryptocurrencies: <a href="#">2225</a> • Markets:
                    <a href="#">18778</a> • Market Cap:
                    <a href="#">€224.057.712.891</a> • 24h Vol:
                    <a href="#">€54.677.487.037</a> • BTC Dominance:
                    <a href="#">55.6%</a>
                </div>
                <div class="right-menu d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div id="google_translate_element"></div>
                    </div>
                    <div id="switcher"class="btn btn-outline-secondary btn-sm mb-1 ml-2"><span class="moon-icon"></span></div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php?valutadett=<?php echo $valuta ?>">
                    <span class="logo"></span>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?valutadett=<?php echo $valuta ?>"
                                >Rankings
                                <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tools</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                ...
                            </a>
                            <div
                                class="dropdown-menu"
                                aria-labelledby="navbarDropdown"
                            >
                                <a class="dropdown-item" href="#">Link</a>
                                <a class="dropdown-item" href="#">Link</a>
                                <a class="dropdown-item" href="#">Link</a>
                                <a class="dropdown-item" href="#">Link</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <form action="search.php" method="POST" class="form-inline my-2 my-lg-0">
                    <input type="hidden" id="fromPage" name="fromPage" value="
                    <?php echo basename($_SERVER['PHP_SELF']); ?>
                    ">
                    <input type="hidden" id="valuta" name="valuta-search" value="<?php echo $valuta; ?>">
                    <input
                        class="form-control mr-sm-2 <?php 
                            if (isset($_GET['error']) && $error === "notfound") {
                                echo "error";
                            }
                        ?>
                        "
                        type="search"
                        id="search"
                        name="search"
                        placeholder="<?php 
                            if (isset($_GET['error']) && $error === "notfound") {
                                echo "Not Found";
                            }else {
                                echo "Search valuta";
                            }
                        ?>
                        "
                        aria-label="Ricerca Valute"
                    />
                    <button class="btn my-2 my-sm-0" type="submit">
                        <div class="icon"></div>
                    </button>
                </form>
            </div>
        </nav>
    </header>