
//deluxe room
const roomName = "Deluxe Room";


let roomPrice = 15000;
let availableRooms = 5;
let bookingStatus = "Available";



document.getElementById("deluxePrice").innerText = roomPrice;
document.getElementById("deluxeCount").innerText = availableRooms;
document.getElementById("deluxeStatus").innerText = bookingStatus;


console.log("Room Name:", roomName);
console.log("Price:", roomPrice);
console.log("Available Rooms:", availableRooms);



function bookDeluxeRoom() {
    if (availableRooms > 0) {
        let availableRooms=5
        availableRooms--; 

       if(availableRooms===0){  
           bookingStatus = "Booked";
        }
        else{
            bookingStatus="Available";
        }

        document.getElementById("deluxeCount").innerText = availableRooms;
        document.getElementById("deluxeStatus").innerText = bookingStatus;

        console.log("Room booked successfully");
    } else {
        bookingStatus = "Sold Out";
        document.getElementById("deluxeStatus").innerText = bookingStatus;
        console.log("No rooms available");
    }
}

//suite room

const roomname = "suite";


let suitePrice = 30000;
let available= 3;
let booking = "Available";



document.getElementById("suitePrice").innerText = suitePrice;
document.getElementById("suiteCount").innerText = available;
document.getElementById("suiteStatus").innerText = booking;


console.log("Room Name:", roomname);
console.log("Price:", suitePrice);
console.log("Available Rooms:", available);



function booksuiteRoom() {
    if (available> 0) {
        let available =3
        available--;   
       if(available===0){  
        booking = "Booked";
        }
        else{
            booking="Available";
        }

        document.getElementById("suiteCount").innerText = available;
        document.getElementById("suiteStatus").innerText = booking;

        console.log("Room booked successfully");
    } else {
        booking = "Sold Out";
        document.getElementById("suiteStatus").innerText = booking;
        console.log("No rooms available");
    }
}


//
const room= "Standard Room";


let standardPrice = 10000;
let availableStandardRooms= 4;
let state = "Available";



document.getElementById("suitePrice").innerText = standardPrice;
document.getElementById("suiteCount").innerText = availableStandardRooms;
document.getElementById("suiteStatus").innerText = state;


console.log("Room Name:", room);
console.log("Price:", standardPrice);
console.log("Available Rooms:", availableStandardRooms);



function bookStandardRoom() {
    if (availableStandardRooms> 0) {
        let availableStandardRooms =4
        availableStandardRooms--; 
        if(availableStandardRooms===0){  
        state = "Booked";
        }
        else{
            state="Available";
        }
        document.getElementById("standardCount").innerText = availableStandardRooms;
        document.getElementById("standardStatus").innerText = state;

        console.log("Room booked successfully");
    } else {
        state = "Sold Out";
        document.getElementById("standardStatus").innerText = state;
        console.log("No rooms available");
    }
}
function openBooking(room, price) {
    document.getElementById("roomType").value = room;
    document.getElementById("roomPrice").value = price;

    document.getElementById("booking").scrollIntoView({
        behavior: "smooth"
    });
}



