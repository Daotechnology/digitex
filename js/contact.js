const contact = document.getElementById("contact_details");


contact.addEventListener("submit", async(e)=>{
    e.preventDefault();
    const data = {
        house_number:contact.house_number.value,
        street_name:contact.street_name.value,
        bus_stop:contact.bus_stop.value,
        city:contact.city.value,
        lg_area:contact.lg_area.value,
        state:contact.state.value,
        home_town:contact.home_town.value,
        religion:contact.religion.value,
        phone_number1:contact.phone_number1.value,
        phone_number2:contact.phone_number2.value,
    }

    const response = await axios.post('backend/contact_details.php', data);
    if (response) {
        alert(response.data.statusText);
    }
})



