var inpCarBrandName = document.querySelector("#brandName");
var inpCarModalName = document.querySelector("#modalName");
var inpCarImgLink = document.querySelector("#imgLink");
var inpCarPrice = document.querySelector("#carPrice");
var inpCarDetailLink = document.querySelector("#carDetailLink");
var inpCarMileage = document.querySelector("#mileage");


var myArr = []
function addCar(){
    console.log(inpCarBrandName.value + inpCarModalName.value + inpCarImgLink.value + inpCarPrice.value + inpCarDetailLink.value +inpCarMileage.value)
    if(inpCarBrandName.value == "" || inpCarModalName.value == "" || inpCarImgLink.value == "" || inpCarPrice.value == "" || inpCarDetailLink.value == "" || inpCarMileage.value  == "" ){
        alert("Please Fill All Entries");
    }
    else{
        myArr.push({
            carModalName: inpCarModalName.value,
            carImgLink: inpCarImgLink.value,
            price: inpCarPrice.value,
            carDetailLink: inpCarDetailLink.value,
            other: inpCarMileage.value
        })
    }
    console.log(myArr)
}