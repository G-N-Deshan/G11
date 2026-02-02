function message(){

    const urlParams = new URLSearchParams(window.location.search);
    const loginStatus = urlParams.get('login');
    
    if(loginStatus === 'success'){
        alert('Login Successful!');
        window.history.replaceState({}, document.title, window.location.pathname);
    }
}

window.addEventListener('load', message);