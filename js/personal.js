const forms = document.getElementById("personal_details");
const branch = document.getElementById("branch");
const dual = document.querySelectorAll("#dual");
const acc_category = document.querySelectorAll("#acc_category");
const acc_type = document.querySelectorAll("#acc_type");

let dualValue, category, accountType;

forms.addEventListener("submit", async(e)=>{
    e.preventDefault();

    dual.forEach(d=>{
        if (d.checked) {
            dualValue = d.value;
        }
    })

    acc_category.forEach(acc =>{
        if (acc.checked) {
            category = acc.value;
        }
    })

    acc_type.forEach(acc =>{
        if ( acc.checked ) {
            accountType = acc.value;
        }
    })

    const data = {
        branch:branch.value,
        title:forms.title.value,
        surname:forms.surname.value,
        firstname:forms.firstname.value,
        othername:forms.othername.value,
        maidenName:forms.maiden_name.value,
        pob:forms.pob.value,
        nationality:forms.nationality.value,
        origin:forms.sog.value,
        marital_status:forms.marital_status.value,
        dual_citizenship:dualValue,
        acc_category:category,
        acc_type:accountType
    }


    const response = await axios.post('backend/personal_details.php', data);
    if (response) {
        alert(response.data.statusText);
    }
})



