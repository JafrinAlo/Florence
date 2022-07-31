<?php include('server.php')?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="eyeliner.css">
</head>
<body>

<h4 style="color: ghostwhite;alignment: center;text-align: center;font-size: 40px;font-family: 'Agency FB'">P U R S E</h4>
<div class="column side">
    <h2 style="color: #212121">Side</h2>
    <p style="color: #212121">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
</div>
<div class="column middle">
    <form method="post" action="purses.php">
    <figure class="snip1268">
        <div class="image">
            <img src="photos/toniq.jpg" alt="sq-sample4"/>
            <button type="submit" class="add-to-cart" name="78">Add to Cart</button>
        </div>
        <figcaption>
            <h2>T O N I Q</h2>
            <p>Gray Glitter </p>
            <div class="price">$58.00 </div>
        </figcaption>
    </figure>
</form>
    <form method="post" action="purses.php">
    <figure class="snip1268">
        <div class="image">
            <img src="photos/berrypecker.jpg" alt="sq-sample4"/>
            <button type="submit" class="add-to-cart" name="79">Add to Cart</button>
        </div>
        <figcaption>
            <h2>Berry Pecker</h2>
            <p>Wedding Collection </p>
            <div class="price">$65.00 </div>
        </figcaption>
    </figure>
</form>
    <form method="post" action="purses.php">
    <figure class="snip1268">
        <div class="image">
            <img src="photos/louis%20vutton.jpg" alt="sq-sample4"/>
            <button type="submit" class="add-to-cart" name="80">Add to Cart</button>
        </div>
        <figcaption>
            <h2>Louis Vuitton</h2>
            <p>Summer coll </p>
            <div class="price">$92.00 </div>
        </figcaption>
    </figure>
</form>
</div>
<script>
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>
</body>
</html>