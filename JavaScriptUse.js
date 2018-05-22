function funFactFunction() // generates a random number and prints a fun fact associated with that number
{
  console.log("Hello");
  var randomNumberOneToFour = Math.floor(Math.random()*4)+1;
  console.log(randomNumberOneToFour); // done to check the console if the number is changing each time
  switch(randomNumberOneToFour){
    case 1:
      document.getElementById("funFact").innerHTML="We have One gold medal";
      break;

    case 2:
      document.getElementById("funFact").innerHTML="We have seven seniors, four of which have been consistent members for all four years";
      break;

    case 3:
      document.getElementById("funFact").innerHTML="We used to be part of the Theatre Club";
      break;

    case 4:
      document.getElementById("funFact").innerHTML="Our head coach is our founder's father";
      break;

    default:
      document.getElementById("funFact").innerHTML="This is a great club team to join!";
  }
}


function nextPractice() // shows the day/time of the next practice
{
  var dateObject = new Date();
  var today = dateObject.getDay();
  console.log(today); // checkng the integer value of the current day (0-6, sunday-saturday)

  if(today<=1)
    window.alert("Monday - 7:00 PM");
  else if(today<=3 && today >1)
    window.alert("Wednesday - 9:00 PM");
  else
    window.alert("Saturday - 11:00 AM");
}

function disciplineOff(obj) // displays text while mouse is not clicked down
{
  obj.innerHTML="<h4>Do you know the secret rules?</h4>";
}

function disciplineHold(obj) // displays text while mouse is clicked down
{
  obj.innerHTML="<h4>The rules:1. Courtesy\n2.Integrity\n3.Perseverance\n4.Self-Control\n5.Indomitable Spirit</h4>";
}

function hint() // opens an alert when the user presses the "hint" button
{
  window.alert("Click and hold the question");
}
