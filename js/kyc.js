const kyc = document.getElementById("kyc");
const toastLiveExample = document.getElementById('liveToast')



kyc.addEventListener("submit", async(e)=>{
    e.preventDefault();

    const data = {
        gender:kyc.gender.value,
        dob:kyc.dob.value,
        bvn:kyc.bvn.value,
        employers_name:kyc.employers_name.value,
        customer_nickname:kyc.customer_nickname.value,
        relationship:kyc.relationship.value,
        id_type:kyc.id_type.value,
        id_no:kyc.id_no.value,
        id_issue_date:kyc.id_issue_date.value,
        expiry_date:kyc.expiry_date.value,
        expected_income:kyc.expected_income.value,
        other_income:kyc.other_income.value,
        refferral:kyc.refferral.value,
    }


    const response = await axios.post('backend/kyc.php', data);
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



