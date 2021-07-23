<div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Nombre de visite total</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success"><?php $visitor->readVisitor() ?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Nombres de pages consultées</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                                         style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Nombre de commentaires postés</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3">
                            <canvas width="67" height="30"
                                    style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto">
                        <span class="counter text-info">
                            <?php foreach ($comments as $comment){echo $comment->result;} ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Quelque courbes:</h3>
                <div class="d-md-flex">
                    <ul class="list-inline d-flex ms-auto">
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                        </li>
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                        </li>
                    </ul>
                </div>
                <div id="ct-visits" style="height: 405px;">
                    <div class="chartist-tooltip" style="top: -17px; left: -12px;">
                        <span class="chartist-tooltip-value">8</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

