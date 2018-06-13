var i=0;
document.addEventListener("DOMContentLoaded", function(){
    var root = document.querySelector('#gallery');
    var els = root.querySelectorAll(':not(:first-child)');
    for (i=0; i < els.length; i++) {
    els[i].classList.add('hidden');
    }
    root.addEventListener('transitionend', function(){
        var element = root.querySelector(':first-child.hidden');
        if (element) {
            root.insertBefore(root.querySelector(':first-child.hidden'), null);
        }
    });
    setInterval(function(){
    root.querySelector(':first-child').classList.add('hidden');
    root.querySelector(':nth-child(2)').classList.remove('hidden');
    }, 3000)
});
