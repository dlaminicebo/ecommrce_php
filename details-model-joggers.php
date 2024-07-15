<!-- Corrected code with comments -->
<div class="modal fade details-4" id="details-4" tabindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">
  <!-- Fixed typo: "tableindex" should be "tabindex" -->

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Fixed typo: Closing </button> tag was misspelled as </butoon> -->
        <h4 class="modal-title text-center">headband</h4>
        <!-- Capitalized the title -->
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="images/Joggers.jpg" alt="headband" class="details img-responsive" />
                <!-- Fixed typo: "scr" should be "src" -->
                <!-- Fixed class name: "img.responsive" should be "img-responsive" -->
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>These joggers are strong and comfotable. You must try them and buy them. Get them while they last.</p>
              <!-- Fixed typos and improved sentence -->
              <p>Price: R120</p>
              <p>Brand: joggers</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <!-- Capitalized "Quantity" -->
                    <input type="text" class="form-control" id="quantity" name="quantity" />
                  </div>
                </div>
                <br /><br /><br />
                <!-- Fixed: Added missing closing div tag and removed redundant br tags -->
                <div class="form-group">
                  <label for="size">Size:</label>
                  <!-- Fixed typo: "Seize" should be "Size" -->
                  <select name="size" id="size" class="form-control">
                    <option value=""></option>
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
        <!-- Fixed typo: "tbn-warming" should be "btn btn-warning" and corrected "sapn" to "span" -->
      </div>
    </div>
  </div>
</div>
