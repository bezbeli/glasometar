
<div class="item{if ($key == 1)} active{/if}">

      <div class="o-question">
        <div class="i-question">
          <h2 class="question-question">{$question->question}</h2>
          <div class="question-description">{$question->description}</div>
        </div>
        <!-- /.i-question -->
      </div>
      <!-- /.o-question -->

      <p class="vote-buttons">
        <div data-toggle="buttons" data-target=".slider" data-slick="slickNext">
          <label class="btn btn-lg btn-primary vote-button" id="label-{$key}-{$question->id}-1">
            <input type="radio" name="q{$question->id}" id="q{$question->id}-1" value="1">{$text['page_question_yes']}
          </label>
          <label class="btn btn-lg btn-primary vote-button" id="label-{$key}-{$question->id}--1">
            <input type="radio" name="q{$question->id}" id="q{$question->id}--1" value="-1">{$text['page_question_no']}
          </label>
          <label class="btn btn-lg btn-primary vote-button" id="label-{$key}-{$question->id}-0">
            <input type="radio" name="q{$question->id}" id="q{$question->id}-0" value="0">{$text['page_question_neutral']}
            <span class="hidden-xs">{$text['page_question_neutral_add']}</span>
          </label>
        </div>
        <!-- /buttons -->
      </p>
      <!-- /.vote-buttons -->

</div>
