<!DOCTYPE html>

<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='//localhost:8888/650/prod-reviews.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='//localhost:8888/650/prod-reviews.js' type='text/javascript'></script>
</head>
<body>
  <style>
    .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
  </style>
  <iframe name="hiddenFrame" class="hide"></iframe>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h4>Product Score Predictor</h4>
      </div>
      <div class='panel-body'>
        <form action='process.php' id='reviewForm'class='form-horizontal' method='post' target='hiddenFrame'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Product Category</label>
            <div class='col-md-2'>
              <select name='category' class='form-control' id='id_category'>
                <option>Clothing</option>
                <option>Electronics</option>
                <option>Food</option>
                <option>Health</option>
                <option>Toys & Games</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='date'>Review Date</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input name='date' class='form-control datepicker' id='date'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_weights'>Category Weighting</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='category_switch'>
                <input name='category_weight' id='id_category' type='checkbox' value='True'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_weights'>Date Weighting</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='date_switch'>
                <input name='date_weight' id='id_date' type='checkbox' value='True'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_weights'>Title Weighting</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='title_switch'>
                <input name='title_weight' id='id_tweight' type='checkbox' value='True'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Max Stars</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input name='max_stars' class='form-control col-md-8' id='stars' placeholder='5' value = '5' type='number' min="3" max="10">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Review Title</label>
            <div class='col-md-6'>
              <textarea name='review_title' class='form-control' id='id_title' placeholder='Put review title here...' rows='2'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_text'>Review Text</label>
            <div class='col-md-6'>
              <textarea name='review_text' class='form-control' id='id_text' placeholder='Put review text here...' rows='10'></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class='control-label col-md-2 col-md-offset-2' for='score'>PREDICTED SCORE</label>
            <div class='col-md-4'>
              <input class="form-control" id="disabledInput" type="text" placeholder="10/10" disabled>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='button' onclick="return getOutput();">Predict Product Score</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>