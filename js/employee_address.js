const employee = document.getElementById("employee_address");


employee.addEventListener("submit", async(e)=>{
    e.preventDefault();
    
    const data = {
        street_number:employee.street_number.value,
        street_name:employee.street_name.value,
        city:employee.city.value,
        bus_stop:employee.bus_stop.value,
        lga_area:employee.lga_area.value,
        state:employee.state.value,
        nature_of_business:employee.nature_of_business.value,
        phone_number:employee.phone_number.value,
        fax_number:employee.fax_number.value
    }

    const response = await axios.post('backend/employee_address.php', data);
    if (response) {
        alert(response.data.statusText);
    }

})



