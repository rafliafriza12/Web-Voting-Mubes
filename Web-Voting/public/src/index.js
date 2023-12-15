const showOverlay1 = () => {
    const overlay = document.getElementById('confirm-vote1');
    const closeOverlay = document.getElementById('closeOverlay1');
    const agree = document.getElementById('agreement1');
    const vote1 = document.getElementById('vote1');
    const vote2 = document.getElementById('vote2');

    overlay.classList.remove('hidden');

    const hideOverlay = () => {
        overlay.classList.add('hidden');
    };

    agree.addEventListener('click', hideOverlay)

    closeOverlay.addEventListener('click', hideOverlay);
};

const showOverlay2 = () => {
    const overlay = document.getElementById('confirm-vote2');
    const closeOverlay = document.getElementById('closeOverlay2');
    const agree = document.getElementById('agreement2');
    const vote1 = document.getElementById('vote1');
    const vote2 = document.getElementById('vote2');

    overlay.classList.remove('hidden');

    const hideOverlay = () => {
        overlay.classList.add('hidden');
    };

    agree.addEventListener('click', hideOverlay)

    closeOverlay.addEventListener('click', hideOverlay);
};

const vote1 = document.getElementById('vote1').addEventListener('click', showOverlay1);
const vote2 = document.getElementById('vote2').addEventListener('click', showOverlay2);


