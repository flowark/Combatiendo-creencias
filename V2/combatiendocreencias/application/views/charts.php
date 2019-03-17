<button onclick="topFunction()" id="myBtn" title="Sube"><i class="fas fa-arrow-up"></i></button>
<div class="container-fluid">

<div class="row container-charts">
  <div class="col-sm-2" style="">
    <h3>PROFESOR</h3><br>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cuestionario 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cuestionario 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cuestionario</a>
      </li>
    </ul>

  </div>
  <div class="col-sm-10">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="card">
          <div class="card-body">
            <canvas class="" id="myChart"></canvas>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <canvas class="" id="myChart2"></canvas>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-body">
            <canvas class="" id="myChart3"></canvas>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card">
          <div class="card-body">
            <canvas id="myChart4" width="400" height="400"></canvas>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="col-sm-4" style="background-color:orange;">25%</div>
          <div class="col-sm-8" style="background-color:yellow;">25% KHKHKJHK</div>
        </div>
      </div>

      <script src="<?php echo base_url();?>js/dashboard.js"></script>
    </div>
  </div>
</div>

</div>
