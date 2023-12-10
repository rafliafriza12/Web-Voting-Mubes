const showOverlay = () => {
    const overlay = document.getElementById('confirm-vote');
    const closeOverlay = document.getElementById('closeOverlay');
    const agree = document.getElementById('agreement');
    const vote1 = document.getElementById('vote1');
    const vote2 = document.getElementById('vote2');
    let cekVote;
    overlay.classList.remove('hidden');

    const hideOverlay = () => {
        vote1.classList.add('hidden');
        vote2.classList.add('hidden');
        overlay.classList.add('hidden');
    };

    agree.addEventListener('click', hideOverlay)
    closeOverlay.addEventListener('click', () => {
        overlay.classList.add('hidden');
    });
};

const vote1 = document.getElementById('vote1').addEventListener('click', showOverlay);
const vote2 = document.getElementById('vote2').addEventListener('click', showOverlay);


