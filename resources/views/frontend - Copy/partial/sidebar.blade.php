

<div class="col-md-3" style="background-color: #f7f7f7;">
  <div class="container">
  <h2>Accordion Example</h2>
  <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div>
</div>
    
</div>

<!-- Sidebar ================================================== -->
<!-- <div id="sidebar" class="col-md-3" style="background-color: #f7f7f7;">
  <div class="cart">
    <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
  </div>

  @php
   $helo = 0;
  @endphp
  @foreach(App\Models\Category::orderBy('name', 'desc')->where('parent_id', null)->get() as $parent)
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#main-{{ $parent->id }}">{{ $parent->name }}</a>
      </div>
    </div>
      @foreach(App\Models\Category::orderBy('name', 'desc')->where('parent_id', $parent->id )->get() as $child)
      <div id="main-{{ $parent->id }}" class="collapse
        @if($helo == 0)
        show
        @endif
        " data-parent="#accordion">
        <div class="card-body">
          <ul>
            <li><a href="#"><i class="icon-chevron-right"></i>{{ $child->name }}</a></li>
          </ul>
        </div>
      </div>
    </div>
    @endforeach
    @php
     $helo ++;
    @endphp

  @endforeach





  <br/>

  <div class="card " style="text-align: -webkit-center;">
    <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" width="150x"/>
    <div class="card-body">
      <p class="card-text">Panasonic</p>
      <h4 style="text-align:center">
        <a class="btn btn-info btn-sm" href="product_details.html"> <i class="icon-zoom-in"></i></a>
        <a class="btn btn-info btn-sm" href="#">Add to <i class="icon-shopping-cart"></i></a>
        <a class="btn btn-primary btn-sm" href="#">$222.00</a></h4>
      </div>
    </div>
    <br>

    <div class="card " style="text-align: -webkit-center;">
      <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel" width="150x">
      <div class="card-body">
        <p class="card-text">Kindle</p>
        <h4 style="text-align:center">
          <a class="btn btn-info btn-sm" href="product_details.html"> <i class="icon-zoom-in"></i></a>
          <a class="btn btn-info btn-sm" href="#">Add to <i class="icon-shopping-cart"></i></a>
          <a class="btn btn-primary btn-sm" href="#">$222.00</a></h4>
        </div>
      </div>
      <br/>

      <div class="card " style="text-align: -webkit-center;">
        <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods" width="150x">
        <div class="card-body">
          <p class="card-text">Payment Methods</p>
          <h4 style="text-align:center">
            <a class="btn btn-info btn-sm" href="product_details.html"> <i class="icon-zoom-in"></i></a>
            <a class="btn btn-info btn-sm" href="#">Add to <i class="icon-shopping-cart"></i></a>
            <a class="btn btn-primary btn-sm" href="#">$222.00</a></h4>
          </div>
        </div>
        <br/>
      </div> -->
      <!-- Sidebar end=============================================== -->
