<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'OPC深润养护原液精华套  ';
?>
<div>
    <?= Html::a(Html::img("images/header.png",['width'=>'100%']),'http://www.dcexport.cn')?>
    <p style="font-size:1.5em;text-align: center;margin:1em auto">DC ExportOPC深润养护原液精华套 </p>
    <p style="text-align: center;color:red">（官方活动：购买259元OPC深润养护原液精华套，送129元48小时焕肤套装）</p>
</div>
<div id="img">    
    <?php
        echo Html::img('images/product3.jpg',['width'=>'100%']);
        for ($i=2; $i<=24 ; $i++) {
            echo Html::img($i<10 ? "images/product_03_0".$i.'.jpg' : "images/product_03_".$i.'.jpg',['width'=>'100%','alt'=>"OPC深润养护原液精华套"]);
        }
    ?>
</div>
<hr />
<p style="font-weight:bolder">快速购买通道:</p>
<div style="margin-top: 10px;">
    <?php
    $form = ActiveForm::begin([
                'action' => ['activity/save'],
    ]);
    ?>
    <div style="margin:10px 5%">数量：<button type="button" id="cut">-</button><input id="activityorder-num" style="width: 10%;margin-left:0"  type="text" value="1" name="Activityorder[num]"><button type="button" id="add">+</button>  总价：<b>299</b>.00元</div>

    <?= $form->field($model, 'name', ['inputOptions' => ['placeholder' => '姓名:']])->textInput()->label(false) ?>

    <?= $form->field($model, 'address', ['inputOptions' => ['placeholder' => "详细地址"]])->textarea(['rows' => 2])->label(false) ?>
    
    <?= $form->field($model, 'goods')->hiddenInput(['value'=>'OPC深润养护原液精华套'])->label(false) ?>

    <?= $form->field($model, 'phone', ['inputOptions' => ['placeholder' => "手机号"]])->textInput()->label(false) ?> 
    <div class="col-lg-7">
    <div class="input-group">
      <input type="text" name="code"  class="form-control" />
      <span class="input-group-btn">
        <button id="btn" class="btn btn-default" type="button">获取验证码</button>
      </span>
    </div><!-- /input-group -->
  </div>
    <?= $form->field($model, 'total', ['inputOptions' => ['placeholder' => '总价']])->hiddenInput(['value' => 299])->label(false) ?>

    <button style="width: 6em;margin:0 5% 10px 0;float: right" class="btn btn-success">确认购买</button>

    <?php ActiveForm::end(); ?>
</div>

<hr style="clear:both"/>
<div style="width:90%;margin: 0 auto;clear: both">
    <div id="pinglun">相关评论</div>    
    <div id="shuxing">商品属性</div>
    <div class="pinglun">
        <ol>
            <li>手机号：159***2969</li>
            <li>评价：我用过，DC Export小黑瓶就可以修复抗痘，导出毒素，清洁肌肤，不过家里还有呢。</li>
            <hr />
        </ol>
        <ul style="display:none">
            <li>手机号：159***2389</li>
            <li>评价：我的是在央视网络商城买的，几个和官方差不多，绝对正品。没想到做活动了，还想买个备着。</li>
            <hr />
        </ul>
        <ul style="display:none">
            <li>手机号：135***1579</li>
            <li>评价：这个不错，还有DC的水膜，很管用，我试过，当时在央视网商城买的，是正品。</li>
            <hr />
        </ul>
        <ul style="display:none">
            <li>手机号：147***7958</li>
            <li>评价：我也用DC的小黑瓶，还有DC水膜，央视网商城和这官网都是正品。。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：159***1472</li>
            <li>评价：多补水吧 DC我听说过 很好用的 你可以试试</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：130***1354</li>
            <li>评价：可以用DC Export的小黑瓶，超级管用呢，我用了几次黑头就没了，真心不错。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：159***5670</li>
            <li>评价：看我家的DC Export 水膜。补水效果很好的</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：180***2354</li>
            <li>评价：是DC Export本能系列的面膜，小黑瓶美白祛斑超级好用</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：159***2361</li>
            <li>评价：有斑斑真是太难堪了，幸好有DC Export小黑瓶帮忙</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：130***3754</li>
            <li>评价：我经常使用DC Export本能系列，长期坚持效果很好，现在还给我男友用，他那脸啊….还真管用。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：170***3264</li>
            <li>评价：DC Export本能系列？好像听说过，我有个朋友就在用，感觉不错。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：132***2579</li>
            <li>评价：对啊对啊，那个美白效果很好的，还能清洁皮肤</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：152***3251</li>
            <li>评价：试试DC Export本能系列，尤其是DC 的小黑瓶，听说能清理毛孔垃圾效果不错。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：186***3691</li>
            <li>评价：用DC小黑瓶啊，不仅能清理肌肤，还能美白超级好用的呢！！</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：147***3688</li>
            <li>评价：给我老妈也买了一套，那个系列的OPC中年人用的效果特别不错！</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：150***1582</li>
            <li>评价：用祛斑的护肤品啊，我用的DC Export美白效果还不错</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：186***1342</li>
            <li>评价：我也经常用DC小黑瓶，央视网商城也有卖的，正品</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：139***2286</li>
            <li>评价：这就是以前很火的DC小黑瓶吧？听说超级好用，试不试呢？？</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：134***3281</li>
            <li>评价：用DC Export效果既然很好就继续用，其他的可能就没有这个好用了</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：136***6288</li>
            <li>评价：我也用DC的小黑瓶，还有DC水膜，在官网上买的，没赶上活动。。。。亏了</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：185***1780</li>
            <li>评价：我也用DC Export本能系列，感觉很好。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：135***1022</li>
            <li>评价：毛孔要清洁，小黑瓶就可以，然后一定要补水，DC的水膜就不错</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：187***3289</li>
            <li>评价：是深层清洁的吗？刚好需要，买了。</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：157***2381</li>
            <li>评价：都可以试试DC Export的小黑瓶，效果很好的，用一两次痘痘就减少了</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：159***1053</li>
            <li>评价：我也爱起痘，最近一直用DC Export小黑瓶，真不错</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：138***2388</li>
            <li>评价：试试DC Export的小黑瓶，控油又祛痘，而且还去黑头，超级管用</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：132***8900</li>
            <li>评价：我也在用，据说只有央视网商城有正品呦</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：186***1240</li>
            <li>评价：DC Export的水膜啊，富含植物精华，超级好用的</li>
            <hr />
        </ul>    
        <ul style="display:none">
            <li>手机号：188***4664</li>
            <li>评价：你可以试试DC小黑瓶，去黑头很不错的，很多人都在用</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：170***1572</li>
            <li>评价：试试DC的小黑瓶，很不错</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：134***1011</li>
            <li>评价：DC小黑瓶确实很好用。我用过几次黑头就不见了</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：152***9800</li>
            <li>评价：你可以试试DC的补水面膜，补水效果很好用</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：135***1002</li>
            <li>评价：哈哈！泰国的DC Export的水膜超级好用</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：187***3358</li>
            <li>评价：我也在用，用了几次DC的小黑瓶效果很棒</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：157***0024</li>
            <li>评价：个人感觉DC Export的小黑瓶还不错，清洁又美白</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：135***0569</li>
            <li>评价：我也觉得DC Export的产品很好，我经常用opc，葡萄籽很好用</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：187***1030</li>
            <li>评价：用过，膏膜，适合油性皮肤的，我皮肤干，不太合适</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：132***8905</li>
            <li>评价：我的痘痘就是用DC Export小黑瓶去掉的，清洁效果很不错啊。</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：186***9001</li>
            <li>评价：我也是油性皮肤，出油多，DC Export的水膜也不错，我经常用</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：188***0024</li>
            <li>评价：多补水，DC Export的水膜效果很好，能美白肌肤</li>
            <hr />
        </ul> 
        <ul style="display:none">
            <li>手机号：135***0000</li>
            <li>评价：我也用DC Export的水膜，小黑瓶也在使用，能减小毛孔，还能美白</li>
            <hr />
        </ul>
        <div id="showall" style="width:90%;text-align: center;margin:0 auto;">显示全部评论</div>
        <div id="jiantou" style="width:90%;text-align: center;margin:0 auto;">↓↓↓↓↓↓↓↓↓↓</div>
    </div>
    <div class="shuxing" style="display: none">
        <table class="table">
            <caption align="top">商品属性</caption>  
            <tr>
                <td style="width: 40%">[产地]</td><td>中国</td>
            </tr>
            <tr>
                <td>[主要成份]</td><td> 	OPC胶原蛋白原液：水、丁二醇、甜菜碱、双丙甘醇、海藻糖、水解原花青素、酵母提取物、凝血酸、马齿苋（PORTULACA OLERACEA）提取物、烟酰胺、甘草酸二钾、聚谷氨酸钠、尿囊素、粉防己（STEPHANIA TETRANDRA）提取物、丝氨酸、精氨酸、透明质酸钠、黄原胶、苯氧乙醇、乙基己基甘油。OPC原花青素精华液：水、丁二醇、甜菜碱、双丙甘醇、植物甾醇类、水解原花青素、马齿苋（PORTULACA OLERACEA）提取物、酵母提取物、烟酰胺、海藻糖、甘草酸二钾、聚谷氨酸钠、尿囊素、甘油聚甲基丙烯酸酯、视黄醇棕榈酸酯、胡萝卜（DAUCUS CAROTA SATIVA）提取物、巴巴苏籽油甘油聚醚-8 酯类、粉防己（STEPHANIA TETRANDRA）提取物、丙烯酰二甲基牛磺酸铵/VP 共聚物、环糊精、酵母氨基酸类、透明质酸钠、黄原胶、苯氧乙醇、精氨酸、乙基己基甘油。</td>
            </tr>
            <tr>
                <td>[使用部位]</td><td>面部</td>
            </tr>
            <tr>
                <td>[适用人群]</td><td>男女均适用</td>
            </tr>
            <tr>
                <td>[适合肤质]</td><td>所有肤质</td>
            </tr>
            <tr>
                <td>[产品规格/容量]</td><td>20ml+10ml</td>
            </tr>
        </table>
        <hr />
    </div>
</div>
<p style="margin-top:4em;text-align: center;font-size: 1.5em">其它精品：</p>
<br/>
<hr />
<a href="<?= Url::to(['activity/index'])?>">
    <div>
        <img src="images/product_01.jpg" width="90%" style="margin-left:5%">
        <p style="margin:20px auto"><button class="btn btn-success" style="float:right">购买</button></p>
    </div>
</a>
<br/>
<hr />
<a href="<?= Url::to(['activity/index2'])?>">
    <div>
        <img src="images/product_02.jpg" width="90%" style="margin-left:5%">
        <p style="margin:20px auto"><button class="btn btn-success" style="float:right">购买</button></p>
    </div>
</a>
<br/>
<hr />
<!--<a href="<?php //= Url::to(['activity/index4'])?>">
    <div>
        <img src="images/product_04.jpg" width="90%" style="margin-left:5%">
        <p style="margin:20px auto"><button class="btn btn-success" style="float:right">购买</button></p>
    </div>
</a>
<br/>
<hr />-->

<?php

$css = <<<DOF
    input{
        width: 90%;
        margin-left:5%;
    }
    textarea{
        width:90%;
        margin-left:5%;
    }
    .help-block{
        margin-left:5%;
    }
    p{
        width: 90%;
        margin: 0 auto;
    }
    ol{
        margin: 0 5%;
        padding:0;
        /*margin-right: 5%;*/
    }
    ul{
        margin: 0 5%;
        padding:0;
        /*margin-right: 5%;*/
    }
    li{
        font-size: .8em;
        list-style-type: none
    }
    #pinglun,#shuxing{
        width: 50%;
        height: 30px;        
        line-height: 30px;
        text-align: center;
        float: left;    
        margin-bottom: 10px
    }    
    #pinglun{
        background: #D9133C;
        color:#fff;
    }    
    #shuxing{
        background: #F5F5F5;
    }
    .pinglun,.shuxing{
        clear:both;
        width: 100%;
    }        
DOF;

$js = <<<EOF
    $("#pinglun").click(function () {
        $(".shuxing").hide();
        $(".pinglun").show();
        $(this).css({background: "#D9133C",color:'#fff'});
        $("#shuxing").css({background: "#F5F5F5",color:'#3e4145'});
    });
    $("#shuxing").click(function () {
        $(".pinglun").hide();
        $(".shuxing").show();
        $(this).css({background: "#D9133C",color:'#fff'});
        $("#pinglun").css({background: "#F5F5F5",color:'#3e4145'});
        $("#showall").html("显示全部评论");
        $("ul").css('display', 'none');
    });

    $("#cut").click(function () {
        var num = Number($("#activityorder-num").val());
        if (num == 1) {
            alert("至少要买一件哦！");
        } else {
            num = num - 1;
            var total = num * 299;
            $("#activityorder-num").val(num);
            $("#activityorder-total").val(total);
            $("b").html(total);
        }
    });
    $("#add").click(function () {
        var num = Number($("#activityorder-num").val());
        num = num + 1;
        var total = num * 299;
        $("#activityorder-num").val(num);
        $("#activityorder-total").val(total);
        $("b").html(total);
    });
    $("#btn").click(function () {
        var wait = 60;
        time(wait);
        var phone = $("#activityorder-phone").val();
        $.ajax({
            type: "POST",
            url: "index.php?r=activity/send",
            data: "phone=" + phone,
            success: function (msg) {
            }
        });
    });
    function time(wait) {
        if (wait == 0) {
            $("#btn").removeAttr("disabled");
            $("#btn").html("重新获取");
            wait = 60;
        } else {
            $("#btn").attr("disabled", true);
            $("#btn").html(wait + "秒后可重新获取");
            wait--;
            setTimeout(function () {
                time(wait);
            },
                    1000);
        }
    }
    $("#showall").click(function () {
        if ($("#showall").html() == '显示全部评论') {
            $("#showall").html("隐藏");
            $("#jiantou").html("↑↑↑↑↑");
            $("ul").css('display', 'block');
        } else {
            $("#showall").html("显示全部评论");
            $("#jiantou").html("↓↓↓↓↓↓↓↓↓↓");
            $("ul").css('display', 'none');
        }
    })
EOF;

$this->registerCss("$css");
$this->registerJs("$js");
