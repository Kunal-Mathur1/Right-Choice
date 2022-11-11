var uniqueCode = '#93510_';
var noOfCars = 6;
var splittedDirName = document.URL.split('#93510_');
var carBrandName = splittedDirName[splittedDirName.length - 1].replace('.html', '')
// alert(carBrandName)



var carContainer = document.querySelector('.carsContainer');
var carContainerItems = "<div class='carsContainer__item'><a href='#'><img class='carsContainer__item__image' src='../../images/ToyCar1.jpg' alt='Cars'><div class='carsContainer__item__info'><div class='carsContainer__item__info__label'>Maruti XL6</div><div class='carsContainer__item__info__price'>Rs.11.29 - 14.55 Lakh <sup>*</sup></div><div class='carsContainer__item__info__otherInfo'>Petrol 20.27 to 20.97 kmpl Manual/Automatic</div></div></a></div>"

for(var i=1;i<=noOfCars;i++){
    carContainer.innerHTML += carContainerItems;
}

var audiCarsArray = [
    {
        carModalName: "Audi A1",
        carImgLink:"../../images/mcqueencar1.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carModalName: "Audi A2",
        carImgLink:"../../images/ucar.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carModalName: "Audi A3",
        carImgLink:"../../images/mcqueencar1.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carModalName: "Audi A4",
        carImgLink:"../../images/mcqueencar1.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carModalName: "Audi A5",
        carImgLink:"../../images/mcqueencar1.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carModalName: "Audi A6",
        carImgLink:"../../images/mcqueencar1.jpg",
        price: "Rs.25 - 34.55 Lakh ",
        carDetailLink: "../General/detailCar.html",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    }
]

for(var i=0;i<noOfCars;i++){
    audiCarsArray[i].carDetailLink = audiCarsArray[i].carDetailLink + uniqueCode + audiCarsArray[i].carModalName.replace(" ","_");
}

var BMWCarsArray = [
    {
        carName: "BMW S1",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carName: "BMW S2",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carName: "BMW S3",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carName: "BMW S4",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carName: "BMW S5",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    },
    {
        carName: "BMW S6",
        price: "Rs.25 - 34.55 Lakh ",
        other: "Petrol 15.27 to 20.97 kmpl Manual/Automatic"
    }
]

var carName = document.querySelectorAll('.carsContainer__item__info__label');
var carImg = document.querySelectorAll('.carsContainer__item__image');
var carHref = document.querySelectorAll('.carsContainer__item a');

switch (carBrandName) {
    case "AUDI":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carModalName);
            carName[i-1].innerHTML = audiCarsArray[i-1].carModalName;
            carImg[i-1].src = audiCarsArray[i-1].carImgLink;
            carHref[i-1].href = audiCarsArray[i-1].carDetailLink;
        }
        break;

    case "BMW":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "FORD":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "HYUNDAI":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "JAGUAR":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "KIA":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "LAMBORGINI":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "MERCEDES":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "PORCHE":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "RENAULT":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "11":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "12":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "13":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "14":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "15":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "16":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "17":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "18":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
    case "19":
        for(var i=1;i<=audiCarsArray.length;i++){
            console.log(audiCarsArray[i-1].carName); 
            carName[i-1].innerHTML = audiCarsArray[i-1].carName
        }
        break;

    case "20":
        for(var i=1;i<=BMWCarsArray.length;i++){
            console.log(BMWCarsArray[i-1].carName); 
            carName[i-1].innerHTML = BMWCarsArray[i-1].carName
        }
        break;     
}

// Rough Code

// document.getElementsByClassName('carsContainer__item__image').src = "../../images/ucar.jpg";
// carImg[4].src = "../../images/ucar.jpg";

// carImg = carImg.innerHTML;
// alert(carImg.innerHTML);

// alert(audiCarsArray[0].carName);
// console.log(carName[1]);

// if(carBrandName == "AUDI"){
//     for(var i=1;i<=audiCarsArray.length;i++){
//         console.log(audiCarsArray[i-1].carName); 
//         carName[i-1].innerHTML = audiCarsArray[i-1].carName
//     }
// }
// else if(carBrandName == "BMW"){
    // for(var i=1;i<=BMWCarsArray.length;i++){
    //     console.log(BMWCarsArray[i-1].carName); 
    //     carName[i-1].innerHTML = BMWCarsArray[i-1].carName
    // }
// }

// carImg[1].innerHTML = audiCarsArray[0].carImg;

