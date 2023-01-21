const form = document.getElementById("account_officer");
const sms = document.querySelectorAll("#sms");
const atm = document.querySelectorAll("#atm");
const mobile_banking = document.querySelectorAll("#mobile_banking");
const internet_banking = document.querySelectorAll("#internet_banking");

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
    console.log(response);
    if (response) {
        alert(response.data.statusText);
    }
})



