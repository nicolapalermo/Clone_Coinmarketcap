<div id="desktop-data-visualization" class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Market Cap</th>
            <th scope="col">Price</th>
            <th scope="col">Volume (24h)</th>
            <th scope="col">Circulating Supply</th>
            <th scope="col">Change (24h)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i= 0;
            foreach ($values as $value) {
                $i++;
                $id = $value->id;
                $name = $value->name;
                $symbol = $value->symbol;
                $marketCap = number_format($value->quote->$valuta->market_cap , 0, ',', '.');
                $price = number_format($value->quote->$valuta->price , 2, ',', '.');
                $volume = number_format($value->quote->$valuta->volume_24h , 0, ',', '.');
                $circulating = number_format($value->circulating_supply , 0, ',', '.');
                $change = number_format($value->quote->$valuta->percent_change_24h , 2, ',', '.');
            ?>
                <tr>
                    <th scope='row'><?php echo $i ?></th>
                    <td>
                        <img src='images/loghi/<?php echo $id ?>.png' class='logo-sprite' height='16' width='16'>
                        <?php echo $name ?>
                    </td>
                    <td><?php echo $valutaSymbol. " " . $marketCap ?></td>
                    <td><a href='details.php?id=<?php echo $id ?>&valutadett=<?php echo $valuta ?>'>
                    <?php echo $valutaSymbol. " " . $price ?>
                    </td>
                    <td><a href='details.php?id=<?php echo $id ?>&valutadett=<?php echo $valuta ?>'><?php echo $valutaSymbol. " " . $volume ?></td>
                    <td><?php echo $circulating." ".$symbol ?></td>
                    <td class='
                    <?php
                    if (strpos($change, '-') !== false) {
                        echo "text-danger";
                    }else {
                        echo "text-success";
                    }
                    ?>
                    '><?php echo $change ?>%</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>