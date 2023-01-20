const kin = document.getElementById("nextofkin");


kin.addEventListener("submit", async(e)=>{
    e.preventDefault();
    const data = {
        surname:kin.surname.value,
        firstname:kin.firstname.value,
        othername:kin.othername.value,
        dob:kin.dob.value,
        gender:kin.gender.value,
        mobile_number:kin.mobile_number.value,
        street_name:kin.street_name.value,
        bus_stop:kin.bus_stop.value
    }
    console.log(data)
    const response = await axios.post('backend/nextofkin.php', data);
    if (response) {
        alert(response.data.statusText);
    }
})



