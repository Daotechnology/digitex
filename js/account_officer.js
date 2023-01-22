const form = document.getElementById("account_officer");
const sms = document.querySelectorAll("#sms");
const atm = document.querySelectorAll("#atm");
const mobile_banking = document.querySelectorAll("#mobile_banking");
const internet_banking = document.querySelectorAll("#internet_banking");
const toastLiveExample = document.querySelector('#liveToast')


let smsValue, mobile, internet, atm_card;

form.addEventListener("submit", async(e)=>{
    e.preventDefault();

    sms.forEach(d=>{
        if (d.checked) {
            smsValue = d.value;
        }
    })

    atm.forEach(acc =>{
        if (acc.checked) {
            atm_card = acc.value;
        }
    })

    mobile_banking.forEach(acc =>{
        if ( acc.checked ) {
            mobile = acc.value;
        }
    })

    internet_banking.forEach(acc =>{
        if ( acc.checked ) {
            internet = acc.value;
        }
    })

    const data = {
        account_name:form.account_name.value,
        account_number:form.account_number.value,
        account_type:form.account_type.value,
        officer_name:form.officer_name.value,
        address_visited:form.address_visited.value,
        building_description:form.building_description.value,
        bus_stop:form.bus_stop.value,
        landmark:form.landmark.value,
        address_confirmed:form.address_confirmed.value,
        visited_date:form.visited_date.value,
        sms:smsValue,
        atm:atm_card,
        mobile_banking:mobile,
        internet_banking:internet
    }

    const response = await axios.post('backend/account_officer.php', data);
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



