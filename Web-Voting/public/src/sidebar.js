const openSidebar = () =>{
    const sidebar = document.getElementById('sidebar');
    document.getElementById('openSidebar').addEventListener('click', openSidebar);

    if(sidebar.classList.contains('hidden')){
        sidebar.classList.remove('hidden');
    }
    else{
        sidebar.classList.add('hidden');
    }
}

const buttonSidebar = document.getElementById('openSidebar').addEventListener('click', openSidebar);