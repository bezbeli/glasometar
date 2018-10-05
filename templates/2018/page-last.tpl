<div class="item" id="item-last">
    <div class="px-5">
        <h2>{$text['page_important_questions']}</h2>
        <p>{$text['page_important_legend']}</p>

        <div data-toggle="buttons">
            <ul class="list-group weightsel">
                {$i=0}
                {foreach $questions as $question}
                <li id="weightsel-row-{$question->id}" class="list-group-item">
                    <label class="btn btn-sm weightsel-button" for="c-{$question->id}" id="important-{$i}-{$question->id}">
                        <input type="checkbox" name="c-{$question->id}" id="c-{$question->id}" /> {$question->name}
                    </label>
                </li>
                {$i=$i+1}
                {/foreach}
            </ul>
        </div>
        <!-- /buttons -->
        <div class="row">
            <div class="col">
                <button class="btn btn-light btn-lg btn-block" type="submit" id="submit-top">{$text['page_important_skip']}
                <i class="fa fa-arrow-right"></i>
                </button>
            </div>
            <div class="col">
                <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit-bottom">{$text['page_important_results']}
                <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
