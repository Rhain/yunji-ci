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
                            <button class="btn btn-sm btn-outline-danger waves-effect">
                                <i class="zmdi zmdi-delete"></i> 买入
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
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/order.js"></script>