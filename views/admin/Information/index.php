<div class="row">
    <div class="col">
        <div class="column">
              <div class="col">
                  <div class="widget widget-tile">
                      <div class="chart sparkline" id="spark1"><canvas width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;"></canvas></div>
                      <div class="data-info">
                          <div class="desc">Họ và Tên (*)</div>
                          <div class="value">
                          <?php echo $data->firstname   ?>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="widget widget-tile">
                      <div class="chart sparkline" id="spark2"><canvas width="81" height="35" style="display: inline-block; width: 81px; height: 35px; vertical-align: top;"></canvas></div>
                      <div class="data-info">
                          <div class="desc">Số điện thoại</div>
                          <div class="value">
                          <?php echo $data->phone   ?>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="col">
                    <div class="widget widget-tile">
                        <div class="chart sparkline" id="spark3"><canvas width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;"></canvas></div>
                        <div class="data-info">
                            <div class="desc">Địa chỉ</div>
                            <div class="value">
                            <?php echo $data->diachi   ?>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                  <div class="widget widget-tile">
                      <div class="chart sparkline" id="spark3"><canvas width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;"></canvas></div>
                      <div class="data-info">
                          <div class="desc">Email</div>
                          <div class="value">
                          <?php echo $data->email   ?>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col">
                      <div class="data-info">
                          <a href="/admin/edit"><button type="button" class="btn btn-info">Sửa</button></a>
                      </div>
              </div>
          </div>
    </div>
    <div class="col">
        <div class="col">
            <div class="widget widget-tile">
                <div class="chart sparkline" id="spark3"><canvas width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;"></canvas></div>
                <div class="data-info">
                    <div class="desc">Tên đăng nhập</div>
                    <div class="value">
                    <?php echo $data->login_id   ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="widget widget-tile">
                <div class="chart sparkline" id="spark3"><canvas width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;"></canvas></div>
                <div class="data-info">
                    <div class="desc">Avatar</div>
                    <div class="value">
                    <img id="image" style="width: 408px;height:408px;" src="/uploads/<?= $data->avatar ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
          @script
          <script src="/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
          <script>
              $(document).ready(function() {
                  //-initialize the javascript
                  App.init();
                  App.dashboard();
              });
          </script>
          @endScript