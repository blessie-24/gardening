<?php require_once 'include/header.php'?>
<?php if(isset($_SESSION['error'])):?>
    <div class="alert alert-danger">
        <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
    </div>
<?php elseif(isset($_SESSION['success'])):?>
    <div class="alert alert-success">
        <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
    </div>
<?php endif?>
<?php
    require_once 'include/db.php';
    $query ="SELECT cart.cart_id,products.product_id,products.product_name,products.price,products.type,products.image FROM products
    JOIN cart on cart.product_id = products.product_id WHERE cart.cid=".$_SESSION['uid'];
    $result = mysqli_query($conn,$query);

?>
    <div class="cart-container">
        <h1>Your Shopping Cart</h1>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $data):?>
                <tr>
                    <td><?php echo $data['product_name']?></td>
                    <td><?php echo $data['type']?></td>
                    <td>$<?php echo $data['price']?></td>
                    <td><img src="images/products/<?php echo $data['image']?>" alt="Product image" height="100"></td>
                    <td>$<?php echo $data['price']?></td>
                    <td><a href="remove.php?cart=<?php echo $data['cart_id']?>" class="remove-btn">Remove</a></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
        <div class="checkout-container">
            <a href="order.php" class="checkout-btn">Proceed to Order</a>
        </div>
    </div>
<?php require_once 'include/footer.php'?>
