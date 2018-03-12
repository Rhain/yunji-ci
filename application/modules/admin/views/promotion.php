<div>
    <input type="text" id="textarea" value="<?php echo base_url() ?>auth/create_user/?pid=<?php echo $user_hash ?>" /> 
    <button id="copyBlock">复制推广链接</button> <span id="copyAnswer"></span>
</div>
<script type="text/javascript">
// Setup the variables
var textarea = document.getElementById("textarea");
var answer  = document.getElementById("copyAnswer");
var copy    = document.getElementById("copyBlock");
copy.addEventListener('click', function(e) {

   // Select some text (you could also create a range)
   textarea.select(); 

   // Use try & catch for unsupported browser
   try {

       // The important part (copy selected text)
       var ok = document.execCommand('copy');

       if (ok) answer.innerHTML = '复制成功!';
       else    answer.innerHTML = '无法复制!';
   } catch (err) {
       answer.innerHTML = 'Unsupported Browser!';
   }
});
</script>