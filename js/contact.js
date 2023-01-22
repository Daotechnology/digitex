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



