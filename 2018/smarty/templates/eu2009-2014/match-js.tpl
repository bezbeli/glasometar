<script>
  //highlight more table
  $('document').ready(function() {
    $('.list-group-item').hover(function(){
      $(this).toggleClass('active');
    });
  });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.5/d3.js"></script>

<script>
  //me
    var user = {$user};
    var weights = user['weight'];
    var me = {
      "id": "{$config->me_id}",
      "name": "{$config->me_name}",
      "short_name": "{$config->me_short_name}",
      "vote": user['vote']
    };
  //answers and q(uestions') coefs loaded directly
  var answers = {$answers_json};
  var qcoefs = {$qcoefs_json};
  
  var texts = { 'yes':"{$text['result_yes']}", 'no':"{$text['result_no']}" , 'question':"{$text['result_question']}"};
</script>

<script src="../../js/showcomparison.js"></script>
<script src="../../js/showmatrix.js"></script>
<script src="../../js/calcmatrix.js"></script>
