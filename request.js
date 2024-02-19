const xhr = new XMLHttpRequest();
xhr.open('POST', 'php/login.php', true);
xhr.addEventListener('load', () => {
    if (xhr.readyState == 200) {
        if(xhr.response == 'success'){
            alert('hello');
        }
    }
});