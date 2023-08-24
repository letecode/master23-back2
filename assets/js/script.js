// fetch ajax

let form = document.querySelector('form');

form.addEventListener('submit', function(e){
    e.preventDefault();

    let data = new FormData(e.target);

    fetch('includes/login.php', {'method':'POST','body': data})
        .then((res) => {
            return res.json();
        }).then((data) => {
            console.log(data);
        })
})
