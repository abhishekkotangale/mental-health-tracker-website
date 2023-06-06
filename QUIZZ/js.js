
let questions = [
    {
        id: 1,
        question: " Do you feel your life is interesting?",
        answer:"",
        options: [
            "Very much",
            "To some extent",
            "Not so much",
            "None of these"
        ]   
    },
    {
        id: 2,
        question: "Do you normally accomplish what you want to",
        answer: "",
        options: [
          "Most of the time",
          "Sometimes",
          "Hardly ever",
          "None of these"
        ]
      },
      {
        id: 3,
        question: "Compared with the past, do you feel your present life is",
        answer: "",
        options: [
          "Very happy",
          "Quite happy",
          "Not so happy",
          "None of these"
        ]
      },
      {
        id: 4,
        question: "Do you think you have achieved the standard of  living and the social status that you had expected?",
        
        answer: "",
        options: [
          "Very much",
            "To some extent",
            "Not so much",
            "None of these"
        ]
      },
      {
        id: 5,
        question: "Do you feel confident that in case of a crisis (anything which substantially upsets your life situation) you will be able to cope with it/face it boldly?",
        
          
        answer: "",
        options: [
          "Very much",
          "To some extent",
          "Not so much",
          "None of these"
        ]
      },
      {
        id: 6,
        question: ". Do you sometimes experience moments of intense happiness which are difficult to describe?",
        answer: "",
        options: [
            "Very much",
            "To some extent",
            "Not so much",
            "None of these"
        ]
      },
      {
        id: 7,
        question: "Does it give you happiness to think that you are part of mankind?",
        answer: "",
        options: [
          "Quite often",
          "Sometimes",
          "Hardly ever",
          "None of these"
        ]
      },
      {
        id: 8,
        question: "Do you feel disturbed by feelings of anxiety and tension?",
        answer: "",
        options: [
            "Very much",
            "To some extent",
            "Not so much",
            "None of these"
        ]
      },
      {
        id: 9,
        question: "Do you feel your life is boring/uninteresting?",
        answer: "",
        options: [
            "Very much",
            "To some extent",
            "Not so much",
            "None of these"
        ]
      },
      {
        id: 10,
        question: "Do you consider it a problem for you that you sometimes lose your tempor over minor things?",
        answer: "r",
        options: [
            "Very much",
            "To some extent",
            "Not so much",
            "None of these"
          
        ]
      },
];

let question_count = 0;
let points = 0;


window.onload = function(){
    show(question_count);
};

function show(count){
    let question = document.getElementById("questions");
    let[first, second, third, fourth] = questions[count].options;

    question.innerHTML = `<h2>Q${count + 1}. ${questions[count].question}</h2>
    <ul class="option_group">
    <li class="option">${first}</li>
    <li class="option">${second}</li>
    <li class="option">${third}</li>
    <li class="option">${fourth}</li>
    </ul>`;
    toggleActive();  
}

function toggleActive(){
    let option = document.querySelectorAll("li.option");
    for(let i=0; i < option.length; i++){
        option[i].onclick = function(){
            for(let i=0; i < option.length; i++){
                if(option[i].classList.contains("active")){
                    option[i].classList.remove("active");
                }
            }
            option[i].classList.add("active");
        }
    }
}

function next(){

    if(question_count == questions.length -1){
        location.href = "final.php";
    }
    console.log(question_count);


let user_answer = document.querySelector("li.option.active").innerHTML;

if(user_answer == questions[question_count].answer){
    points += 10;
    sessionStorage.setItem("points",points);
}
console.log(points);

question_count++;
show(question_count);
}