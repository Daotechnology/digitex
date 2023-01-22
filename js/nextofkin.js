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



