
// coffeeX >>variable
var coffeeX; coffeeT=0;
var juiceX;juiceT=0;
var teaX;teaT=0;
var coffeeX;coffeeT=0;
var burgerX;burgerT=0;
var food1X;food1T=0;
var sum;
var x ;
var y;



// coffeeT>>saves the calculated value 
// coffeeX>>save the value from type=Number

function grandTotal(){
gt = coffeeT+juiceT+teaT+food1T+chicken1T+burgerT;
document.getElementById("gtotal").innerHTML = gt;
return;
}



function onloadValue(){
  coffeeReset();burgerReset();teaReset();juiceReset();food1Reset();chicken1Reset();grandTotal();
}

//diaplay the total of individual items 

function coffee() {
  coffeeT=0; 
  coffeeX= document.getElementById("coffeeCost").value;
  coffeeT=40*coffeeX;
  document.getElementById("coffeePrice").innerHTML = coffeeT;
 return coffeeT;
}


function juice() {
  juiceT=0;
   juiceX= document.getElementById("juiceCost").value;
   juiceT=75*juiceX;
    document.getElementById("juicePrice").innerHTML = juiceT;
   return juiceT;
  }



function tea() {
    teaT=0;
    teaX= document.getElementById("teaCost").value;
    teaT=60*teaX;
    document.getElementById("teaPrice").innerHTML = teaT;
    return teaPrice;
  }

  

function food1() {
    food1T=0;
    food1X = document.getElementById("food1Cost").value;
    food1T= 275*food1X;
    document.getElementById("food1Price").innerHTML =food1T;
    return food1Price;
  }

  

function chicken1() {
    chicken1T=0;
    chicken1X = document.getElementById("chicken1Cost").value;
    chicken1T=400*chicken1X;
    document.getElementById("chicken1Price").innerHTML = chicken1T;
    return chicken1Price;
  }

  

function burger() {
    burgerT=0;
    burgerX = document.getElementById("burgerCost").value;
    burgerT=150*burgerX ;
    document.getElementById("burgerPrice").innerHTML =burgerT;
    return burgerPrice;
  }


 

//reset for individual type=number fields 


  function coffeeReset() { 
    var x = document.getElementById("coffeePrice"); 
        x.innerHTML = "0"; 
        y=document.getElementById("coffeeCost").value=""; 
        coffeeT=0;
       
        
} 



function juiceReset() { 
    var x = document.getElementById("juicePrice"); 
        x.innerHTML = "0"; 
        y=document.getElementById("juiceCost").value=""; 
      juiceT=0;
} 



function teaReset() { 
  var x = document.getElementById("teaPrice"); 
      x.innerHTML = "0"; 
      y=document.getElementById("teaCost").value=""; 
     teaT=0;
} 




function food1Reset() { 
    var x = document.getElementById("food1Price"); 
        x.innerHTML = "0"; 
        y=document.getElementById("food1Cost").value=""; 
       food1T=0;
} 


function chicken1Reset() { 
  var x = document.getElementById("chicken1Price"); 
      x.innerHTML = "0"; 
      y=document.getElementById("chicken1Cost").value=""; 
     chicken1T=0;
} 


function burgerReset() { 
    var x = document.getElementById("burgerPrice"); 
        x.innerHTML = "0"; 
        y=document.getElementById("burgerCost").value=""; 
        burgerT=0;
} 


function wishList(x){
 
  var list=[];
  list.push(x);

 
  window.alert(x + ' added to wishlist');
  
//figure out the backend of this

  }


//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// test
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}