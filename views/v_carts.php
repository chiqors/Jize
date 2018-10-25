<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <h1>Carts</h1>
    </div>
    <div class="row">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th>Picture</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="<?= site_url("removecart?id=")?>"><i class="fa fa-times" aria-hidden="true"></i></a></th>
            <td>Gambar</td>
            <td>ROG Bag</td>
            <td>Rp. 500.000</td>
            <td>5</td>
            <td>Rp. 2.500.000</td>
          </tr>
          <tr>
            <th scope="row"><a href="<?= site_url("removecart?id=")?>"><i class="fa fa-times" aria-hidden="true"></i></a></th>
            <td>Gambar</td>
            <td>ROG Bag</td>
            <td>Rp. 500.000</td>
            <td>5</td>
            <td>Rp. 2.500.000</td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="col-md-6">
              <!--	<div class="coupon">
                  <label>Coupon:</label><br>
                  <input placeholder="Coupon code" type="text"> <button type="submit">Apply</button>
                </div> -->
              </div>
              <div class="col-md-6">
                <div class="cart-btn">
                  <!-- <button class="button btn-md" type="submit">Update Cart</button> -->
                  <a href="<?= site_url("checkout") ?>" class="btn btn-primary btn-md" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Checkout</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-md-6 push-md-6 no-padding">
        <h4 class="heading">Cart Totals</h4>
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <th>Cart Subtotal</th>
              <td><span class="amount">IDR 775.000.00/-</span></td>
            </tr>
            <tr>
              <th>Shipping and Handling</th>
              <td>
                Free Shipping
              </td>
            </tr>
            <tr>
              <th>Order Total</th>
              <td><strong><span class="amount">IDR 775.000.00/-</span></strong> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>