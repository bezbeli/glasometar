	<div data-role="footer" data-theme="{if isset($partner)}{$partner['swatch_footer']}{else}f{/if}">  
	  <div data-role="navbar" class="ui-body-c">
	    <ul>
	      <li><span class="computer"><a href="/support">Podporte projekt Volebná kalkulačka</a></span>
	      <span class="mobile"><a href="#dms-mobile" class="mobile" data-rel="popup">Podporte projekt Volebná kalkulačka</a></span>
	      </li>
	    </ul>
	  </div>
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  {if isset($partner) and ($partner['name'] != 'default')}<img src="/image/{$partner['name']}.png">{/if}
		  </div>
		 </div>
	  </div>
	</div>
