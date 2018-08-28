<div class="item{if ($key == 1)} active{/if}">
    <div class="o-question">
        <div class="i-question">
            <h4 class="question-question">{$question->question}</h4>
            <div class="question-description">{$question->description}</div>
        </div>
    </div>
    <div class="d-flex justify-content-center" data-toggle="buttons" data-target=".slider" data-slick="slickNext">
        <label class="btn btn-primary vote-button m-2" id="label-{$key}-{$question->id}-1">
            <input type="radio" name="q{$question->id}" id="q{$question->id}-1" value="1">{$text['page_question_yes']}
        </label>
        <label class="btn btn-primary vote-button m-2" id="label-{$key}-{$question->id}--1">
            <input type="radio" name="q{$question->id}" id="q{$question->id}--1" value="-1">{$text['page_question_no']}
        </label>
        <label class="btn btn-primary vote-button m-2" id="label-{$key}-{$question->id}-0">
            <input type="radio" name="q{$question->id}" id="q{$question->id}-0" value="0">{$text['page_question_neutral']}
            <span class="hidden-xs">{$text['page_question_neutral_add']}</span>
        </label>
    </div>
</div>
