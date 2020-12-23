const itemlist=Array.from(document.querySelectorAll('.vn-flag-item'));
let delaytime=0;
for(let i=0;i<200;i++){
    itemlist[i].style.animationDelay=delaytime+'s';
    delaytime=delaytime-0.06;
}

