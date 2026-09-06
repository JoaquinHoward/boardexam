window.toggleOption = function(event, element){
    event.preventDefault();
    element.querySelector('.checkbox').classList.toggle('hidden');
    element.querySelector('.checkmark').classList.toggle('hidden');

    let optionIsSelected = document.querySelectorAll('.checkmark:not(.hidden)').length > 0;
    document.querySelector('.start-btn').classList.toggle('hidden', !optionIsSelected);

}

