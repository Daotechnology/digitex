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
    if (response) {
        alert(response.data.statusText);
    }
})



