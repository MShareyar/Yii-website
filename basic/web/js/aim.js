
var myImage = document.getElementById("myimage") ;

var ImageArray = ["images/pizza.jpg","images/dessert.jpg","images/starter.jpg","images/drinks.jpg"] ;

var Imageindex = 0;

function imageslider() 
{
   myimage.setAttribute("src",ImageArray[Imageindex]);
   Imageindex++;

   if(Imageindex>= ImageArray.length)
   {
   	Imageindex=0;
   }
}

var intervalHandle = setInterval(imageslider,3000);
