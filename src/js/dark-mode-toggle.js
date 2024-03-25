/* -----------------------------
------ Dark Mode Toggle --------
------------------------------ */
const checkbox = document.getElementById('checkbox');
checkbox.addEventListener('change', ()=>{
    document.body.classList.toggle('light');

    localStorage.setItem('checkbox', body.classList.contains('checkbox'));
})