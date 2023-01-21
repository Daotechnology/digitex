const kyc = document.getElementById("kyc");


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
    if (response) {
        alert(response.data.statusText);
    }
})



