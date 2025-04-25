$(document).ready(function() {
    console.log("jQuery ve jQuery UI downloaded!");

    $("#birthday").datepicker({
      dateFormat: "dd-mm-yy",
      showAnim: "slideDown"
    });
  
    var languages = [
      "JavaScript", "Python", "Java", "C#", "C++", "PHP",
      "TypeScript", "Go", "Ruby", "Swift", "Kotlin", "Rust",
      "Scala", "Perl", "R", "SQL", "Dart", "C",
       "MATLAB", "Visual Basic",
      "Assembly", "Bash", "Clojure", "Erlang", "Fortran",
      "COBOL", "Haskell", "Groovy", "Delphi", "F#"
    ];

    $("#language").autocomplete({
      source: languages,
      minLength: 1
    });


  $("#activityForm").on("submit", function(e) {
    e.preventDefault();
    alert("Form Succesfully send!");
  });
});