https://twitter.com/intent/tweet?text={$text.result_twitter_text_1|escape:'url'}{$results[0].{$config->twitter_winner}|escape:'url'}({$results[0].result_percent}%25){$results[$results|@count-1].{$config->twitter_winner}|escape:'url'}({$results[$results|@count-1].result_percent}%25)&url={$text.result_fb_redirect_link|escape:'url'}&lang={$text.result_twitter_data_lang|escape:'url'}

