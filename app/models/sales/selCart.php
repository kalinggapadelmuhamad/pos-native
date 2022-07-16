<?php

//sellect cart
$selCart    = "SELECT cart.idCart, 
                    cart.idItems, 
                    items.itemsCode, 
                    items.itemsName, 
                    items.sellingPrice,
                    cart.qty 
                    FROM cart, items 
                WHERE cart.idItems = items.idItems;";
$selCartx   = $conn->query($selCart);

$selCartr   = "SELECT cart.idCart, 
                    cart.idItems, 
                    items.itemsCode, 
                    items.itemsName, 
                    items.sellingPrice,
                    cart.qty 
                    FROM cart, items 
                WHERE cart.idItems = items.idItems;";
$selCartrx   = $conn->query($selCartr);

//sellect sum subtotal dan qty
$selSum     = "SELECT SUM(items.sellingPrice * cart.qty) as subTotal, SUM(cart.qty) as totalQty, cart.qty FROM cart, items WHERE cart.idItems = items.idItems";
$selSumx    = $conn->query($selSum);
$selSumd    = $selSumx->fetch_object();
