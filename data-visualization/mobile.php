<div id="mobile-data-visualization">

<div class="accordion" id="accordion">
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
  <div class="card">
    <div class="card-header" id="heading<?php echo $i; ?>">
    
      <h2 class="mb-0">
        <button class="btn btn-link d-flex" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
        <div class="order d-inline"><?php echo $i; ?></div>     

        <img src='images/loghi/<?php echo $id ?>.png' class='logo-sprite mx-3 d-inline' height='16' width='16'>
        <div class="name d-inline"><?php echo $name ?></div>

        </button>
      </h2>
    </div>
    <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
      <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Market Cap:</th>
                    <td><?php echo $valutaSymbol. " " . $marketCap ?></td>
                </tr>
                <tr>
                    <th scope="row">Price:</th>
                    <td>
                        <a href='details.php?id=<?php echo $id ?>&valutadett=<?php echo $valuta ?>'>
                        <?php echo $valutaSymbol. " " . $price ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Volume (24h):</th>
                    <td>
                        <a href='details.php?id=<?php echo $id ?>&valutadett=<?php echo $valuta ?>'>
                        <?php echo $valutaSymbol. " " . $volume ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Circulating Supply:</th>
                    <td><?php echo $circulating." ".$symbol ?></td>
                </tr> 
                <tr>
                    <th scope="row">Change (24h):</th>
                    <td class='
                        <?php
                        if (strpos($change, '-') !== false) {
                            echo "text-danger";
                        }else {
                            echo "text-success";
                        }
                        ?>
                    '>
                        <?php echo $change ?>%
                    </td>
                </tr>       
            </tbody>
        </table>

      </div>
    </div>
  </div>
<?php
}
?>

</div>
</div>
