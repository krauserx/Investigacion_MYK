<?php

/* @var $this yii\web\View */

$this->title = 'Investigacion yiiframework';
include 'serviciohoras.php';

?>


<div class="site-index">

    <div class="jumbotron">
        <h1>Hola Mundo</h1>

        <p class="lead">Investigacion MYK</p>

        <p><a class="btn btn-lg btn-success" href="http://worldtimeapi.org/">Servicio Tiempo</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
  

                <p><a class="btn btn-default"  >Tiempo New York &raquo;</a></p>

<dl>
  <dt>Nombre</dt>
  <dd><?php
echo tiemposform::hor1(1);
?></dd>
  <dt>Fecha y Hora</dt>
  <dd><?php
echo tiemposform::hor1(2);
?></dd></dd>

</dl>
            </div>
            <div class="col-lg-4">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Tiempo Belgrade&raquo;</a></p>

<dl>
  <dt>Nombre</dt>
  <dd><?php
echo tiemposform::hor2(1);
?></dd>
  <dt>Fecha y Hora</dt>
  <dd><?php
echo tiemposform::hor2(2);
?></dd>

</dl>
            </div>
            <div class="col-lg-4">


                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Tiempo Costa Rica &raquo;</a></p>

<dl>
  <dt>Nombre</dt>
  <dd><?php
echo tiemposform::hor3(1);
?></dd>
  <dt>Fecha y Hora</dt>
  <dd><?php
echo tiemposform::hor3(2);
?></dd>

</dl>
            </div>
        </div>

    </div>
</div>
