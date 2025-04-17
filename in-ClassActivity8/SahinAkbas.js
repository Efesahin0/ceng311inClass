var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
};

function displayResults() {
    var total = 0;
    var highest = scores[0];

    for (var i = 0; i < scores.length; i++) {
        total += scores[i];
        if (scores[i] > highest) {
            highest = scores[i];
        }
    }

    var average = total / scores.length;

    var resultsDiv = document.getElementById("results");
    resultsDiv.innerHTML = "<h2>Results</h2>" +
                           "<p>Average score is " + average.toFixed(2) + "</p>" +
                           "<p>Highest score is " + highest + "</p>";
}

function displayScores() {
    var table = document.getElementById("scores_table");
    table.innerHTML = "<tr><th>Name</th><th>Score</th></tr>";

    for (var i = 0; i < names.length; i++) {
        var row = "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
        table.innerHTML += row;
    }
}

function addScore() {
    var name = document.getElementById("name").value.trim();
    var score = parseInt(document.getElementById("score").value);

    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(name);
    scores.push(score);

    document.getElementById("name").value = "";
    document.getElementById("score").value = "";
    document.getElementById("name").focus();
}





