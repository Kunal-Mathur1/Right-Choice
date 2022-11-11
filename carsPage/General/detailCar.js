// Image Slider
var indexValue = 1;
showImg(indexValue);
function btm_slide(e) { showImg(indexValue = e); }
function side_slide(e) { showImg(indexValue += e); }
function showImg(e) {
  var i;
  const img = document.querySelectorAll('.content__images__image');
  const slider = document.querySelectorAll('.btm-slides span');
  if (e > img.length) { indexValue = 1 }
  if (e < 1) { indexValue = img.length }
  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  for (i = 0; i < slider.length; i++) {
    slider[i].style.background = "rgba(255,255,255,0.1)";
  }
  img[indexValue - 1].style.display = "block";
  slider[indexValue - 1].style.background = "white";
}

//  Code 
var splittedDirName = document.URL.split('#93510_');
var lastDirName = splittedDirName[splittedDirName.length - 1].replace('.html', '')

var audicar = [
  {
    carName: "Audi A1",
    model: "123",
    year: 2001,
    detail: "lorem10",
    price: 1000000
  },
  {
    carName: "Audi A2",
    model: "234",
    year: 2002,
    detail: "lorem20",
    price: 1200000
  },
  {
    carName: "Audi A3",
    model: "345",
    year: 2003,
    detail: "lorem30",
    price: 1300000
  },
  {
    carName: "Audi A4",
    model: "456",
    year: 2004,
    detail: "lorem40",
    price: 1400000
  },
  {
    carName: "Audi A5",
    model: "567",
    year: 2005,
    detail: "lorem50",
    price: 1500000
  },
  {
    carName: "Audi A6",
    model: "678",
    year: 2006,
    detail: "lorem60",
    price: 1600000
  }
]

var carName = document.querySelector(".carName");
var carPrice = document.querySelector(".carPrice");
for(var i=0;i<=audicar.length-1;i++){
  if(audicar[i].carName.replace(" ","_") == lastDirName){
    carName.innerHTML = audicar[i].carName;
    carPrice.innerHTML = audicar[i].price;
  }
}

// Rough Code

// alert(lastDirName);

// var audi_a1 = {
//   carName: "Audi A1",
//   model: "123",
//   year: 2001,
//   detail: "lorem20"
// }
// var audi_a3 = {
//   carName: "Audi A3",
//   model: "123",
//   year: 2001,
//   detail: "lorem20"
// }
// var audi_a7 = {
//   carName: "Audi A7",
//   model: "123",
//   year: 2001,
//   detail: "lorem20"
// }

// alert()
// console.log(lastDirName);
// console.log(i)
// console.log(audicar[i].carName)
// alert(lastDirName);

// var audicar = [audi_a1,audi_a3,audi_a7]

// alert(audicar[1].carName)