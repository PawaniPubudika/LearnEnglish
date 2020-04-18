const grid=function () {
    return Array.from(document.getElementsByClassName("q"));
};

// replace id 'q' with ' ' & convert that string to integer
const qNumId = function (qEl) {
    return Number.parseInt(qEl.id.replace('q', ''));
};



const clickFn = function($event){
    return console.log($event.target);
};


const enableListeners=function () {
    return grid().forEach(adding);
};

function adding(qelement) {
    return qelement.addEventListener('click', clickFn);
}
const disableListeners = function() {
    return grid().forEach(removing);
};

function removing(qelement) {
    return qelement.removeEventListener('click', clickFn);
}

enableListeners();




