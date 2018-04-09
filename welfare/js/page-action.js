function show(c_Str){
    if(document.all(c_Str).style.display=='none')
    {
        document.all(c_Str).style.display='block';
    }
    else{
        document.all(c_Str).style.display='none';
    }
}

function setContent(id) {
    switch(id){
        case 1:
            document.all("menu1").style.display = 'block';
            document.all("menu2").style.display = 'none';
            document.all("a1").style.backgroundColor = "#e80e19";
            document.all("a2").style.backgroundColor = "#ffae1f";
            break;
        case 2:
            document.all("menu1").style.display = 'none';
            document.all("menu2").style.display = 'block';
            document.all("a1").style.backgroundColor = "#ffae1f";
            document.all("a2").style.backgroundColor = "#e80e19";
            break;
    }
}