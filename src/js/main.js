function changeMethod($method) {
    const current = document.getElementsByClassName('active');
    current[0].classList.remove('active');
    document.getElementById($method).classList.add('active');
    document.getElementById('hiddenMethod').innerText = $method;
}
