const e_details = document.getElementById("employment_details");
const employment = document.querySelectorAll("#employment");

let mulValue;

e_details.addEventListener("submit", async(e)=>{
    e.preventDefault();
    employment.forEach(d=>{
        if (d.checked) {
            mulValue = d.value;
        }
    })

    const data = {
        employment_date:e_details.date.value,
        employment_status:mulValue
    }

    const response = await axios.post('backend/employment.php', data);
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



