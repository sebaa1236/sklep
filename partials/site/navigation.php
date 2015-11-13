﻿<header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="row">
    
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" ng-class="{active : isActive( '/home' ) }" href="#/home">stefanShop</a>
            </div>
          
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
              <ul class="nav navbar-nav">
                <li ng-class="{active : isActive( '/products' ) }"><a href="#/products">Products</a></li>
              </ul>
          
              <ul class="nav navbar-nav navbar-right">
                <li ng-if="cart" ng-class="{active : isActive( '/cart' ) }"><a href="#/cart">Cart</a></li>
                <li ng-class="{active : isActive( '/orders' ) }"><a href="#/orders">Orders</a></li>
                <li ng-class="{active : isActive( '/login' ) }"><a href="#/login">LogIn</a></li>
                <li ng-class="{active : isActive( '/register' ) }"><a href="#/register">Register</a></li>
                <li ng-class="{active : isActive( '/admin' ) }"><a href="#/admin/users">Admin</a></li>
              </ul>
    
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
    
        </div>
      </div>
    </nav>
</header>