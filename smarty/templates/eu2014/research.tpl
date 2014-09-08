<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dotazník</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<!--<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>-->

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<!--<script src="../../docs/_assets/js/jqm-docs.js"></script>-->
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.js"></script>
	

	
	</head>
  <body>
   <div data-role="page" id="page">
   

	<div data-role="header">
		<h2>Dotazník pro MU a UHK</h2>
	</div><!-- /header -->  
	
	<div data-role="content">	
	<style>
	 {literal}.ui-dialog-contain {max-width:900px;} .odd {background-color:#def;} .even{background-color:#edf}{/literal}
	</style>
	<script>
	
	  $('.input-previously').ready(function() { 
	    $('.input-previously').change( function() {  //see http://api.jquery.com/change/  SmittyDesign's note
	      answer = $(this).attr( 'value');
          if (answer == 'yes') {
            $('#optional-part').show("slow");
          } else {
            $('#optional-part').hide("slow");
          }
	    });
	  });
	</script>
	<!--<a href="#popup" data-rel="popup">Open Popup</a>-->
	<div data-role="popupx" id="popup" class="ui-content">
	  <!-- Here is the form -->
	  <p>Dovolte, abychom Vás pozvali k <b>anonymnímu výzkumu</b> prováděném ve spolupráci <b>autorů Volební kalkulačky</b> a kateder politologie <a href="http://polit.fss.muni.cz/">Masarykovy univerzity v Brně</a> a <a href="http://fhs.uhk.cz/politologie/">Univerzity Hradec Králové</a>. Dotazník Vám zabere zhruba <b>2 minuty</b>.<p>
	  <form action="save_research.php" method="post" data-ajax="false">
	   
	    <p>Účast na výzkumu není povinná, můžete jej <button type="submit" data-mini="true" data-inline="true" name="upper-submit" value="upper-submit" >přeskočit rovnou na prezidentskou Volební kalkulačku</button></p>
	   
	    

	    
	    <!-- sex -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd"> 
		  <legend><b>Spol:</b></legend>
	      {foreach $data.sex as $item}      
         	  <input type="radio" name="input-sex" id="input-sex-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-sex-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- nationality -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>Nacinoalnost</b></legend>
	      {foreach $data.nationality as $item}      
         	  <input type="radio" name="input-nationality" id="input-nationality-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-nationality-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- education -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>Obrazovanje</b></legend>
	      {foreach $data.education as $item}      
         	  <input type="radio" name="input-education" id="input-education-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-education-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- municipality -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>Opština</b></legend>
		  <select name="select-choice-municipality" id="select-choice-municipality">
	      {foreach $data.municipality as $item}  
	        <option value="{$item.0}">{$item.1}</option>
	      {/foreach}
	      </select>
	    </fieldset>
	    
	    <button type="submit" name="submit" value="submit" data-theme="e" data-icon="arrow-r" data-iconpos="right">Děkujeme za spolupráci na výzkumu. Pokračovat na Volební kalkulačku.</button>
	    
	    
	  
	  </form>
	</div> <!-- /popup -->
	</div> <!-- /content -->
	</div> <!-- /page -->
	
	<!-- google analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8592359-7']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
  
  </body>
</html>
