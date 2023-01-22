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
    const toast = new bootstrap.Toast(toastLiveExample); 
    if (response.data.status) {
        toastLiveExample.innerHTML = `
            <div class="toast-header">
                <img src="reheboth.png" style = "height:10px" class="rounded me-2" alt="...">
                <strong class="me-auto text-success">Success Message</strong>
                <small>1 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-center fw-bold">
                ${response.data.statusText}
            </div>
        `
        toast.show();
    } else if(response.data.errorCode) {
        toastLiveExample.innerHTML = `
            <div class="toast-header">
                <img src="reheboth.png" style = "height:10px" class="rounded me-2" alt="...">
                <strong class="me-auto text-danger">Error!!!</strong>
                <small>1 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-center fw-bold">
                ${response.data.statusText}
            </div>
        `
        toast.show();
    }
    

})



