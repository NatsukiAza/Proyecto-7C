// JavaScript code
function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
    let u = document.getElementsByClassName('gorod');
    let a = document.getElementsByClassName('krovi');
    let b = document.getElementsByClassName('der');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
            u[i].style.display="none";
            a[i].style.display="none";
            b[i].style.display="none";
        }
        else {
            x[i].style.display="inline";    
            u[i].style.display="inline";
            a[i].style.display="inline";    
            b[i].style.display="inline-table";       
        }
    }
}
