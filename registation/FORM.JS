// Getting elements by their IDs
var F_name = document.getElementById("F_name");
var L_name = document.getElementById("L_name");
var date_of = document.getElementById("dat_b");
var nic = document.getElementById("Nic");
var phon = document.getElementById("p_num");
var pasword1 = document.getElementById("password1");
var password2 = document.getElementById("password2");

// Function to check if passwords match
function password_check() {
    // Getting values from the password fields
    let p1 = pasword1.value;
    let p2 = password2.value;
    
    // Logging the password values (for debugging purposes)
    

    // Comparing the passwords
    if (p1 !== p2) {
        alert("Passwords do not match. Please try again.");
        return false; // Prevent form submission or further action if passwords don't match
    } else {
        alert("Passwords match! Proceeding...");
        return true; // Proceed if passwords match
    }
}
password_check()