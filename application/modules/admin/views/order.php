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
                    <td >0.321</td>
                    <td >
                        <select>
                            <option>BTH</option>
                            <option>ETH</option>
                            <option>ETC</option>
                            <option>LTC</option>
                        </select>
                    </td>
                    <td >
                        <input type="number" name="count" />
                    </td>
                    <td >
                        8.96
                    </td>
                    <td>
                        <a onclick="buy_item()" >
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
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/order.js"></script>