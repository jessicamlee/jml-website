/* -----------------------------
------ Dark Mode Toggle --------
------------------------------ */
const checkbox = document.getElementById('checkbox');
checkbox.addEventListener('change', ()=>{
    document.body.classList.toggle('light');
})