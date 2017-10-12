<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code Penne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        {{-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.1/lodash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>


        <!-- Styles --> --}}


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .title{
              padding: 2rem;
              font-size: 3em;
              text-decoration: none;
              font-family: 'Vibur', cursive;
            }

            .waitL {
              margin-top: -3em;
              text-decoration: underline;
              font-family: 'Vibur', cursive;
            }


            .list-item {

              margin-right: 10px;
            }
            .list-enter-active, .list-leave-active {
              transition: all 1s;

            }
            .list-enter, .list-leave-to {
              opacity: 0;
              transform: translateX(30px);

            }

            .list-complete-leave-active {
              transition: all 1s;
              transform: translateY(-30px);
            }

            .main {
              font-family: 'Raleway', sans-serif;
              font-weight: bold;
            }

            .bold {
              font-weight: bold;
            }

            .form-group {
              margin:.5em;
            }

        </style>
    </head>




<body>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center title">CODE PENNE</div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center waitL"><h1>wait list</h1></div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center main"><p>(password to remove entry = "x")<p></div>
      </div> --}}
      <hr>
      <div class="row main">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center "><p>SIGN UP</p></div>
      </div>
      <hr>
    </div>


    <div id="app" class="container main">

      <div class="row">
        <form >
          <div class="col-md-12 col-xs-12">
            <div class="form-group row">
              <div class="col-10">
                <label for="party" class="col-2 col-form-label">Party Name:</label>
                <input class="form-control" type="text" placeholder="Enter Party Name" id="example-text-input" v-model="newUser.party" style="text-transform: capitalize;">
              </div>

            </div>
            <div class="form-group row">
              <label for="size"><strong>Party Size:</strong></label>
              <select class="form-control" id="size" v-model="newUser.size">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10+</option>
                  </select>
            </div>
            <div class="form-group row">
              <div class="col-10">
                <label for="input" class="col-2 col-form-label">Phone Number: 000-000-0000</label>
                <input class="form-control input-medium bfh-phone" type="tel"  data-format="+1 (ddd) ddd-dddd" v-model="newUser.phone">

              </div>
            </div>
            <div class="form-group row">
              <div class="col-10">
                <input v-on:click="addUser" class="btn btn-success" type="submit" value="Submit">
                <input class="btn btn-primary" type="reset" value="Reset">
              </div>
            </div>
          </div>
        </form>
      </div>
      <hr>
      <div class="row main">
        <div class="col-lg-12 col-md-12 col-xs-12 text-center"><strong>LIST</strong></div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="list-group" style="">
            <label for="input" class="col-form-label list-label"> </label>
            <transition-group name="list" tag="div">
              <span class="list-group-item item-list" v-for="item in items" v-bind:key="item">

                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true" v-on:click="admin(item)">&times;</span>
                  </button>
                <label for="input" class="col-form-label"><span>Name:</span> @{{item.party}}</label>
                  <br><label for="input" class="col-form-label">Phone: @{{item.phone}}</label>
                  <br><label for="input" class="col-form-label">Size: <span class="badge">@{{item.size}}</span></label>
                <br><label for="input" class="col-form-label">Since: <span class="badge">@{{item.time}}</span></label>
              </span>
            </transition-group>
          </div>
        </div>
      </div>
    </div>

    <script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>

  <body>
</html>
