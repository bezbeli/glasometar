<div class="item" id="item-last">
    <div class="px-5">
        <h2>{$text['page_important_questions']}</h2>
        <p>{$text['page_important_legend']}</p>
        <button class="btn btn-primary btn-lg" type="submit" id="submit-top">{$text['page_important_skip']}
        <i class="fa fa-arrow-right"></i>
        </button>
        <div data-toggle="buttons">
            <ul class="list-group">
                {$i=0}
                {foreach $questions as $question}
                <li id="weightsel-row-{$question->id}" class="list-group-item">
                    <label class="weightsel-button btn btn-lg" for="c-{$question->id}" id="important-{$i}-{$question->id}">
                        <input type="checkbox" name="c-{$question->id}" id="c-{$question->id}" /> {$question->name}
                    </label>
                </li>
                {$i=$i+1}
                {/foreach}
            </ul>
        </div>
        <!-- /buttons -->
        <button class="btn btn-primary btn-lg" type="submit" id="submit-bottom">{$text['page_important_results']}
        <i class="fa fa-arrow-right"></i>
        </button>
    </div>
</div>
