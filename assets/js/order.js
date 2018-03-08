var baseurl = $('#baseurl').val();
$( document ).on( 'keyup mouseup', 'input[name=count]', function() {
    var e = $(this) ;
    var price = $('.price').html();
    var total_amount = parseFloat(price)*parseInt(e.val());
    if(!$.isNumeric(total_amount))
    {
        total_amount = 0;
    }
    total_amount = total_amount.toFixed(2);
    $('#t_amt').val(total_amount);
    $('.total_amount').html(total_amount+'USD');
}); 

function makeorder(){
    var post_data = {
        count : $('#cnt').val(),
        total_amount : $('#t_amt').val()
    };
    $.ajax({
        url : baseurl+'order/makeOrder',
        type : 'post',
        data : post_data,
        success : function(res) {
            res_url = baseurl+'order/preparePay?orderId='+res.orderid+'&userId='+res.user_id+'&totalAmount='+res.total_amount;
            show_page_for_backend(res_url);
                // console.log(res);
                // if(res.orderid>0){
                //     var pre_data = {
                //         orderId     : res.orderid,
                //         userId      : res.user_id,
                //         totalAmount : res.total_amount
                //     };
                //     $.ajax({
                //         url : baseurl+'order/preparePay',
                //         type : 'post',
                //         data : pre_data,
                //         success : function(response){
                //             //    console.log(response);
                //         }
                //     })
                // }
                // else {
                //     alert("wrong!");
                // }
        }
})
}