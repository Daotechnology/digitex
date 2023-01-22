
<footer>

<script>
        const logout = document.querySelector("#logout");
        logout.addEventListener("click",async(e)=>{
            e.preventDefault();
            const response = await axios.get('backend/logout.php');
            if (response) {
                location.href = 'index.php';
            }
        })
    </script>
</footer>
