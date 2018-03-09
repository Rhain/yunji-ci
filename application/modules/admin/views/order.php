<header class="content__title">
    <h1>购买宠物</h1>
    <small>支持多种加密货币购买宠物.</small>
</header>
<div class="card">
    <div class="card-block">
        <table class="table mb-0">
            <thead class="thead-default">
            <tr>
                <th>买入价格</th>
                <th>选择币种</th>
                <th>买入数量</th>
                <th>支付金额</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td >
                        <span class="price">
                        0.01
                        </span>USD
                    </td>
                    <td >
                        <select id="coin_type">
                            <option value="litecoin">LiteCoin</option>
                            <option value="bitcoin">BitCoin</option>
                            <option value="speedcoin">SpeedCoin</option>
                        </select>
                    </td>
                    <td >
                        <input type="number" name="count" id="cnt"/>
                    </td>
                    <td >
                        <span class="total_amount">
                        0
                        </span>
                    </td>
                    <td>
                        <a onclick="makeorder()" >
                            <button class="btn btn-sm btn-outline-primary waves-effect">
                                <i class="zmdi zmdi-edit"></i> 买入
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" id="t_amt" />
<input type="hidden" id="baseurl" value="<?php echo base_url() ?>" />
<header class="content__title">
    <small>历史交易记录</small>
</header>

<div class="card">

    <div class="card-block">
        <table class="table mb-0">
            <thead class="thead-default">
            <tr>
                <th>ID</th>
                <th>总数</th>
                <th>总金额(美元)</th>
                <th>支付金额</th>
                <th>订单状态</th>
                <th>更新时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    
                    foreach($orders as $order){
                        if($order["is_paid"]==0){
                            $status = "未支付";
                        }
                        else {
                            $status = "已支付";
                        }
                        echo '<tr><td>'. $order['id'] .'</td>';
                        echo '<td >'. $order['token_cnt'] .'</td>';
                        echo '<td >'. $order['usd_amount'] .'</td>';
                        echo '<td >'. $order['amount'] .$order['coinLabel'].'</td>';
                        echo '<td >'. $status .'</td>';
                        echo '<td >'. $order['updated'] .'</td>';
                        echo '<td >';
                        if($order['is_paid']==0)
                        echo '<a onclick="repay('.$order['id'] .','.$order['user_id'].','.$order['usd_amount'] .')" ><button class="btn btn-sm btn-outline-primary waves-effect" style="margin-right:10px;"><i class="zmdi zmdi-edit"></i>付款</button></a>';
                        echo '<a onclick="delete_order(\''.$order['id'].'\')" ><button class="btn btn-sm btn-outline-danger waves-effect"><i class="zmdi zmdi-delete"></i> 删除</button></a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
  <div>
   <?php
   echo $paginate['page']." of ".ceil($paginate['records']/$paginate['each_page_count']);
   if(isset($previous)){
       echo '<a href="'.$previous.'"> < </a> ';
   }
   if(isset($next)){
       echo '<a href="'.$next.'"> > </a> ';
   }
   ?>
   </div>
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/order.js"></script>