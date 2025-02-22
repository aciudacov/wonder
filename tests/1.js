// Quiz result options in a separate object for flexibility
var resultOptions = [
    {   title: 'У Вас нет интоксикации организма',
        desc: '<p>Для того чтобы сохранить свое здоровье, Вы можете узнать о программах защиты организма. Обратитесь к консультанту через удобную вам форму связи.</p>'},
    {   title: 'У Вас начальная степень интоксикации организма',
        desc: '<p>Необходимо принять меры по дезинтоксикации организма. Обратитесь к консультанту через удобную вам форму связи.</p>'},
    {   title: 'У Вас очень выраженная степень интоксикации организма',
        desc: '<p>Срочно необходимо принять меры по дезинтоксикации организма. Обратитесь к консультанту через удобную вам форму связи.</p>'}
];
    
// global variables
var quizSteps = $('#quizzie .quiz-step'),
    totalScore = 0;

// for each step in the quiz, add the selected answer value to the total score
// if an answer has already been selected, subtract the previous value and update total score with the new selected answer value
// toggle a visual active state to show which option has been selected
quizSteps.each(function () {
    var currentStep = $(this),
        ansOpts = currentStep.children('.quiz-answer');
    // for each option per step, add a click listener
    // apply active class and calculate the total score
    ansOpts.each(function () {
        var eachOpt = $(this);
        eachOpt[0].addEventListener('click', check, false);
        function check() {
            var $this = $(this),
                value = $this.attr('data-quizIndex'),
                answerScore = parseInt(value);
            // check to see if an answer was previously selected
            if (currentStep.children('.active').length > 0) {
                var wasActive = currentStep.children('.active'),
                    oldScoreValue = wasActive.attr('data-quizIndex'),
                    oldScore = parseInt(oldScoreValue);
                // handle visual active state
                currentStep.children('.active').removeClass('active');
                $this.addClass('active');
                // handle the score calculation
                totalScore -= oldScoreValue;
                totalScore += answerScore;
                calcResults(totalScore);
            } else {
                // handle visual active state
                $this.addClass('active');
                // handle score calculation
                totalScore += answerScore;
                calcResults(totalScore);
                // handle current step
                updateStep(currentStep);
            }
        }
    });
});

// show current step/hide other steps
function updateStep(currentStep) {
    if(currentStep.hasClass('current')){
       currentStep.removeClass('current');
       currentStep.next().addClass('current');
    }
}

// display scoring results
function calcResults(totalScore) {
    // only update the results div if all questions have been answered
    if (quizSteps.find('.active').length == quizSteps.length){
        var resultsTitle = $('#results h1'),
            resultsDesc = $('#results .desc');
        
        // calc lowest possible score
        var lowestScoreArray = $('#quizzie .no-value').map(function() {
            return $(this).attr('data-quizIndex');
        });
        var minScore = 0;
        for (var i = 0; i < lowestScoreArray.length; i++) {
            minScore += lowestScoreArray[i] << 0;
        }
        // calculate highest possible score
        var highestScoreArray = $('#quizzie .high-value').map(function() {
            return $(this).attr('data-quizIndex');
        });
        var maxScore = 0;
        for (var i = 0; i < highestScoreArray.length; i++) {
            maxScore += highestScoreArray[i] << 0;
        }
        // calc range, number of possible results, and intervals between results
        var range = maxScore - minScore,
            numResults = resultOptions.length,
            interval = range / (numResults - 1),
            increment = '',
            n = 0; //increment index
        // incrementally increase the possible score, starting at the minScore, until totalScore falls into range. then match that increment index (number of times it took to get totalScore into range) and return the corresponding index results from resultOptions object
        while (n < numResults) {
            increment = minScore + (interval * n);
            if (totalScore < 5) {
                // populate results
                resultsTitle.replaceWith("<h1>" + resultOptions[0].title + "</h1>");
                resultsDesc.replaceWith("<p class='desc'>" + resultOptions[0].desc + "</p>");
                return;
            } else 
            if (totalScore < 10 && totalScore > 4) {
                // populate results
                resultsTitle.replaceWith("<h1>" + resultOptions[1].title + "</h1>");
                resultsDesc.replaceWith("<p class='desc'>" + resultOptions[1].desc + "</p>");
                return;
            } else 
            if (totalScore > 9) {
                // populate results
                resultsTitle.replaceWith("<h1>" + resultOptions[2].title + "</h1>");
                resultsDesc.replaceWith("<p class='desc'>" + resultOptions[2].desc + "</p>");
                return;
            } else 
            {
                n++;
            }
        }
    }
}