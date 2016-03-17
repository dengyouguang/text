<?php

use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = '支付方式 ';
$this->registerJsFile('@web/js/jquerys.js', ['type' => 'text/javascript', 'position' => View::POS_HEAD]);
?>
<style>
    #wechatbox,#inpbox,#inpsbox,#inpssbox{
        margin-left: 2em
    }
</style>
<div>
    <img src="images/title_black.png" width="90%" style="margin:1em 0 0 5%">
</div>
<p style="width:90%;margin: 0 0 0 2em">
    请选择您的支付方式：<br /><br />    
<div id="wechatbox"><input type="radio" id="wechat" name="type" value="微信支付"/>微信支付<br /><span id="wechatpay">直接点击按钮：确定购买</span></div>

<div id="inpsbox"><input type="radio" id="inps" name="type" value="支付宝"/>支付宝<br /><span id="alipay">直接点击按钮：确定购买</span></div>

<div id="inpbox"><input type="radio" id="inp"name="type" value="银行转账"/>银行转账<br /><span id="bank"></span></div>

<div id="inpssbox"><input type="radio" id="inpss" name="type" value="电话购买" />电话购买<br /><span id="phone"></span></div>
</p>
<?php
$form = ActiveForm::begin([
            'action' => ['activity/success'],
        ]);
?>

<?= $form->field($model, 'name')->hiddenInput()->label(false) ?>

<?= $form->field($model, 'address')->hiddenInput(['rows' => 2])->label(false) ?>

<?= $form->field($model, 'phone')->hiddenInput()->label(false) ?>

<?= $form->field($model, 'goods')->hiddenInput()->label(false) ?>

<?= $form->field($model, 'num')->hiddenInput()->label(false) ?>

<?= $form->field($model, 'total')->hiddenInput()->label(false) ?>

<div id="btn">
    <button class="btn btn-success" style="width: 6em;margin:0 5% 10px 0;float:right">确认购买</button>
</div>

<?php ActiveForm::end(); ?>
<script>
    //    判断是否为微信浏览器
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        $("#wechat").attr("checked", "checked");
        $("#inpsbox").hide();
        $("form").attr("action", "<?= Url::to(['activity/wechat']) ?>");
    } else {
        $("#inps").attr("checked", "checked");
        $("#wechatbox").hide();
    }
    $("#wechat").click(function () {
        $("#bank").html("");
        $("#phone").html("");
        $("#wechatpay").html("直接点击按钮：确定购买");
        $("#alipay").html("");
        $("#btn").html('<button class="btn btn-success" style="width: 6em;margin:0 5% 10px 0;float:right">确认购买</button>');
    });
    $("#inps").click(function () {
        $("#bank").html("");
        $("#phone").html("");
        $("#wechatpay").html("");
        $("#alipay").html("直接点击按钮：确定购买");
        $("#btn").html('<button class="btn btn-success" style="width: 6em;margin:0 5% 10px 0;float:right">确认购买</button>');
    });
    $("#inp").click(function () {
        $("#bank").html("账号：6225 2106 9271 9538 <br />上海浦东发展银行北京西直门支行 ，王秋香");
        $("#phone").html("");
        $("#alipay").html("");
        $("#wechatpay").html("");
        $("#btn").html("");
    });
    $("#inpss").click(function () {
        $("#bank").html("");
        $("#phone").html("拨打 4006080506  电话咨询购买");
        $("#alipay").html("");
        $("#wechatpay").html("");
        $("#btn").html("");
    });
</script>